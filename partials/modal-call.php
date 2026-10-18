<?php
$page = 'options';
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';

$title = get_field('contacts_form_title', 'options')[$lang] ?? '';
$descr = get_field('contacts_descr', 'options')[$lang] ?? '';

$image = get_template_directory_uri() . '/assets/images/modal-bg.webp';
?>
<div class="modal" id="modal-call" data-modal>
	<div class="modal__box modal-call__box" data-modal-box style="background-image: url('<?php echo esc_attr($image) ?>');">
		<button class="modal-call__close-btn modal__close-btn modal-close-btn" data-modal-close aria-label="Закрыть">
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22ZM12 20C14.1217 20 16.1566 19.1571 17.6569 17.6569C19.1571 16.1566 20 14.1217 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4C9.87827 4 7.84344 4.84285 6.34315 6.34315C4.84285 7.84344 4 9.87827 4 12C4 14.1217 4.84285 16.1566 6.34315 17.6569C7.84344 19.1571 9.87827 20 12 20ZM12 10.586L14.828 7.757L16.243 9.172L13.414 12L16.243 14.828L14.828 16.243L12 13.414L9.172 16.243L7.757 14.828L10.586 12L7.757 9.172L9.172 7.757L12 10.586Z"
					fill="currentColor" />
			</svg>
		</button>
		<div class="modal__body">
			<h3 class="modal__title title-1">
				<?php echo esc_html($title) ?>
			</h3>
			<div class="modal__descr-box descr">
				<?php echo wp_kses_post($descr) ?>
			</div>
			<div class="modal__form">
				<?php if ($lang == 'ru'): ?>
					<?php echo do_shortcode('[contact-form-7 id="0656900" title="Связаться с нами"]') ?>
				<?php endif; ?>
				<?php if ($lang == 'en'): ?>
					<?php echo do_shortcode('[contact-form-7 id="645d5dc" title="Contact us"]') ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>