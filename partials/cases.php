<?php
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';

$list = get_field('spec_cases_list') ?? '';
?>
<?php if ($list): ?>
	<section class="cases" id="cases">
		<div class="container cases__container">
			<h2 class="cases__title title-1">
				<?php if ($lang == 'en'): ?>
					Case studies
				<?php else: ?>
					Кейсы практики
				<?php endif; ?>
			</h2>
			<ul class="cases__list">
				<?php foreach ($list as $item): ?>
					<li class="cases__item cases-item">
						<a class="cases-item__link icon icon--after"
							href="<?php echo esc_attr($item['spec_cases_list_link']['url']) ?>">
							<h3 class="cases-item__title title-3">
								<?php echo esc_html($item['spec_cases_list_link']['title']) ?>
							</h3>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>