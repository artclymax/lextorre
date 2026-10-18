<?php
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';
$list = get_field('memoriam_values', 'options') ?? '';
?>
<section class="values-in-memoriam" id="values-in-memoriam">
	<div class="container values-in-memoriam__container">
		<?php if ($list): ?>
			<ul class="values-in-memoriam__list grid">
				<?php foreach ($list as $item): ?>
					<li class="values-in-memoriam__item values-in-memoriam-item">
						<h3 class="values-in-memoriam-item__title title-3">
							<?php echo esc_html($item['memoriam_values_title'][$lang]) ?>
						</h3>
						<div class="values-in-memoriam-item__descr descr">
							<?php echo wp_kses_post($item['memoriam_history_descr'][$lang]) ?>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>
</section>