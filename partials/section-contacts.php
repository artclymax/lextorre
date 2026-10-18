<?php
$page = 'options';
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';

$image = get_field('contacts_image', $page) ?? '';
?>
<section class="section-contacts" id="section-contacts"
	style="background-image: url('<?php echo esc_attr($image['url']) ?>')">
	<div class="container section-contacts__container">
		<?php get_template_part('partials/form-block', null, ['class' => 'section-contacts-form']); ?>
		<?php get_template_part('partials/contacts-block'); ?>
	</div>
</section>