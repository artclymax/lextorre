<?php
create_options_page(
	'Страница новости',
	'opt-single-news',
);

create_fields(
	'Поля - Страница новости',
	'opt-single-news',
	[
		add_field_image(
			'single_news_image',
			'Фон'
		),
	]
);