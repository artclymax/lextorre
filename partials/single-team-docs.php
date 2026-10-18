<?php
$page = 'options';
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';
$list = get_field('team_docs') ?? '';
?>
<?php if ($list): ?>
	<section class="single-team-docs" id="single-team-docs">
		<div class="container single-team-docs__container">
			<h2 class="single-team-docs__title title-1 mobile-decor-wide">
				<?php if ($lang == 'en'): ?>
					Publications
				<?php else: ?>
					Публикации
				<?php endif; ?>
			</h2>
			<ul class="single-team-docs__list grid">
				<?php foreach ($list as $item): ?>
					<li class="single-team-docs__item single-team-docs-item">
						<a class="single-team-docs-item__link-wrapper"
							href="<?php echo esc_attr($item['team_docs_link']['url']) ?>">
							<div class="single-team-docs-item__meta">
								<span class="single-team-docs-item__date">
									<?php echo esc_html($item['team_docs_date']) ?>
								</span>
								<span class="single-team-docs-item__category">
									<?php echo esc_html($item['team_docs_category']) ?>
								</span>
							</div>

							<h3 class="single-team-docs-item__title title-3">
								<?php echo esc_html($item['team_docs_title']) ?>
							</h3>
							<div class="single-team-docs-item__descr descr">
								<?php echo wp_kses_post($item['team_docs_descr']) ?>
							</div>
							<span class="single-team-docs-item__btn btn btn--stroke">
								<?php echo esc_attr($item['team_docs_link']['title']) ?>
							</span>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>