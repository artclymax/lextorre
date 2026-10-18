<?php
$page = 'options';
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';

$title = get_field('how_we_work_title', $page)[$lang] ?? '';
$list = get_field('how_we_work_list', $page) ?? '';
?>
<?php if ($list): ?>
	<section class="how-we-work" id="how-we-work">
		<div class="container how-we-work__container">
			<h2 class="how-we-work__title title-1 mobile-decor-wide">
				<?php echo esc_html($title) ?>
			</h2>
			<div class="swiper how-we-work-swiper" data-swiper="{'slidesPerView': 'auto', 'spaceBetween': 20}">
				<div class="swiper-wrapper how-we-work-swiper__wrapper">
					<?php foreach ($list as $index => $item): ?>
						<div class="swiper-slide how-we-work-slide">
							<div class="how-we-work-slide__wrapper">
								<div class="how-we-work-slide__number">
									<?php echo esc_html((++$index < 10 ? '0' : '') . $index) ?>
								</div>
								<h3 class="how-we-work-slide__title title-3">
									<?php echo esc_html($item['how_we_work_list_title'][$lang]) ?>
								</h3>
								<div class="how-we-work-slide__text descr">
									<?php echo wp_kses_post($item['how_we_work_list_descr'][$lang]) ?>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="swiper-btn-box visible-mobile">
					<button class="swiper-btn swiper-btn__prev how-we-work-swiper__btn how-we-work-swiper__btn-prev"
						type="button" aria-label="Назад" data-swiper-btn-prev=".how-we-work-swiper">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M12 2C17.52 2 22 6.48 22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2ZM12 20C16.42 20 20 16.42 20 12C20 7.58 16.42 4 12 4C7.58 4 4 7.58 4 12C4 16.42 7.58 20 12 20ZM12 11H16V13H12V16L8 12L12 8V11Z"
								fill="currentColor" />
						</svg>
					</button>
					<button class="swiper-btn swiper-btn__next how-we-work-swiper__btn how-we-work-swiper__btn-next"
						type="button" aria-label="Вперёд" data-swiper-btn-next=".how-we-work-swiper">
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