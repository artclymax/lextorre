<?php
$page = 'options';
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';

$title = get_field('thank_you_title', $page)[$lang] ?? '';
$descr = get_field('thank_you_descr', $page)[$lang] ?? '';
$btn = get_field('thank_you_btn', $page)[$lang] ?? '';
$image = get_field('thank_you_image', $page) ?? '';

?>
<section class="hero-thank-you" id="hero-thank-you"
	style="background-image: url('<?php echo esc_attr($image['url']) ?>')">
	<div class="container hero-thank-you__container">
		<h1 class="hero-thank-you__title title-1">
			<?php echo esc_html($title) ?>
		</h1>
		<div class="hero-thank-you__descr descr title-3">
			<?php echo wp_kses_post($descr) ?>
		</div>
		<div class="hero-thank-you__form">
			<p>
				<?php if ($lang == 'en'): ?>
					Check that the data is correct
				<?php else: ?>
					Проверьте правильность данных
				<?php endif; ?>
			</p>
			<input class="hero-thank-you__input form-input form-field__input" type="text" placeholder="Имя"
				value="<?php echo $_GET['user_name'] ?? ''; ?>" readonly="" />
			<input class="hero-thank-you__input form-input form-field__input" type="text" placeholder="Телефон"
				value="<?php echo $_GET['user_email'] ?? ''; ?>" readonly="" />
			<a class="btn hero-thank-you__btn" href="<?php echo esc_url($btn['url']) ?>">
				<?php echo esc_html($btn['title']) ?>
			</a>
		</div>
	</div>
</section>