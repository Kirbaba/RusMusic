<? get_header() ?>
	<section class="registration-page">
		<div class="container">
			<div class="row">
				<h3>Регистрация</h3>
				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 p0">
					<input type="text" class="registration-input--small" name="registration-username" placeholder="Ваше имя:">
					<input type="text" class="registration-input--small" name="registration-lastname" placeholder="Ваша фамилия:">
					<input type="text" class="registration-input--large" name="registration-email" placeholder="Адрес электронной почты:">
					<input type="password" class="registration-input--large" name="registration-password" placeholder="Мой пароль:">
					<input type="password" class="registration-input--large" name="registration-password-check" placeholder="Подтверждение пароля:">
					<div class="registration-input--radio">
						<p>Пол</p>
						<input type="radio" id="radio01" name="registration-gender" value="male" />
	  					<label for="radio01">Муж<span></span></label>
	  					<input type="radio" id="radio02" name="registration-gender" value="female" />
	  					<label for="radio02">Жен<span></span></label>
  					</div>
  					<input type="button"  name="registration-input--button" class="registration-input--button" value="Зарегистрироваться">
				</div>
			</div>			
		</div>
	</section>
	
	<section class="registratin--social">
		<div class="container">
			<div class="row">
				<div class="enter-social">
					<h4>Войти используя социальные сети</h4>
					<?php echo get_ulogin_panel(); ?>
					<!--<a href="#"><i class="but-gplus"></i></a>
					<a href="#"><i class="but-face"></i></a>
					<a href="#"><i class="but-odnokl"></i></a>
					<a href="#"><i class="but-vk"></i></a>
					<a href="#"><i class="but-mailru"></i></a>
					<a href="#"><i class="but-yandex"></i></a>-->
				</div>
			</div>
		</div>
	</section>
<? get_footer() ?>