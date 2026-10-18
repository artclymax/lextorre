<?php
create_fields(
	'Первый экран',
	'specializations',
	[
		add_field_tab(
			'spec_hero_tab',
			'Первый экран'
		),
		add_field_link(
			'spec_btn',
			'Ссылка',
		),
		add_field_text(
			'tasks_title',
			'Заголовок задач'
		),
		add_field_repeater(
			'tasks_list',
			'Список задач',
			[
				add_field_text(
					'tasks_list_text',
					'Текст'
				),
			],
		),
		add_field_tab(
			'spec_tab',
			'Кейсы практики',
		),
		add_field_repeater(
			'spec_cases_list',
			'Кейсы практики',
			[
				add_field_link(
					'spec_cases_list_link',
					'Ссылка',
				),
			]
		),
	],
	'post_type'
);
create_options_page(
	'Наш подход',
	'opt-spec-single'
);

create_fields(
	'Наш подход',
	'opt-spec-single',
	[
		add_field_group(
			'approach_title',
			'Заголовок',
			[
				add_field_text(
					'ru',
					'ru',
				),
				add_field_text(
					'en',
					'en',
				),
			]
		),
		add_field_repeater(
			'approach_list',
			'Список задач',
			[
				add_field_group(
					'approach_list_title',
					'Заголовок',
					[
						add_field_text(
							'ru',
							'ru',
						),
						add_field_text(
							'en',
							'en',
						),
					]
				),
				add_field_group(
					'approach_list_descr',
					'Описание',
					[
						add_field_redactor_wysiwyg(
							'ru',
							'ru',
						),
						add_field_redactor_wysiwyg(
							'en',
							'en',
						),
					]
				),
			],
			null,
			[
				'layout' => 'block',
				'collapsed' => 'field_approach_list_title',
			]
		),
	],
);