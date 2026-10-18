<?php
$page = 'options';
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';

$title = get_field('hero_about_title', $page)[$lang] ?? '';
$descr = get_field('hero_about_descr', $page)[$lang] ?? '';
$list = get_field('hero_about_list', $page) ?? '';
$image = get_field('hero_about_image', $page) ?? '';

?>
<section class="hero-about" id="hero-about" style="background-image: url('<?php echo esc_attr($image['url']); ?>')">
	<div class="container hero-about__container">
		<?php get_template_part('partials/breadcrumbs'); ?>
		<div class="hero-about__header">
			<h1 class="hero-about__title title-1 descr">
				<?php echo wp_kses_post($title) ?>
			</h1>
			<div class="hero-about__descr descr">
				<?php echo wp_kses_post($descr) ?>
			</div>
		</div>
		<?php if ($list): ?>
			<ul class="hero-about__list">
				<?php foreach ($list as $item): ?>
					<li class="hero-about__item hero-about-item">
						<h3 class="hero-about-item__title title-2">
							<?php echo esc_html($item['hero_about_list_title'][$lang]) ?>
						</h3>
						<div class="hero-about-item__descr descr">
							<?php echo wp_kses_post($item['hero_about_list_descr'][$lang]) ?>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>
</section>