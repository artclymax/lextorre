<?php
$page = 'options';
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';

$title = get_field('locations_title', $page)[$lang] ?? '';
$descr = get_field('locations_descr', $page)[$lang] ?? '';
$list = get_field('locations_list', $page) ?? '';
$image = get_field('locations_image', $page) ?? '';
$image_mobile = get_field('locations_image_mobile', $page) ?? '';

?>
<section class="locations" id="locations">
	<div class="container locations__container">
		<?php if ($list): ?>
			<ul class="locations__list">
				<?php foreach ($list as $item): ?>
					<li class="locations__item locations-item">
						<?php echo esc_html($item['loc_title']) ?>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
		<h2 class="locations__title title-1">
			<?php echo esc_html($title) ?>
		</h2>
		<div class="locations__descr descr">
			<?php echo wp_kses_post($descr) ?>
		</div>
	</div>
	<div class="locations__image image-box">
		<?php echo wp_get_attachment_image(
			$image['ID'],
			'large',
			false,
			array(
				'class' => 'hidden-mobile',
				'alt' => $image['alt'] ?: $title
			)
		); ?>
		<?php echo wp_get_attachment_image(
			$image_mobile['ID'],
			'large',
			false,
			array(
				'class' => 'visible-mobile',
				'alt' => $image_mobile['alt'] ?: $title
			)
		); ?>
	</div>
</section>