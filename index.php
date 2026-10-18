<?php get_header(); ?>

<?php get_template_part('partials/hero-page', null, ['bg' => get_template_directory_uri() . '/assets/images/decor/about/main.png']); ?>
<?php if (have_posts()): ?>
	<?php while (have_posts()):
		the_post(); ?>
		<div class="container descr index-section">
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
<?php else: ?>
	<div class="container descr index-section">
		<p>Записей не найдено.</p>
	</div>
<?php endif; ?>


<?php get_footer(); ?>