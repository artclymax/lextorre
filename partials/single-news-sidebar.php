<?php
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';

global $post;

// Получаем категории текущей новости
$categories = wp_get_post_terms($post->ID, 'category', ['fields' => 'ids']);

// Аргументы для похожих новостей
$args = [
	'post_type' => 'news',
	'posts_per_page' => 5,
	'post__not_in' => [$post->ID],
];

// Если есть категории — фильтруем по ним
if (!empty($categories)) {
	$args['tax_query'] = [
		[
			'taxonomy' => 'category',
			'field' => 'term_id',
			'terms' => $categories,
		]
	];
}

$query = new WP_Query($args);

// Если похожих меньше 5, добавляем недостающие последние новости
if ($query->found_posts < 5) {
	$exclude_ids = array_merge([$post->ID], wp_list_pluck($query->posts, 'ID'));

	$args_last = [
		'post_type' => 'news',
		'posts_per_page' => 5 - $query->found_posts,
		'post__not_in' => $exclude_ids,
		'orderby' => 'date',
		'order' => 'DESC',
	];

	$last_query = new WP_Query($args_last);

	// объединяем посты
	$query->posts = array_merge($query->posts, $last_query->posts);
	$query->post_count = count($query->posts);
}
?>

<aside class="single-news-sidebar" id="single-news-sidebar">
	<h2 class="single-news-sidebar__title">
		<?php if ($lang == 'en'): ?>
			Related news
		<?php else: ?>
			Похожие новости
		<?php endif; ?>
	</h2>
	<ul class="single-news-sidebar__list">
		<?php if ($query->have_posts()): ?>
			<?php foreach ($query->posts as $post_item):
				setup_postdata($post_item); ?>
				<li class="single-news-sidebar__item single-news-sidebar-item">
					<a class="single-news-sidebar-item__link-wrapper" href="<?php echo get_permalink($post_item); ?>">
						<time class="single-news-sidebar-item__date" datetime="<?php echo get_the_date('c', $post_item); ?>">
							<?php echo get_the_date('d.m.Y', $post_item); ?>
						</time>
						<h3 class="single-news-sidebar-item__title">
							<?php echo get_the_title($post_item); ?>
						</h3>
					</a>
				</li>
			<?php endforeach;
			wp_reset_postdata(); ?>
		<?php endif; ?>
	</ul>
</aside>