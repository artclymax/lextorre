<?php
$page = 'options';
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';
?>
<section class="single-team-experience" id="single-team-experience">
	<div class="container single-team-experience__container">
		<div class="single-team-experience-content spoiler-active" data-spoiler>
			<button class="single-team-experience-content__btn" data-spoiler-title>
				<h3 class="single-team-experience-content__title title-1 mobile-decor-wide">
						<?php if ($lang == 'en'): ?>
							Experience and projects
						<?php else: ?>
							Опыт и проекты
						<?php endif; ?>
				</h3>
				<span class="single-team-experience-content__icon">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M2 12C2 6.48 6.48 2 12 2C17.52 2 22 6.48 22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12ZM20 12C20 7.58 16.42 4 12 4C7.58 4 4 7.58 4 12C4 16.42 7.58 20 12 20C16.42 20 20 16.42 20 12ZM11 12L11 8L13 8L13 12L16 12L12 16L8 12L11 12Z"
							fill="currentColor" />
					</svg>
				</span>
			</button>
			<div class="single-team-experience-content__content" data-spoiler-content>
				<div class="single-team-experience-content__descr descr">
					<?php the_content() ?>
				</div>
			</div>
		</div>
	</div>
</section>