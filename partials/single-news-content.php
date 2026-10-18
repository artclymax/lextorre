<?php
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';
?>
<section class="single-news-content" id="single-news-content">
	<div class="single-news-content__image image-box">
		<?php the_post_thumbnail() ?>
	</div>
	<div class="single-news-content__descr descr">
		<?php the_content() ?>
	</div>

	<?php if ($lang == 'en'): ?>
		<a class="single-news-content__btn btn btn--stroke" href="<?php echo esc_url(home_url('/en/news')); ?>">
			Other news
		</a>
	<?php else: ?>
		<a class="single-news-content__btn btn btn--stroke" href="<?php echo esc_url(home_url('/news')); ?>">
			К другим новостям
		</a>
	<?php endif; ?>
</section>