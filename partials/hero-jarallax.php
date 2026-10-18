<?php
$page = 'options';
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';

$title = get_field('hero_title', $page)[$lang] ?? '';
$descr = get_field('hero_descr', $page)[$lang] ?? '';
$btn = get_field('hero_btn', $page)[$lang] ?? '';
$benefits = get_field('hero_benefits', $page)[$lang] ?? '';
$image = get_field('hero_image', $page) ?? '';
$image_mobile = get_field('hero_image_mobile', $page) ?? '';

?>
<section class="hero jarallax" id="hero">
	<div class="container hero__container">
		<div class="hero__title-box">
			<h1 class="hero__title descr">
				<?php echo esc_html($title) ?>
			</h1>
		</div>
		<div class="hero__content">
			<div class="hero__descr descr">
				<?php echo wp_kses_post($descr) ?>
			</div>
			<a class="hero__btn btn" href="<?php echo esc_attr($btn['url']) ?>">
				<?php echo esc_html($btn['title']) ?>
			</a>
		</div>
		<div class="hero__benefits-descr descr">
			<?php echo wp_kses_post($benefits) ?>
		</div>
		<div class="hero__image image-box jarallax-img">
			<?php echo wp_get_attachment_image(
				$image_mobile['ID'],
				'large',
				false,
				array(
					'class' => '',
					'alt' => $image_mobile['alt'] ?: ''
				)
			); ?>
		</div>
	</div>
</section>