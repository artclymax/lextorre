<?php
add_action('init', function () {
	register_post_type('specializations', array(
		'labels' => array(
			'name' => 'Специализации',
			'singular_name' => 'Специализация',
			'menu_name' => 'Специализации',
			'name_admin_bar' => 'Специализация',
			'add_new' => 'Добавить специализацию',
			'add_new_item' => 'Добавить новую специализацию',
			'new_item' => 'Новая специализация',
			'edit_item' => 'Редактировать специализацию',
			'view_item' => 'Посмотреть специализацию',
			'all_items' => 'Все специализации',
			'search_items' => 'Поиск специализаций',
			'not_found' => 'Специализации не найдены',
			'not_found_in_trash' => 'Специализации не найдены в корзине',
		),
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => [
			'slug' => 'specializations',
			'with_front' => false,
			'pages' => true, // важно для /page/2/
			'feeds' => true
		],
		'capability_type' => 'post',
		'has_archive' => true, // true
		'hierarchical' => true,
		'menu_position' => 5,
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', ),
		'show_in_rest' => false, //! редактор гутенберг
		'menu_icon' => 'dashicons-analytics',
	));
});

add_action('init', function () {
	register_post_type('team', array(
		'labels' => array(
			'name' => 'Команда',
			'singular_name' => 'Участник команды',
			'menu_name' => 'Команда',
			'name_admin_bar' => 'Участник команды',
			'add_new' => 'Добавить участника',
			'add_new_item' => 'Добавить нового участника',
			'new_item' => 'Новый участник',
			'edit_item' => 'Редактировать участника',
			'view_item' => 'Посмотреть участника',
			'all_items' => 'Вся команда',
			'search_items' => 'Поиск по команде',
			'not_found' => 'Участники не найдены',
			'not_found_in_trash' => 'Участники не найдены в корзине',
		),
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => [
			'slug' => 'team',
			'with_front' => false,
			'pages' => true, // важно для /page/2/
			'feeds' => true
		],
		'capability_type' => 'post',
		'has_archive' => true, // true
		'hierarchical' => true,
		'menu_position' => 5,
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', ),
		'show_in_rest' => false, //! редактор гутенберг
		'menu_icon' => 'dashicons-businessperson',
	));
});

add_action('init', function () {
	register_post_type('news', array(
		'labels' => array(
			'name' => 'Новости',
			'singular_name' => 'Новость',
			'menu_name' => 'Новости',
			'name_admin_bar' => 'Новость',
			'add_new' => 'Добавить новость',
			'add_new_item' => 'Добавить новую новость',
			'new_item' => 'Новая новость',
			'edit_item' => 'Редактировать новость',
			'view_item' => 'Посмотреть новость',
			'all_items' => 'Все новости',
			'search_items' => 'Поиск по новостям',
			'not_found' => 'Новости не найдены',
			'not_found_in_trash' => 'Новости не найдены в корзине',
		),
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => [
			'slug' => 'news',
			'with_front' => false,
			'pages' => true, // важно для /page/2/
			'feeds' => true
		],
		'capability_type' => 'post',
		'has_archive' => true, // true
		'hierarchical' => true,
		'menu_position' => 5,
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', ),
		'show_in_rest' => true, //! редактор гутенберг
		'menu_icon' => 'dashicons-megaphone',
		'taxonomies' => array('category'),
	));
});


add_action('init', function () {
	register_post_type('faq', array(
		'labels' => array(
			'name' => 'Частые вопросы',
			'singular_name' => 'Вопрос',
			'menu_name' => 'Частые вопросы',
			'name_admin_bar' => 'Вопрос',
			'add_new' => 'Добавить вопрос',
			'add_new_item' => 'Добавить новый вопрос',
			'new_item' => 'Новый вопрос',
			'edit_item' => 'Редактировать вопрос',
			'view_item' => 'Посмотреть вопрос',
			'all_items' => 'Все вопросы',
			'search_items' => 'Поиск вопросов',
			'not_found' => 'Вопросы не найдены',
			'not_found_in_trash' => 'Вопросы не найдены в корзине',
		),
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => [
			'slug' => 'faq',
			'with_front' => false,
			'pages' => true, // важно для /page/2/
			'feeds' => true
		],
		'capability_type' => 'post',
		'has_archive' => true, // true
		'hierarchical' => true,
		'menu_position' => 5,
		'supports' => array('title', 'editor', 'custom-fields', ),
		'show_in_rest' => false, //! редактор гутенберг
		'menu_icon' => 'dashicons-editor-help',
	));
});

add_action('init', function () {
	register_post_type('docs', array(
		'labels' => array(
			'name' => 'Лицензии',
			'singular_name' => 'Лицензия',
			'menu_name' => 'Лицензии',
			'name_admin_bar' => 'Лицензия',
			'add_new' => 'Добавить лицензию',
			'add_new_item' => 'Добавить новую лицензию',
			'new_item' => 'Новая лицензия',
			'edit_item' => 'Редактировать лицензию',
			'view_item' => 'Посмотреть лицензию',
			'all_items' => 'Все лицензии',
			'search_items' => 'Поиск лицензий',
			'not_found' => 'Лицензии не найдены',
			'not_found_in_trash' => 'Лицензии не найдены в корзине',
		),
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => [
			'slug' => 'docs',
			'with_front' => false,
			'pages' => true, // важно для /page/2/
			'feeds' => true
		],
		'capability_type' => 'post',
		'has_archive' => true, // true
		'hierarchical' => true,
		'menu_position' => 5,
		'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', ),
		'show_in_rest' => false, //! редактор гутенберг
		'menu_icon' => 'dashicons-media-document',
	));
});

// таксономия
/*
register_taxonomy('news_category', ['news'], [
	'label' => '',
	'labels' => [
		'name' => 'Категории новостей',
		'singular_name' => 'Категория',
		'search_items' => 'Поиск категории',
		'all_items' => 'Все категории',
		'parent_item' => 'Родительская категория',
		'parent_item_colon' => 'Родительская категория:',
		'edit_item' => 'Редактировать категорию',
		'update_item' => 'Обновить категорию',
		'add_new_item' => 'Добавить новую категорию',
		'new_item_name' => 'Название новой категории',
		'menu_name' => 'Категории',
		'back_to_items' => '← Назад к категориям',
	],
	'description' => '', // описание таксономии
	'public' => true,
	'hierarchical' => true, // для подкатегорий

	'rewrite' => array('slug' => 'news_category'),

	'capabilities' => array(),
	'meta_box_cb' => null,
	'show_admin_column' => false,
	'show_in_rest' => true,
	'rest_base' => null,
	'default_term' => [
		'name' => 'Все',
		'slug' => 'all',
		'description' => 'Все проекты',
	],
]);
////! all - для всех проектов
add_action('save_post_news', 'force_all_category_news', 10, 3);
function force_all_category_news($post_id, $post, $update)
{
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return;
	if ($post->post_type !== 'news')
		return;

	$all_term = get_term_by('slug', 'all', 'category');
	if (!$all_term)
		return;

	$terms = wp_get_post_terms($post_id, 'category', ['fields' => 'ids']);

	if (!in_array($all_term->term_id, $terms)) {
		$terms[] = $all_term->term_id;
		wp_set_post_terms($post_id, $terms, 'category');
	}
}
*/