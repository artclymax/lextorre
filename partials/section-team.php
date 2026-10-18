<?php
$page = 'options';
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';

$title = get_field('section_team_title', $page)[$lang] ?? '';
$btn = get_field('section_team_btn', $page)[$lang] ?? '';
$btn_person = get_field('section_team_btn_person', $page)[$lang] ?? '';

$args = [
	'post_type' => 'team',
	'posts_per_page' => -1, // все записи
	'orderby' => 'menu_order',
	'order' => 'ASC'
];

$query = new WP_Query($args);
?>
<section class="section section-team" id="section-team">
	<div class="container section-team__container">
		<h2 class="section-team__title title-1 descr mobile-decor">
			<?php echo wp_kses_post($title) ?>
		</h2>
		<ul class="section-team__list">
			<?php if ($query->have_posts()):
				while ($query->have_posts()):
					$query->the_post();
					?>
					<li class="section-team__item section-team-item">
						<a class="section-team-item__link-wrapper" href="<?php the_permalink(); ?>">
							<div class="section-team-item__image image-box">
								<?php the_post_thumbnail() ?>
							</div>
							<h3 class="section-team-item__title title-3">
								<?php the_title(); ?>
							</h3>
							<p class="section-team-item__position">
								<?php echo esc_html(get_field('team_position')) ?>
							</p>
							<span class="section-team-item__btn btn btn--stroke">
								<?php echo esc_html($btn_person)?>
							</span>
						</a>
					</li>
					<?php
				endwhile;
				wp_reset_postdata();
			endif;
			?>
		</ul>
		<a class="section-team__btn btn btn--stroke" href="<?php echo esc_attr($btn['url']) ?>">
			<?php echo esc_html($btn['title']) ?>
		</a>
	</div>
</section>