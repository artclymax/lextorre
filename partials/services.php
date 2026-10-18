<?php
$page = 'options';
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';

$list = get_field('services_list', $page) ?? '';
?>
<section class="services" id="services">
	<div class="container services__container">
		<ul class="services__list grid">
			<?php foreach ($list as $item): ?>
				<li class="services__item services-item">
					<div class="services-item__wrapper">
						<h3 class="services-item__title">
							<?php echo esc_html($item['title'][$lang]) ?>
						</h3>
						<div class="services-item__descr descr">
							<?php echo wp_kses_post($item['descr'][$lang]) ?>
						</div>
					</div>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</section>