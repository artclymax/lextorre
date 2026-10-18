<?php
$page = 'options';
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';

$logo = get_field('footer_logo', $page) ?? '';
$company = get_field('footer_company', $page)[$lang] ?? get_bloginfo('name');
$copy = get_field('footer_copy', $page)[$lang] ?? '';
$links = get_field('footer_links', $page) ?? '';
$nav_title = get_field('footer_nav_title', $page)[$lang] ?? '';
?>
</main>
<footer class="footer">
	<div class="footer__container container">
		<div class="footer__info">
			<div class="footer__logo logo">
				<?php mx_logo('', $logo); ?>
			</div>
			<small class="footer__copy">
				&copy; <?php echo date('Y') . ' ' . esc_html($company) . '<br/>' . esc_html($copy) ?>
			</small>
			<div class="footer__links">
				<?php foreach ($links as $item): ?>

					<a class="footer__link link" href="<?php echo esc_attr($item['footer_links_link'][$lang]['url']) ?>">
						<?php echo esc_html($item['footer_links_link'][$lang]['title']) ?>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
		<nav class="footer__nav footer-menu">
			<h3 class="footer__title title-3">
				<?php echo esc_html($nav_title) ?>
			</h3>
			<?php
			$menu = wp_nav_menu(
				array(
					'theme_location' => 'footer-menu',
					'container' => false,
					'menu_class' => 'footer-menu__list',
					'depth' => 1
				)
			);
			echo htmlspecialchars($menu); ?>
		</nav>
		<?php get_template_part('partials/contacts-box', null, ['has_skype' => true]) ?>
	</div>
</footer>
<?php get_template_part('partials/modal-call') ?>
<?php get_template_part('partials/cookie-banner') ?>

<?php wp_footer(); ?>
</body>

</html>