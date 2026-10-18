<?php
$page = 'options';
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';

$title = get_field('section_news_title', $page)[$lang] ?? '';
$btn = get_field('section_news_btn', $page)[$lang] ?? '';
$btn_single = get_field('section_news_btn_single', $page)[$lang] ?? '';

$args = [
	'post_type' => 'news',
	'posts_per_page' => 3,
];

$query = new WP_Query($args);
?>
<section class="section section-news" id="news">
	<div class="container section-news__container">
		<h2 class="section-news__title title-1 mobile-decor">
			<?php echo esc_html($title) ?>
		</h2>
		<ul class="section-news__list">
			<?php if ($query->have_posts()):
				while ($query->have_posts()):
					$query->the_post();
					?>
					<li class="section-news__item section-news-item">
						<time class="section-news-item__date" datetime="<?= esc_attr(get_the_date('n-j-Y')) ?>">
							<?= esc_html(get_the_date()) ?>
						</time>
						<div class="section-news-item__content">
							<h3 class="section-news-item__title title-3">
								<?php the_title(); ?>
							</h3>
							<div class="section-news-item__descr descr">
								<?php the_excerpt(); ?>
							</div>
							<a class="section-news-item__btn btn btn--stroke" href="<?php the_permalink(); ?>">
								<?php echo esc_html($btn_single) ?>
							</a>
						</div>
						<div class="section-news-item__category">
							<?php the_category() ?>
						</div>

					</li>
					<?php
				endwhile;
				wp_reset_postdata();
			endif;
			?>
		</ul>
		<a class="section-news__btn btn btn--stroke" href="<?php echo esc_attr($btn['url']) ?>">
			<?php echo esc_html($btn['title']) ?>
		</a>
	</div>
</section>