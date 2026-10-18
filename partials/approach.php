<?php
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';

$title = get_field('approach_title', 'options')[$lang] ?? '';
$list = get_field('approach_list', 'options') ?? '';
?>
<?php if ($list): ?>
	<section class="approach" id="approach">
		<div class="container approach__container">
			<h2 class="approach__title title-1 mobile-decor-wide">
				<?php echo esc_html($title) ?>
			</h2>
			<ul class="approach__list grid">
				<?php foreach ($list as $item): ?>
					<li class="approach__item approach-item">
						<h3 class="approach-item__title title-3">
							<?php echo esc_html($item['approach_list_title'][$lang]) ?>
						</h3>
						<div class="approach-item__descr descr">
							<?php echo wp_kses_post($item['approach_list_descr'][$lang]) ?>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>