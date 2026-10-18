<?php
create_options_page(
	'О нас',
	'opt-about',
);

// hero
create_options_page(
	'Первый экран',
	'opt-hero-about',
	'opt-about',
);

create_fields(
	'Первый экран',
	'opt-hero-about',
	[
		add_field_group(
			'hero_about_title',
			'Заголовок',
			[
				add_field_redactor_wysiwyg(
					'ru',
					'ru'
				),
				add_field_redactor_wysiwyg(
					'en',
					'en'
				),
			],
			'strong - чтобы сделать акцентного цвета'
		),
		add_field_group(
			'hero_about_descr',
			'Описание',
			[
				add_field_redactor_wysiwyg(
					'ru',
					'ru'
				),
				add_field_redactor_wysiwyg(
					'en',
					'en'
				),
			],
		),
		add_field_repeater(
			'hero_about_list',
			'Список',
			[
				add_field_group(
					'hero_about_list_title',
					'Заголовок',
					[
						add_field_text(
							'ru',
							'ru'
						),
						add_field_text(
							'en',
							'en'
						),
					],
				),
				add_field_group(
					'hero_about_list_descr',
					'Описание',
					[
						add_field_redactor_wysiwyg(
							'ru',
							'ru'
						),
						add_field_redactor_wysiwyg(
							'en',
							'en'
						),
					],
				),
			],
			null,
			[
				'layout' => 'block',
				'collapsed' => 'field_hero_about_list_title',
			]
		),
		add_field_image(
			'hero_about_image',
			'Картинка'
		),
	]
);

//!===============
// about
create_options_page(
	'О нас',
	'opt-about-section',
	'opt-about',
);

create_fields(
	'О нас',
	'opt-about-section',
	[
		add_field_group(
			'about_descr',
			'Описание',
			[
				add_field_redactor_wysiwyg(
					'ru',
					'ru'
				),
				add_field_redactor_wysiwyg(
					'en',
					'en'
				),
			],
			'strong - чтобы сделать большим регистром'
		),
		add_field_group(
			'about_title',
			'Заголовок',
			[
				add_field_text(
					'ru',
					'ru'
				),
				add_field_text(
					'en',
					'en'
				),
			]
		),
		add_field_repeater(
			'about_list',
			'Список',
			[
				add_field_group(
					'title',
					'Заголовок',
					[
						add_field_text(
							'ru',
							'ru'
						),
						add_field_text(
							'en',
							'en'
						),
					]
				),
				add_field_group(
					'descr',
					'Описание',
					[
						add_field_redactor_wysiwyg(
							'ru',
							'ru'
						),
						add_field_redactor_wysiwyg(
							'en',
							'en'
						),
					],
				)
			],
			null,
			[
				'collapse' => 'title',
				'layout' => 'block',
			]
		),
		add_field_image(
			'about_image',
			'Картинка',
		)
	]
);

//!===============
// how_we_work
create_options_page(
	'Как мы работаем',
	'opt-how_we_work',
	'opt-about',
);

create_fields(
	'Как мы работаем',
	'opt-how_we_work',
	[
		add_field_group(
			'how_we_work_title',
			'Заголовок',
			[
				add_field_text(
					'ru',
					'ru'
				),
				add_field_text(
					'en',
					'en'
				),
			]
		),
		add_field_repeater(
			'how_we_work_list',
			'Список',
			[
				add_field_group(
					'how_we_work_list_title',
					'Заголовок',
					[
						add_field_text(
							'ru',
							'ru'
						),
						add_field_text(
							'en',
							'en'
						),
					],
				),
				add_field_group(
					'how_we_work_list_descr',
					'Описание',
					[
						add_field_redactor_wysiwyg(
							'ru',
							'ru'
						),
						add_field_redactor_wysiwyg(
							'en',
							'en'
						),
					],
				),
			],
			null,
			[
				'collapse' => 'field_how_we_work_list_title',
				'layout' => 'block',
			]
		),
	]
);
//!===============
// values
create_options_page(
	'Наши ценности',
	'opt-values',
	'opt-about',
);

create_fields(
	'Наши ценности',
	'opt-values',
	[
		add_field_group(
			'values_title',
			'Заголовок',
			[
				add_field_text(
					'ru',
					'ru'
				),
				add_field_text(
					'en',
					'en'
				),
			]
		),
		add_field_repeater(
			'values_list',
			'Список',
			[
				add_field_image(
					'values_list_image',
					'Картинка',
				),
				add_field_group(
					'values_list_title',
					'Заголовок',
					[
						add_field_text(
							'ru',
							'ru'
						),
						add_field_text(
							'en',
							'en'
						),
					],
				),
				add_field_group(
					'values_list_descr',
					'Описание',
					[
						add_field_redactor_wysiwyg(
							'ru',
							'ru'
						),
						add_field_redactor_wysiwyg(
							'en',
							'en'
						),
					],
				),
			],
			null,
			[
				'collapse' => 'field_values_list_title',
				'layout' => 'block',
			]
		),
		add_field_image(
			'values_image',
			'Картинка',
		),
	]
);

//!===============
// geo
create_options_page(
	'География и языки',
	'opt-geo',
	'opt-about',
);

create_fields(
	'География и языки',
	'opt-geo',
	[
		add_field_group(
			'geo_title',
			'Заголовок',
			[
				add_field_text(
					'ru',
					'ru'
				),
				add_field_text(
					'en',
					'en'
				),
			]
		),
		add_field_group(
			'geo_descr',
			'Описание',
			[
				add_field_redactor_wysiwyg(
					'ru',
					'ru'
				),
				add_field_redactor_wysiwyg(
					'en',
					'en'
				),
			],
		),
		add_field_repeater(
			'geo_list',
			'Список языков',
			[
				add_field_text(
					'geo_list_title',
					'Язык',
				),
			],
			null,
			[
				'collapse' => 'field_geo_list_title',
				'layout' => 'block',
			]
		),
	]
);
