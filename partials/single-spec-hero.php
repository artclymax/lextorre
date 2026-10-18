<?php
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';

$btn = get_field('spec_btn') ?? '';
$tasks_title = get_field('tasks_title') ?? '';
$list = get_field('tasks_list') ?? '';
?>
<section class="single-spec-hero" id="single-spec-hero">
	<div class="container single-spec-hero__container">
		<div class="single-spec-hero__breadcrumbs breadcrumbs breadcrumbs-dark">
			<?php my_breadcrumbs() ?>
		</div>
	</div>
	<div class="single-spec-hero__uncontainer uncontainer">
		<div class="uncontainer__content single-spec-hero__content">
			<div class="single-spec-hero__header">
				<h1 class="single-spec-hero__title title-hero">
					<?php the_title() ?>
				</h1>
				<div class="single-spec-hero__descr descr">
					<?php the_content() ?>
				</div>
				<?php if ($btn): ?>
					<a class="single-spec-hero__btn btn" href="<?php echo esc_attr($btn['url']) ?>">
						<?php echo esc_html($btn['title']) ?>
					</a>
				<?php endif; ?>
			</div>
			<div class="single-spec-hero__image single-spec-hero__image-mobile image-box visible-mobile">
				<?php the_post_thumbnail() ?>
			</div>
			<?php if ($list): ?>
				<div class="single-spec-hero__tasks">
					<h3 class="single-spec-hero__tasks-title title-2">
						<?php echo esc_html($tasks_title) ?>
					</h3>
					<ul class="single-spec-hero__tasks-list grid">
						<?php foreach ($list as $item): ?>
							<li class="single-spec-hero__tasks-item tasks-item">
								<?php echo esc_html($item['tasks_list_text']) ?>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			<?php endif; ?>
		</div>
		<div class="uncontainer__full single-spec-hero__image image-box hidden-mobile">
			<?php the_post_thumbnail() ?>
		</div>
	</div>
</section>