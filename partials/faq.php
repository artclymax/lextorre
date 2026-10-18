<?php
$page = 'options';
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';

$title = get_field('faq_title', $page)[$lang] ?? '';
$descr = get_field('faq_descr', $page)[$lang] ?? '';
$image = get_field('faq_image', $page) ?? '';

$args = [
	'post_type' => 'faq',
	'posts_per_page' => -1, // все записи
	'orderby' => 'menu_order',
	'order' => 'ASC'
];

$query = new WP_Query($args);
?>
<section class="faq" id="specializations" style="background-image: url('<?= esc_attr($image['url']) ?>');">
	<div class="container faq__container">
		<div class="faq__content">
			<h2 class="faq__title title-1 mobile-decor">
				<?php echo esc_html($title) ?>
			</h2>
			<div class="faq__descr descr">
				<?php echo wp_kses_post($descr) ?>
			</div>
		</div>
		<ul class="faq__list">
			<?php if ($query->have_posts()):
				$index = 0;
				while ($query->have_posts()):
					$query->the_post();
					?>
					<li class="faq__item faq-item <?= !$index ? 'spoiler-active' : '' ?>" data-spoiler>
						<button class="faq-item__btn" data-spoiler-title>
							<h3 class="faq-item__title"><?php the_title(); ?></h3>
							<div class="faq-item__icon">
								<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M4 10L8 6L12 10" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round"
										stroke-linejoin="round" />
								</svg>
							</div>
						</button>
						<div class="faq-item__content" data-spoiler-content>
							<div class="faq-item__descr descr">
								<?php the_content() ?>
							</div>
						</div>
					</li>
					<?php
					$index++;
				endwhile;
				wp_reset_postdata();
			endif;
			?>
		</ul>
	</div>
</section>