<?php
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';
$descr = get_field('memoriam_final_descr', 'options')[$lang] ?? '';
$list = get_field('memoriam_final', 'options') ?? '';
?>
<section class="final-in-memoriam" id="final-in-memoriam">
	<div class="container final-in-memoriam__container">
		<div class="final-in-memoriam__descr descr title-3">
			<?php echo wp_kses_post($descr) ?>
		</div>
		<?php if ($list): ?>
			<div class="final-in-memoriam__btn-box">
				<?php foreach ($list as $item): ?>
					<a class="final-in-memoriam__link btn btn--stroke"
						href="<?php echo esc_attr($item['memoriam_final_link'][$lang]['url']) ?>">
						<?php echo esc_html($item['memoriam_final_link'][$lang]['title']) ?>
					</a>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>