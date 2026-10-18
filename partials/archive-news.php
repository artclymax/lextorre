<?php
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';

$queried = get_queried_object();

$args = [
	'post_type' => 'news',
	'posts_per_page' => -1,
	'orderby' => 'menu_order',
	'order' => 'ASC'
];

// если это страница категории
if ($queried instanceof WP_Term) {
	$args['tax_query'] = [
		[
			'taxonomy' => 'category',
			'field' => 'term_id',
			'terms' => $queried->term_id,
		]
	];
}

$query = new WP_Query($args);
?>
<section class="section archive-news" id="archive-news">
	<div class="container archive-news__container">
		<ul class="archive-news__list">
			<?php
			if ($query->have_posts()):
				while ($query->have_posts()):
					$query->the_post();
					?>
					<li class="archive-news__item archive-news-item">
						<div class="archive-news-item__link-wrapper">
							<div class="archive-news-item__content">
								<div class="archive-news-item__meta">
									<time class="archive-news-item__date" datetime="<?php echo esc_attr(get_the_date('Y-d-j')) ?>">
										<?php echo esc_html(get_the_date()) ?>
									</time>
									<div class="archive-news-item__category">
										<?php the_category() ?>
									</div>
								</div>
								<h3 class="archive-news-item__title title-3">
									<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
								</h3>
								<div class="archive-news-item__descr descr">
									<?php the_excerpt() ?>
								</div>
								<a class="archive-news-item__btn btn btn--stroke" href="<?php the_permalink() ?>">
									<?php if ($lang == 'en'): ?>
										Read
									<?php else: ?>
										Читать
									<?php endif; ?>
								</a>
							</div>
							<a class="archive-news-item__image image-box" href="<?php the_permalink() ?>">
								<?php the_post_thumbnail() ?>
							</a>
						</div>
					</li>
					<?php
				endwhile;
				wp_reset_postdata();
			endif;
			?>
		</ul>
	</div>
</section>