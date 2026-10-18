<?php

create_fields(
	'Должность',
	'team',
	[
		add_field_text(
			'team_position',
			'Должность'
		),
	],
	'post_type'
);

create_fields(
	'Дополнительная информация',
	'team',
	[
		add_field_tab(
			'team_tab_info_spec',
			'Специализация'
		),
		add_field_repeater(
			'team_spec',
			'Специализация',
			[
				add_field_text(
					'team_spec_title',
					'Специализация'
				),
			]
		),
		add_field_tab(
			'team_tab_info_study',
			'Образование и обучение'
		),
		add_field_repeater(
			'team_study',
			'Образование и обучение',
			[
				add_field_text(
					'team_study_title',
					'Языки'
				),
			]
		),
		add_field_tab(
			'team_tab_info_lang',
			'Языки'
		),
		add_field_repeater(
			'team_lang',
			'Языки',
			[
				add_field_text(
					'team_lang_title',
					'Образование и обучение'
				),
			]
		),
		add_field_tab(
			'team_tab_info_contacts',
			'Контактные данные'
		),
		add_field_repeater(
			'team_phones',
			'Телефоны',
			[
				add_field_text(
					'team_phone',
					'Телефон'
				),
			]
		),
		add_field_repeater(
			'team_emails',
			'Emails',
			[
				add_field_text(
					'team_email',
					'Email'
				)
			]
		),

	],
	'post_type',
	[
		'key' => 'group_team_info'
	]
);

create_fields(
	'Публикации',
	'team',
	[
		add_field_repeater(
			'team_docs',
			'Публикации',
			[
				add_field_text(
					'team_docs_title',
					'Заголовок'
				),
				add_field_text(
					'team_docs_category',
					'Категория'
				),
				add_field_text(
					'team_docs_date',
					'Дата'
				),
				add_field_textarea(
					'team_docs_descr',
					'Краткое описание'
				),
				add_field_link(
					'team_docs_link',
					'Ссылка'
				),
			],
			null,
			[
				'layout' => 'block',
				'collapsed' => 'team_docs_title',
			]
		),
	],
	'post_type',
	[
		'key' => 'group_team_docs'
	]
);
