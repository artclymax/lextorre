<?php
$page = 'options';
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';

$title = get_field('exp_title', $page)[$lang] ?? '';
$list = get_field('exp_list', $page) ?? '';
?>
<?php if ($list): ?>
	<section class="experience" id="experience">
		<div class="container experience__container">
			<h2 class="experience__title title-1 mobile-decor">
				<?php echo esc_html($title) ?>
			</h2>
			<ul class="experience__list hidden-mobile">
				<?php foreach ($list as $item): ?>
					<li class="experience__item experience-item">
						<div class="experience-item__image">
							<?php echo wp_get_attachment_image(
								$item['exp_list_image']['ID'],
								'large',
								false,
								array(
									'class' => 'img',
									'alt' => $item['exp_list_image']['alt'] ?: $item['exp_list_title'][$lang]
								)
							); ?>
						</div>
						<h3 class="experience-item__title title-3">
							<?php echo esc_html($item['exp_list_title'][$lang]) ?>
						</h3>
						<div class="experience-item__descr descr">
							<?php echo esc_html($item['exp_list_descr'][$lang]) ?>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
			<div class="swiper experience-swiper visible-mobile" data-swiper="{'slidesPerView': 'auto', 'spaceBetween': 60, 'loop': true }">
				<div class="swiper-wrapper experience-swiper__wrapper">
					<?php foreach ($list as $item): ?>
						<div class="swiper-slide experience-slide">
							<div class="experience-slide__wrapper experience-item">
								<div class="experience-item__image">
									<?php echo wp_get_attachment_image(
										$item['exp_list_image']['ID'],
										'large',
										false,
										array(
											'class' => 'img',
											'alt' => $item['exp_list_image']['alt'] ?: $item['exp_list_title'][$lang]
										)
									); ?>
								</div>
								<h3 class="experience-item__title title-3">
									<?php echo esc_html($item['exp_list_title'][$lang]) ?>
								</h3>
								<div class="experience-item__descr descr">
									<?php echo esc_html($item['exp_list_descr'][$lang]) ?>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="experience-swiper__btn-box swiper-btn-box">
					<button class="swiper-btn swiper-btn__prev experience-swiper__btn experience-swiper__btn-prev" type="button"
						aria-label="Назад" data-swiper-btn-prev=".experience-swiper">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M12 2C17.52 2 22 6.48 22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2ZM12 20C16.42 20 20 16.42 20 12C20 7.58 16.42 4 12 4C7.58 4 4 7.58 4 12C4 16.42 7.58 20 12 20ZM12 11H16V13H12V16L8 12L12 8V11Z"
								fill="currentColor" />
						</svg>
					</button>
					<button class="swiper-btn swiper-btn__next experience-swiper__btn experience-swiper__btn-next" type="button"
						aria-label="Вперёд" data-swiper-btn-next=".experience-swiper">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 20C7.58 20 4 16.42 4 12C4 7.58 7.58 4 12 4C16.42 4 20 7.58 20 12C20 16.42 16.42 20 12 20ZM12 11H8V13H12V16L16 12L12 8V11Z"
								fill="currentColor" />
						</svg>
					</button>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>