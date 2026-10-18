<?php

$title = '';
$descr = '';
$page_id = null;

/*
|--------------------------------------------------------------------------
| Singular pages
|--------------------------------------------------------------------------
*/

if (is_singular()) {

	$title = get_field('hero_title') ?: get_the_title();

	$descr = get_field('hero_descr') ?: apply_filters(
		'the_content',
		get_post_field('post_content', get_the_ID())
	);
}

/*
|--------------------------------------------------------------------------
| Taxonomy archive
|--------------------------------------------------------------------------
*/ elseif (is_tax('projects_category')) {

	$current_term = get_queried_object();

	$post_type = get_post_type_object('projects');

	$post_type_label = $post_type->labels->name ?? '';
	$term_name = $current_term->name ?? '';

	$title = $post_type_label . ' — ' . $term_name;

	$descr = term_description($current_term->term_id, 'projects_category');
}

/*
|--------------------------------------------------------------------------
| Post type archive
|--------------------------------------------------------------------------
*/ elseif (is_post_type_archive()) {

	$post_type = get_query_var('post_type');

	if (is_array($post_type)) {
		$post_type = reset($post_type);
	}

	$post_type_obj = get_post_type_object($post_type);

	$slug = $post_type_obj->rewrite['slug'] ?? $post_type;

	$page = get_page_by_path($slug);

	if ($page && function_exists('pll_get_post')) {
		$page_id = pll_get_post($page->ID);
	} elseif ($page) {
		$page_id = $page->ID;
	}

	if ($page_id) {

		$title = get_field('hero_title', $page_id) ?: get_the_title($page_id);

		$descr = get_field('hero_descr', $page_id) ?: apply_filters(
			'the_content',
			get_post_field('post_content', $page_id)
		);
	}
}

$bg = $args['bg'] ?? '';

?>
<section class="hero-page section" id="hero-page">
	<div class="container hero-page__container">
		<div class="hero-page__breadcrumbs breadcrumbs breadcrumbs-dark">
			<?php my_breadcrumbs() ?>
		</div>
		<h1 class="hero-page__title title-hero mobile-decor-wide">
			<?php echo esc_html($title); ?>
		</h1>
	</div>
</section>