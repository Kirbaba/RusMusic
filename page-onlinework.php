<? get_header()?>
	<section class="page-title-head onlinework--head">
		<div class="container-fluid">
			<div class="row">
				<h1>Он-лайн работа</h1>
			</div>
		</div>		
	</section>

	<section class="company-page__content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="container">
			<div class="row">				
				<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">				
					<div class="company-page__content--text">
						<?php the_content(); ?>
					</div>
				</div>				
			</div>
		</div>
		<?php endwhile; ?>
		<?php  endif;?>	
		<div class="container-fluid">		
			<div class="row">			
				<article class="company-page--bottom--text">
					
						<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">								
							<h3>Как воспользоваться услугой Интернет Mastering</h3>
							<small>Пожалуйста, зарегистрируйтесь на сайте, чтобы создать учетную запись Интернет Mastering. 
								Этот процесс легко:</small>
							<ol>
								<li>1. Загрузить Песни Загрузить песни освоить. Мы принимаем несжатого WAV или AIFF файлы, 16bit & 24bit 44.1kHz или 96kHz &, и длиной до 10 минут </li>
								<li>2. Установите Работа Выберите услуги и форматы вы хотели. Положите песни, которые вы хотите на каждого формата, а затем организовать треков в
правильной последовательности. </li>
								<li>3. Оформить заказ Оплатите работы с вашей кредитной карты, используя нашу безопасную систему (от SecPay). Ваши песни освоили будет готов для загрузки в течение 5 рабочих дней. </li>
							</ol>
						</div>
			
				</article>
			</div>
		</div>
	</section>

	<section class="registration-page onlinework--registr">
		<div class="container">
			<div class="row">
				<h3>Начнем работу</h3>
				<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">
					<input type="text" name="onlinework-name" class="registration-input--large" placeholder="Ваше имя:">
				
					<input type="email" name="onlinework-email" class="registration-input--large" placeholder="Адрес электронной почты:">
					<a href="#" class="onlinework--already-regist">Вы уже зарегистрированы Abbey Road Online Mastering?</a>
					<input type="text" class="registration-input--large" placeholder="Да, мой пароль:">
						
					<div class="registration-input--radio">						
						<input type="radio" id="radio01" name="onlinework-radio" />
	  					<label for="radio01">Да, но я забыл свой пароль<span></span></label>
	  					<input type="radio" id="radio02" name="onlinework-radio" />
	  					<label for="radio02">Нет, я новый пользователь<span></span></label>
  					</div>
  					<input type="button"  name="onlinework-button" class="registration-input--button" value="Продолжить">
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