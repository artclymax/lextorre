<?php

$title = '';
$descr = '';
$image = '';
$mode = '';
$page_id = null;

/*
|--------------------------------------------------------------------------
| Helper: Hero image with fallback
|--------------------------------------------------------------------------
*/

function get_hero_image($post_id = null)
{

	$hero = get_field('hero_image', $post_id);

	if (is_array($hero) && isset($hero['url'])) {
		return $hero['url'];
	}

	if (is_numeric($hero)) {
		return wp_get_attachment_image_url($hero, 'full');
	}

	if (is_string($hero) && $hero) {
		return $hero;
	}

	return get_the_post_thumbnail_url($post_id, 'full');
}

/*
|--------------------------------------------------------------------------
| Singular pages
|--------------------------------------------------------------------------
*/

if (is_singular()) {

	$post_id = get_the_ID();

	$mode = get_field('hero_mode', $post_id) ?: 'default';

	$title = get_field('hero_title', $post_id) ?: get_the_title($post_id);

	$descr = get_field('hero_descr', $post_id) ?: apply_filters(
		'the_content',
		get_post_field('post_content', $post_id)
	);

	$image = get_hero_image($post_id);
}

/*
|--------------------------------------------------------------------------
| Taxonomy archive
|--------------------------------------------------------------------------
*/ elseif (is_tax() || is_category() || is_tag()) {

	$current_term = get_queried_object();

	$title = single_term_title('', false);

	$descr = term_description($current_term->term_id, $current_term->taxonomy);

	if ($descr) {
		$descr = apply_filters('the_content', $descr);
	}

	$mode = 'default';

	// берём страницу news
	$page = get_page_by_path('news');

	if ($page && function_exists('pll_get_post')) {
		$page_id = pll_get_post($page->ID);
	} elseif ($page) {
		$page_id = $page->ID;
	}

	if (!empty($page_id)) {
		$image = get_hero_image($page_id);
	}
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

		$mode = get_field('hero_mode', $page_id) ?: 'default';

		$title = get_field('hero_title', $page_id) ?: get_the_title($page_id);

		$descr = get_field('hero_descr', $page_id) ?: apply_filters(
			'the_content',
			get_post_field('post_content', $page_id)
		);

		$image = get_hero_image($page_id);

	} else {

		$title = $post_type_obj->labels->name ?? '';

		$descr = $post_type_obj->description ?? '';

		$mode = 'default';
	}
}
$tax_in_breadcrumbs = $args['tax'] ?? false;
?>
<section class="hero-page-second <?php echo esc_attr($mode == 'Тёмный' ? 'hero-page-second-dark' : '') ?>"
	id="hero-page-second" style="background-image: url('<?php echo esc_attr($image); ?>')">
	<div class="container hero-page-second__container">
		<div class="hero-page-second__breadcrumbs breadcrumbs breadcrumbs-dark">
			<?php my_breadcrumbs($tax_in_breadcrumbs) ?>
		</div>
		<h1 class="hero-page-second__title title-hero">
			<?php echo esc_html($title); ?>
		</h1>
		<div class="hero-page-second__descr descr">
			<?php echo wp_kses_post($descr) ?>
		</div>
	</div>
</section>