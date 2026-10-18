<?php
$page = 'options';
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';

$title = get_field('page_404_title', $page)[$lang] ?? '';
$descr = get_field('page_404_descr', $page)[$lang] ?? '';
$btn = get_field('page_404_btn', $page)[$lang] ?? '';
$image = get_field('page_404_image', $page) ?? '';
$image_mobile = get_field('page_404_image_mobile', $page) ?? '';
?>

<section class="hero-404" id="hero-404"
	style="background-image: url('<?php echo esc_attr($image['url']) ?>'); --bg-mobile: url('<?php echo esc_attr($image_mobile['url']) ?>');">
	<div class="container hero-404__container">
		<h1 class="hero-404__title title-1">
			<?php echo esc_html($title) ?>
		</h1>
		<div class="hero-404__descr descr title-3">
			<?php echo wp_kses_post($descr) ?>
		</div>
		<a class="btn hero-404__btn" href="	<?php echo esc_attr($btn['url']) ?>">
			<?php echo esc_html($btn['title']) ?>
		</a>
	</div>
</section>