<?php
$page = 'options';

$map = get_field('contacts_map', $page) ?? '';

?>
<section class="contacts-page" id="contacts-page">
	<div class="contacts-page__content section">
		<div class="container contacts-page__container">
			<?php get_template_part('partials/contacts-block'); ?>
			<?php get_template_part('partials/form-block', null, ['class' => 'contacts-page__form']); ?>
		</div>
	</div>
	<div class="contacts-page__map">
		<?php echo wp_kses($map, [
			'iframe' => [
				'src' => true,
				'width' => true,
				'height' => true,
				'style' => true,
				'allowfullscreen' => true,
				'loading' => true,
			],
		]) ?>
	</div>
</section>