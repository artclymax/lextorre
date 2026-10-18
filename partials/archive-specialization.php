<?php
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';
$args = [
	'post_type' => 'specializations',
	'posts_per_page' => -1, // все записи
	'orderby' => 'menu_order',
	'order' => 'ASC'
];

$query = new WP_Query($args);
?>

<section class="section archive-specializations" id="archive-specializations">
	<div class="container archive-specializations__container">
		<ul class="archive-specializations__list grid">
			<?php
			if ($query->have_posts()):
				while ($query->have_posts()):
					$query->the_post();
					?>
					<li class="archive-specializations__item archive-specializations-item">
						<a class="archive-specializations-item__link-wrapper" href="<?php the_permalink() ?>">
							<div class="archive-specializations-item__content">
								<h3 class="archive-specializations-item__title title-2">
									<?php the_title() ?>
								</h3>
								<div class="archive-specializations-item__descr descr">
									<?php the_excerpt() ?>
								</div>
								<span class="archive-specializations-item__btn btn btn--stroke btn--small">
									<?php if ($lang == 'en'): ?>
										More
									<?php else: ?>
										Подробнее
									<?php endif; ?>
								</span>
							</div>
						</a>
					</li>
				<?php endwhile;
				wp_reset_postdata();
			endif; ?>
		</ul>
	</div>
</section>