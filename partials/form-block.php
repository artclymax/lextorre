<?php
$page = 'options';
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';
$form_descr = get_field('contacts_descr', $page)[$lang] ?? '';
$form_title = get_field('contacts_form_title', $page)[$lang] ?? '';
$class = $args['class'] ?? '';

$args = [
	'post_type' => 'specializations',
	'posts_per_page' => -1,
	'orderby' => 'menu_order',
	'order' => 'ASC'
];

$query = new WP_Query($args);
?>

<div class="form <?php echo esc_attr($class) ?>">
	<div class="cf-data visibility-hidden" data-cf-data="<?php echo esc_html(get_titles_from_query_to_json($query)) ?>"
		style="display: none">
	</div>
	<h2 class="form__title title-1">
		<?php echo esc_html($form_title) ?>
	</h2>
	<div class="form__descr descr">
		<?php echo wp_kses_post($form_descr) ?>
	</div>
	<div class="form__form-box">
		<?php if ($lang == 'ru'): ?>
			<?php echo do_shortcode('[contact-form-7 id="0656900" title="Связаться с нами"]') ?>

		<?php endif; ?>
		<?php if ($lang == 'en'): ?>
			<?php echo do_shortcode('[contact-form-7 id="645d5dc" title="Contact us"]') ?>
		<?php endif; ?>
	</div>
</div>