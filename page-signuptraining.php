<?php get_header()?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="page-title-head singuptraining__head">
		<div class="container-fluid">
			<div class="row">
				<div class="training__triangle"></div>
				<header class="singuptraining__head--text">						
					<h2><?= the_title(); ?></h2>
					<p><?= the_content(); ?></p>
					<!--<p>В нашей школе есть возможность записываться на обучение в онлайн-режиме.
					А также оплачивать один или несколько курсов в кредит без процентов!</p>
					<p>Представьтесь</p>-->
				</header>
			</div>
		</div>		
	</section>
<?php endwhile; ?>
<?php  endif; wp_reset_query();?>
	<section class="singuptraining__form">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">					
					<input type="text" class="registration-input--large" name="singuptraining-name" placeholder="Имя и Фамилия">
					<input type="text" class="registration-input--large" name="singuptraining-email" placeholder="Адрес электронной почты:">
					
					<input type="tel" class="registration-input--large" name="singuptraining-phone" placeholder="Мобильный телефон">
					<div class="col-lg-3 col-md-3 col-sm-12">
						<p>Выберите курс </p>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-12 p0 chosenCourses">
						<?= do_shortcode('[selectCourse id="'.$_GET['id'].'"]'); ?>
						<!--<div class="singuptraining__form--choice">
							<div class="singuptraining__form--choice--name">
								<p><b>Курс "Создание электронной музыки"</b></p>
							</div>
							<div class="singuptraining__form--choice--price">
								<p><b>70 000р.</b></p>
							</div>
							<div class="singuptraining__form--choice--del">
								<a href="#"><i class="singupinput--cross"></i></a>
							</div>
						</div>
						<div class="singuptraining__form--choice">
							<div class="singuptraining__form--choice--name">
								<p><b>Курс "Создание электронной музыки"</b></p>
							</div>
							<div class="singuptraining__form--choice--price">
								<p><b>70 000р.</b></p>
							</div>
							<div class="singuptraining__form--choice--del">
								<a href="#"><i class="singupinput--cross"></i></a>
							</div>
						</div>-->
					</div>
				    <?= do_shortcode('[courselist]'); ?>
					<!--<select class="registration-input--large singuptraining__form--select" name="singuptraining-course">
						<option disabled selected>Выберите курс</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>-->
					<div class="col-lg-12">
						<h1>ИТОГО: <span class="totalCourses"></span> р.</h1>
					</div>
					<div class="becomeastar__questionnaire--but">
  						<a class="single-training--button sendCourse">Записаться</a>
  					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="partners">
		<div class="container">
			<div class="row">				
				<h4>НАШИ ПАРТНЕРЫ</h4>
				<?= do_shortcode('[partners]'); ?>
			</div>
		</div>
	</section>


<? get_footer()?>