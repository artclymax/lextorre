<?php
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';

$photo = get_field('memoriam_hero_photo', 'options') ?? '';
$name = get_field('memoriam_hero_name', 'options')[$lang] ?? '';
$date = get_field('memoriam_hero_date', 'options') ?? '';
$image = get_field('memoriam_hero_image', 'options') ?? '';
?>
<section class="hero-in-memoriam" id="hero-in-memoriam"
	style="background-image: url('<?php echo esc_attr($image['url']) ?>');">
	<div class="container hero-in-memoriam__container">
		<div class="hero-in-memoriam__breadcrumbs breadcrumbs breadcrumbs-dark">
			<?php my_breadcrumbs() ?>
		</div>
		<div class="hero-in-memoriam__wrapper">
			<div class="hero-in-memoriam__image image-box">
				<?php echo wp_get_attachment_image(
					$photo['ID'],
					'large',
					false,
					array(
						'class' => 'img',
						'alt' => $photo['alt'] ?: ''
					)
				); ?>
			</div>
			<div class="hero-in-memoriam__content">
				<h1 class="hero-in-memoriam__title">
					<?php the_title(); ?>
				</h1>
				<h2 class="hero-in-memoriam__name title-hero">
					<?php echo esc_html($name) ?>
				</h2>
				<p class="hero-in-memoriam__date">
					<?php echo esc_html($date) ?>
				</p>
			</div>
		</div>
	</div>
</section>