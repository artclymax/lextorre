<?php
$page = 'options';
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';
$title = get_field('contacts_title', $page)[$lang] ?? '';
$company = get_field('contacts_company', $page)[$lang] ?? '';
$descr = get_field('contacts_decr', $page)[$lang] ?? '';
$info = get_field('contacts_desc_last', $page)[$lang] ?? '';
?>
<div class="contacts-block">
	<h2 class="contacts-block__title title-1">
		<?php echo esc_html($title) ?>
	</h2>
	<p class="contacts-block__company">
		<?php echo esc_html($company) ?>
	</p>
	<?php get_template_part('partials/contacts-box'); ?>
	<div class="contacts-block__descr descr">
		<?php echo wp_kses_post($descr)?>
	</div>
	<div class="contacts-block__info descr">
		<?php echo wp_kses_post($info)?>
	</div>
</div>