<?php

create_options_page(
	'Подвал / Футер',
	'opt-footer'
);

create_fields(
	'Подвал / Футер',
	'opt-footer',
	[
		add_field_hint(
			'footer_hint',
			'<b>Меню</b> - перейдите на Настройки сайта > Меню > Меню подвала.<br/><b>Контактные данные</b> - перейдите на Настройки сайта > Секции > Основные секции > Контактные данные',
			'Меню и контактные данные'
		),
		add_field_image(
			'footer_logo',
			'Логотип'
		),
		add_field_group(
			'footer_company',
			'Название компании',
			[
				add_field_text(
					'ru',
					'ru',
				),
				add_field_text(
					'en',
					'en',
				)
			]
		),
		add_field_group(
			'footer_copy',
			'Копирайт',
			[
				add_field_text(
					'ru',
					'ru',
				),
				add_field_text(
					'en',
					'en',
				)
			]
		),
		add_field_repeater(
			'footer_links',
			'Ссылки',
			[
				add_field_group(
					'footer_links_link',
					'Ссылка',
					[
						add_field_link(
							'ru',
							'ru',
						),
						add_field_link(
							'en',
							'en',
						)
					]
				),
			]
		),
		add_field_group(
			'footer_nav_title',
			'Заголовок навигации',
			[
				add_field_text(
					'ru',
					'ru',
				),
				add_field_text(
					'en',
					'en',
				)
			]
		),
	]
);