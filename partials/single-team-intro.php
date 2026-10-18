<?php
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ru';

$position = get_field('team_position') ?? '';
$spec = get_field('team_spec') ?? '';
$study = get_field('team_study') ?? '';
$list = get_field('team_lang') ?? '';
$phones = get_field('team_phones') ?? '';
$emails = get_field('team_emails') ?? '';
?>
<section class="section single-team-intro" id="single-team-intro">
	<div class="container single-team-intro__container">
		<div class="single-team-intro__breadcrumbs breadcrumbs breadcrumbs-dark">
			<?php my_breadcrumbs() ?>
		</div>
		<div class="single-team-intro__image image-box">
			<?php the_post_thumbnail() ?>
		</div>
		<div class="single-team-intro__content">
			<div class="single-team-intro__info">
				<h1 class="single-team-intro__name">
					<?php the_title() ?>
				</h1>
				<p class="single-team-intro__position">
					<?php echo esc_html($position) ?>
				</p>
				<div class="single-team-intro__descr descr">
					<?php the_excerpt() ?>
				</div>
			</div>
			<div class="single-team-intro__details">
				<?php if ($spec): ?>
					<div class="single-team-intro__specs single-team-specs">
						<h3 class="single-team-intro__subtitle">
							<?php if ($lang == 'en'): ?>
								Specialization
							<?php else: ?>
								Специализация
							<?php endif; ?>
						</h3>

						<ul class="single-team-intro__list">
							<?php foreach ($spec as $item): ?>
								<li class="single-team-intro__item">
									<?php echo esc_html($item['team_spec_title']) ?>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>
				<?php if ($study): ?>
					<div class="single-team-intro__study single-team-study">
						<h3 class="single-team-intro__subtitle">
							<?php if ($lang == 'en'): ?>
								Education and training
							<?php else: ?>
								Образование и обучение
							<?php endif; ?>
						</h3>
						<ul class="single-team-intro__list">
							<?php foreach ($study as $item): ?>
								<li class="single-team-intro__item">
									<?php echo esc_html($item['team_study_title']) ?>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>
				<?php if ($list): ?>
					<div class="single-team-intro__lang single-team-lang">
						<h3 class="single-team-intro__subtitle">
							<?php if ($lang == 'en'): ?>
								Languages
							<?php else: ?>
								Языки
							<?php endif; ?>
						</h3>
						<ul class="single-team-intro__list">
							<?php foreach ($list as $item): ?>
								<li class="single-team-intro__item">
									<?php echo esc_html($item['team_lang_title']) ?>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>
			</div>
			<div class="single-team-intro__contacts single-team-contacts">
				<?php if ($phones): ?>
					<div class="single-team-contacts__phones icon icon--phone">
						<ul class="single-team-contacts__list">
							<?php foreach ($phones as $item): ?>
								<li class="single-team-contacts__item">
									<a class="single-team-contacts__link"
										href="tel:+<?php echo esc_attr(correct_phone($item['team_phone'])) ?>">
										<?php echo esc_html($item['team_phone']) ?>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>
				<?php if ($emails): ?>
					<div class="single-team-contacts__emails icon icon--email">
						<ul class="single-team-contacts__list">
							<?php foreach ($emails as $item): ?>
								<li class="single-team-contacts__item">
									<a class="single-team-contacts__link" href="mailto:<?php echo esc_attr($item['team_email']) ?>">
										<?php echo esc_html($item['team_email']) ?>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>