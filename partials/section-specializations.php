<?php
$page = 'options';
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';

$title = get_field('section_spec_title', $page)[$lang] ?? '';
$btn = get_field('section_spec_btn', $page)[$lang] ?? '';

$args = [
	'post_type' => 'specializations',
	'posts_per_page' => 8, // все записи
	'orderby' => 'menu_order',
	'order' => 'ASC'
];

$query = new WP_Query($args);
?>
<section class="section section-specializations" id="specializations">
	<div class="container section-specializations__container">
		<h2 class="section-specializations__title title-1 mobile-decor">
			<?php echo esc_html($title) ?>
		</h2>
		<ul class="section-specializations__list">
			<?php if ($query->have_posts()):
				while ($query->have_posts()):
					$query->the_post();
					?>
					<li class="section-specializations__item section-specializations-item">
						<a class="section-specializations-item__link-wrapper" href="<?php the_permalink(); ?>">
							<h3 class="section-specializations-item__title title-3">
								<?php the_title(); ?>
							</h3>
							<div class="section-specializations-item__descr descr">
								<?php the_excerpt(); ?>
							</div>
						</a>
					</li>
					<?php
				endwhile;
				wp_reset_postdata();
			endif;
			?>
		</ul>
		<a class="section-specializations__btn btn btn--stroke" href="<?php echo esc_attr($btn['url']) ?>">
			<?php echo esc_html($btn['title']) ?>
		</a>
	</div>
</section>