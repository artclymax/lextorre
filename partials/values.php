<?php
$page = 'options';
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';

$title = get_field('values_title', $page)[$lang] ?? '';
$list = get_field('values_list', $page) ?? '';
$image = get_field('values_image', $page) ?? '';
?>
<section class="values" id="values">
	<div class="container values__container">
		<h2 class="values__title title-1 mobile-decor-wide">
			<?php echo esc_html($title) ?>
		</h2>
		<ul class="values__list">
			<?php foreach ($list as $item): ?>
				<li class="values__item values-item">
					<div class="values-item__icon">
						<?php echo wp_get_attachment_image(
							$item['values_list_image']['ID'],
							'large',
							false,
							array(
								'class' => 'img',
								'alt' => $item['values_list_image']['alt'] ?: $item['values_list_title'][$lang]
							)
						); ?>
					</div>
					<h3 class="values-item__title title-3">
						<?php echo esc_html($item['values_list_title'][$lang]) ?>
					</h3>
					<div class="values-item__descr descr">
						<?php echo wp_kses_post($item['values_list_descr'][$lang]) ?>
					</div>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
	<div class="values__bg image-box">
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
</section>