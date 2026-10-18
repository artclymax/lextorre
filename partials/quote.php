<?php
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';

$title = get_field('memoriam_quote_title', 'options')[$lang] ?? '';
$descr = get_field('memoriam_quote_descr', 'options')[$lang] ?? '';
$image = get_field('memoriam_quote_image', 'options') ?? '';
$image_mobile = get_field('memoriam_quote_image_mobile', 'options') ?? '';
?>
<section class="quote" id="quote">
	<div class="container quote__container">
		<blockquote class="quote__text descr">
			<?php echo wp_kses_post($descr) ?>
		</blockquote>
		<p class="quote__author">
			<?php echo esc_html($title) ?>
		</p>
	</div>
	<div class="quote__bg-box image-box">
		<?php echo wp_get_attachment_image(
			$image_mobile['ID'],
			'large',
			false,
			array(
				'class' => 'quote__bg-small',
				'alt' => $image_mobile['alt'] ?: ''
			)
		); ?>
		<?php echo wp_get_attachment_image(
			$image['ID'],
			'large',
			false,
			array(
				'class' => 'quote__bg-big',
				'alt' => $image['alt'] ?: ''
			)
		); ?>
	</div>
</section>