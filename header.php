<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="wrapper">
		<?php
		$page = 'options';
		$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';
		$btn = get_field('header_btn', $page)[$lang] ?? [];
		$header_phone = get_field('header_phone', $page) ?? '';
		?>
		<header class="header" data-auto-calc="header, height">
			<div class="header__container container">
				<div class="header__logo logo">
					<?php mx_logo(); ?>
				</div>
				<nav class="header__menu header-menu">
					<button class="header-menu__close-btn menu-close-btn visible-tablet" type="button"
						aria-label="Закрыть меню">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22ZM12 20C14.1217 20 16.1566 19.1571 17.6569 17.6569C19.1571 16.1566 20 14.1217 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4C9.87827 4 7.84344 4.84285 6.34315 6.34315C4.84285 7.84344 4 9.87827 4 12C4 14.1217 4.84285 16.1566 6.34315 17.6569C7.84344 19.1571 9.87827 20 12 20ZM12 10.586L14.828 7.757L16.243 9.172L13.414 12L16.243 14.828L14.828 16.243L12 13.414L9.172 16.243L7.757 14.828L10.586 12L7.757 9.172L9.172 7.757L12 10.586Z"
								fill="currentColor" />
						</svg>
					</button>
					<?php
					$menu = wp_nav_menu(
						array(
							'theme_location' => 'header-menu',
							'container' => false,
							'menu_class' => 'header-menu__list',
							'depth' => 1
						)
					);
					echo htmlspecialchars($menu); ?>
					<?php get_template_part('partials/contacts-box', null, ['class' => 'header-menu__contacts-box visible-tablet']); ?>
					<a class="header-menu__btn btn visible-tablet" href="<?php echo esc_attr($btn['url']) ?>">
						<?php echo esc_html($btn['title']) ?>
					</a>
				</nav>
				<?php
				$languages = pll_the_languages(['raw' => 1]);

				if (!empty($languages)) {
					echo '<ul class="lang-switcher">';

					foreach ($languages as $lang) {

						// Изначально ссылка на текущий язык
						$url = $lang['url'];

						// Если мы на записи или странице, попробуем получить перевод
						if (is_singular()) {
							$translated_id = pll_get_post(get_the_ID(), $lang['slug']);
							if ($translated_id) {
								$url = get_permalink($translated_id);
							}
						}
						// Если архив кастомного пост-типа
						elseif (is_post_type_archive()) {
							$post_type = get_post_type();
							$translated_id = pll_get_post(get_option("page_for_{$post_type}_archive"), $lang['slug']);
							if ($translated_id) {
								$url = get_permalink($translated_id);
							}
						}
						// Если таксономия
						elseif (is_tax()) {
							$term = get_queried_object();
							$translated_term_id = pll_get_term($term->term_id, $lang['slug']);
							if ($translated_term_id) {
								$url = get_term_link($translated_term_id);
							}
						}
						// Для страниц
						elseif (is_page()) {
							$translated_id = pll_get_post(get_the_ID(), $lang['slug']);
							if ($translated_id) {
								$url = get_permalink($translated_id);
							}
						}

						// Вывод ссылки
						echo '<li><a href="' . esc_url($url) . '"';
						if ($lang['current_lang']) {
							echo ' class="is-active"';
						}
						echo '>' . esc_html(strtoupper($lang['slug'])) . '</a></li>';
					}

					echo '</ul>';
				}
				?>
				<a class="header__btn btn hidden-tablet" href="<?php echo esc_attr($btn['url']) ?>">
					<?php echo esc_html($btn['title']) ?>
				</a>
				<button class="header__burger-btn burger-btn-icon header-mobile-btn visible-tablet" type="button">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M3 4H21V6H3V4ZM3 11H21V13H3V11ZM3 18H21V20H3V18Z" fill="#D4AF37" />
					</svg>
				</button>
			</div>
		</header>
		<main class="main">
			<?php if (!is_front_page() && !is_404() && !is_page('thank-you')): ?>
			<?php endif; ?>