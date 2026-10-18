<?php
$page = 'options';
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';

$btn_person = get_field('section_team_btn_person', $page)[$lang] ?? '';

$args = [
	'post_type' => 'team',
	'posts_per_page' => -1, // все записи
	'orderby' => 'menu_order',
	'order' => 'ASC'
];

$query = new WP_Query($args);
?>
<section class="archive-team" id="archive-team">
	<div class="container archive-team__container">
		<ul class="archive-team__list">
			<?php if ($query->have_posts()):
				while ($query->have_posts()):
					$query->the_post();
					?>
					<li class="archive-team__item section-team-item">
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
								<?php echo esc_html($btn_person) ?>
							</span>
						</a>
					</li>
					<?php
				endwhile;
				wp_reset_postdata();
			endif;
			?>
		</ul>
	</div>
</section>