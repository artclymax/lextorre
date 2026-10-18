<?php
$page = 'options';
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';

$title = get_field('about_title', $page)[$lang] ?? '';
$descr = get_field('about_descr', $page)[$lang] ?? '';
$list = get_field('about_list', $page) ?? '';
$image = get_field('about_image', $page) ?? '';

?>
<section class="section about" id="about">
	<div class="uncontainer about__uncontainer">
		<div class="uncontainer__content about__content">
			<div class="about__descr descr">
				<?php echo wp_kses_post($descr) ?>
			</div>
			<div class="about__advantages about-advantages">
				<h2 class="about-advantages__title title-1">
					<?php echo esc_html($title) ?>
				</h2>
				<?php if ($list): ?>
					<ul class="about-advantages__list">
						<?php foreach ($list as $item): ?>
							<li class="about-advantages__item about-advantages-item">
								<h3 class="about-advantages-item__title title-3">
									<?php echo esc_html($item['title'][$lang]) ?>
								</h3>
								<div class="about-advantages-item__descr descr">
									<?php echo wp_kses_post($item['descr'][$lang]) ?>
								</div>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
		<div class="uncontainer__full about__image image-box">
			<?php echo wp_get_attachment_image(
				$image['ID'],
				'large',
				false,
				array(
					'class' => 'img',
					'alt' => $image['alt'] ?: $title
				)
			); ?>
		</div>
	</div>
</section>
