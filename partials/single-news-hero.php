<?php
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';
$image = get_field('single_news_image', 'options')['url'] ?? get_template_directory_uri() . 'assets/images/hero/news-single-bg.webp';
?>
<section class="single-news-hero" id="single-news-hero" style="background-image: url('<?php echo esc_attr($image) ?>');">
	<div class="container single-news-hero__container">
		<div class="single-news-hero__breadcrumbs breadcrumbs breadcrumbs-dark">
			<?php my_breadcrumbs() ?>
		</div>
		<h1 class="single-news-hero__title title-1">
			<?php the_title() ?>
		</h1>
		<div class="single-news-hero__meta">
			<time class="single-news-hero__date" datetime="<?php echo esc_attr(get_the_date('Y-d-j')) ?>">
				<?php echo esc_attr(get_the_date()) ?>
			</time>
			<div class="single-news-hero__category">
				<?php the_category() ?>
			</div>
		</div>
	</div>
</section>