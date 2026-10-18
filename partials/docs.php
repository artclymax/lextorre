<?php
$page = 'options';
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';

$title = get_field('docs_title', $page)[$lang] ?? '';

$args = [
	'post_type' => 'docs',
	'posts_per_page' => -1, // все записи
	'orderby' => 'menu_order',
	'order' => 'ASC'
];

$query = new WP_Query($args);
?>
<section class="section docs" id="docs">
	<div class="container docs__container">
		<h2 class="docs__title title-1 mobile-decor">
			<?php echo esc_html($title) ?>
		</h2>
		<div class="swiper docs-swiper" data-swiper="{'slidesPerView': 'auto', 'spaceBetween': 18, 'loop': true}">
			<div class="swiper-wrapper docs-swiper__wrapper">
				<?php if ($query->have_posts()):
					while ($query->have_posts()):
						$query->the_post();
						?>
						<div class="swiper-slide docs-slide">
							<a class="docs-slide__wrapper-link image-box" data-fancybox href="<?php the_post_thumbnail_url() ?>">
								<?php the_post_thumbnail() ?>
							</a>
						</div>
						<?php
					endwhile;
					wp_reset_postdata();
				endif;
				?>
			</div>
			<div class="swiper-btn-box visible-mobile">
				<button class="swiper-btn swiper-btn__prev docs-swiper__btn docs-swiper__btn-prev" type="button"
					aria-label="Назад" data-swiper-btn-prev=".docs-swiper">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M12 2C17.52 2 22 6.48 22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2ZM12 20C16.42 20 20 16.42 20 12C20 7.58 16.42 4 12 4C7.58 4 4 7.58 4 12C4 16.42 7.58 20 12 20ZM12 11H16V13H12V16L8 12L12 8V11Z"
							fill="currentColor" />
					</svg>
				</button>
				<button class="swiper-btn swiper-btn__next docs-swiper__btn docs-swiper__btn-next" type="button"
					aria-label="Вперёд" data-swiper-btn-next=".docs-swiper">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 20C7.58 20 4 16.42 4 12C4 7.58 7.58 4 12 4C16.42 4 20 7.58 20 12C20 16.42 16.42 20 12 20ZM12 11H8V13H12V16L16 12L12 8V11Z"
							fill="currentColor" />
					</svg>
				</button>
			</div>
		</div>
	</div>
</section>