<?php
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';
$descr = get_field('memoriam_hero_descr', 'options')[$lang] ?? '';
$gallery = get_field('memoriam_gallery', 'options') ?? '';
$list = get_field('memoriam_history', 'options') ?? '';
?>
<div class="page-in-memoriam" id="page-in-memoriam">
	<div class="container page-in-memoriam__container">
		<div class="page-in-memoriam__content">
			<div class="page-in-memoriam__descr descr">
				<?php echo wp_kses_post($descr) ?>
			</div>
			<?php if ($gallery): ?>
				<div class="swiper page-in-memoriam-swiper" data-swiper="{'slidesPerView' : 'auto', 'spaceBetween': 48 }">
					<div class="swiper-wrapper page-in-memoriam-swiper__wrapper">
						<?php foreach ($gallery as $item): ?>
							<div class="swiper-slide page-in-memoriam-slide">
								<a class="page-in-memoriam-slide__wrapper image-box"
									href="<?php echo esc_attr($item['memoriam_gallery_photo']['url']); ?>" data-fancybox>
									<?php echo wp_get_attachment_image(
										$item['memoriam_gallery_photo']['ID'],
										'large',
										false,
										array(
											'class' => 'img',
											'alt' => $item['memoriam_gallery_photo']['alt'] ?: ''
										)
									); ?>
								</a>
							</div>
						<?php endforeach; ?>
					</div>
					<div class="swiper-btn-box visible-mobile">
						<button
							class="swiper-btn swiper-btn__prev page-in-memoriam-swiper__btn page-in-memoriam-swiper__btn-prev"
							type="button" aria-label="Назад" data-swiper-btn-prev=".page-in-memoriam-swiper">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M12 2C17.52 2 22 6.48 22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2ZM12 20C16.42 20 20 16.42 20 12C20 7.58 16.42 4 12 4C7.58 4 4 7.58 4 12C4 16.42 7.58 20 12 20ZM12 11H16V13H12V16L8 12L12 8V11Z"
									fill="currentColor" />
							</svg>
						</button>
						<button
							class="swiper-btn swiper-btn__next page-in-memoriam-swiper__btn page-in-memoriam-swiper__btn-next"
							type="button" aria-label="Вперёд" data-swiper-btn-next=".page-in-memoriam-swiper">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 20C7.58 20 4 16.42 4 12C4 7.58 7.58 4 12 4C16.42 4 20 7.58 20 12C20 16.42 16.42 20 12 20ZM12 11H8V13H12V16L16 12L12 8V11Z"
									fill="currentColor" />
							</svg>
						</button>
					</div>
				</div>
			<?php endif; ?>
		</div>
		<?php if ($list): ?>
			<ul class="page-in-memoriam__list">
				<?php foreach ($list as $item): ?>
					<li class="page-in-memoriam__item in-memoriam-history" data-aos="fade-right">
						<p class="in-memoriam-history__date">
							<?php echo esc_html($item['memoriam_history_year'][$lang]) ?>
						</p>
						<h3 class="in-memoriam-history__title title-3">
							<?php echo esc_html($item['memoriam_history_title'][$lang]) ?>
						</h3>
						<div class="in-memoriam-history__descr descr">
							<?php echo wp_kses_post($item['memoriam_history_descr'][$lang]) ?>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>
</div>