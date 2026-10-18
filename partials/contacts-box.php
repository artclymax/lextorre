<?php
$page = 'options';
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';

$address = get_field('contacts_address', $page)[$lang] ?? '';
$phones = get_field('contacts_phones', $page) ?? '';
$email = get_field('contacts_emails', $page) ?? '';
$social = get_field('contacts_social', $page) ?? '';
$skype = get_field('contacts_skype', $page) ?? '';

$class = $args['class'] ?? '';
$has_skype = $args['has_skype'] ?? '';
?>
<ul class="contacts-box <?php echo esc_attr($class) ?>">
	<?php if ($address): ?>
		<li class="contacts-box__item icon icon--address">
			<address class="contacts-box__address">
				<?php echo wp_kses_post($address) ?>
			</address>
		</li>
	<?php endif; ?>
	<?php if ($phones): ?>
		<li class="contacts-box__item icon icon--phone">
			<ul class="contacts-box__list-column contacts-box__list-column--<?php echo esc_attr(count($phones)); ?>">
				<?php foreach ($phones as $item): ?>
					<li>
						<a class="contacts-box__link link" href="tel:+<?php echo esc_attr(correct_phone($item['phone'])) ?>">
							<?php echo esc_html($item['phone']) ?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</li>
	<?php endif; ?>
	<?php if ($email): ?>
		<li class="contacts-box__item icon icon--email">
			<ul class="contacts-box__list-column contacts-box__list-column--<?php echo esc_attr(count($email)); ?>">
				<?php foreach ($email as $item): ?>
					<li>
						<a class="contacts-box__link link" href="mailto:<?php echo esc_attr($item['email']) ?>">
							<?php echo esc_html($item['email']) ?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</li>
	<?php endif; ?>
	<?php if ($has_skype): ?>
		<?php if ($skype): ?>
			<li class="contacts-box__item icon icon--skype">
				<a class="contacts-box__link contacts-box__link--1 link" href="skype:<?php echo esc_attr($skype)?>">
					<?php echo esc_html($skype)?>
				</a>
			</li>
		<?php endif; ?>
	<?php else: ?>
		<?php if ($social): ?>
			<li class="contacts-box__item">
				<ul class="contacts-box__list-flex">
					<?php foreach ($social as $item): ?>
						<li>
							<a class="contacts-box__link link-icon" href="<?php echo esc_attr($item['link']['url']) ?>" target="_blank"
								aria-label="<?php echo esc_attr($item['link']['title']) ?>">
								<?php echo wp_get_attachment_image(
									$item['image']['ID'],
									'large',
									false,
									array(
										'class' => 'img',
										'alt' => $item['image']['alt'] ?: $item['link']['title']
									)
								); ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</li>
		<?php endif; ?>
	<?php endif; ?>

</ul>