<? get_header()?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="page-title-head onlinework--head">
		<div class="container-fluid">
			<div class="row">
				<h1><?= the_title(); ?></h1>
			</div>
		</div>		
	</section>
	<section class="company-page__content">

		<div class="container">
			<div class="row">				
				<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">				
					<div class="company-page__content--text">
						<?php the_content(); ?>
					</div>
				</div>				
			</div>
		</div>

	</section>
<?php endwhile; ?>
<?php  endif;?>
	<section class="becomeastar__questionnaire">
		<div class="container">
			<div class="row">
				<h3>Отправить песню на худсовет</h3>
				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">					
					<input type="text" class="registration-input--large" name="demos-name" placeholder="Ваше имя">
					<input type="email" class="registration-input--large" name="demos-email" placeholder="Адрес электронной почты:">
					<a href="#" class="onlinework--already-regist">Вы уже зарегистрированы Abbey Road Online Mastering?</a>
					<input type="text" class="registration-input--large" name="demos-city" placeholder="Город">
					<input type="file" class="registration-input--small" name="demos-username">
					<a class="demos--but">Обзор</a>
					<input type="text" class="registration-input--large" name="demos-songs-link" placeholder="Ссылка на песню">
					<div class="becomeastar__questionnaire--but">
  						<input type="button" name="demos-input--button" class="registration-input--button demoSend" value="Отправить">
  					</div>
				</div>
				
			</div>
		</div>
	</section>
<? get_footer()?>