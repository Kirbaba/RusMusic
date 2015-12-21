<? get_header()?>
	<section class="page-title-head onlinework--head">
		<div class="container-fluid">
			<div class="row">
				<h1>Демо записи</h1>
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
						<a href="#" class="online-store--but"><img src="<?php bloginfo('template_directory'); ?>/img/itunes.png" alt=""></a>
						<a href="#" class="online-store--but"><img src="<?php bloginfo('template_directory'); ?>/img/Android-app-on-Google-play-logo-vector-2.png" alt=""></a>
					</div>
				</div>				
			</div>
		</div>
		<?php endwhile; ?>
		<?php  endif;?>	
	</section>

	<section class="becomeastar__questionnaire">
		<div class="container">
			<div class="row">
				<h3>Отправить песню на худсовет</h3>
				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">					
					<input type="text" class="registration-input--large" name="demos-name" placeholder="Ваше имя">
					<input type="email" class="registration-input--large" name="demos-email" placeholder="Адрес электронной почты:">
					<a href="#" class="onlinework--already-regist">Вы уже зарегистрированы Abbey Road Online Mastering?</a>
					<input type="text" class="registration-input--large" name="demos-city" placeholder="Город">
					<input type="text" class="registration-input--small" name="demos-username">
					<a href="#" class="demos--but">Обзор</a>
					<input type="text" class="registration-input--large" name="demos-songs-link" placeholder="Ссылка на песню">
					<div class="becomeastar__questionnaire--but">
  						<input type="button" name="demos-input--button" class="registration-input--button registerUser" value="Отправить">
  					</div>
				</div>
				
			</div>
		</div>
	</section>
<? get_footer()?>