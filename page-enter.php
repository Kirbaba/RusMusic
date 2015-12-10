<? get_header() ?>
	<section class="enter-page">
		<div class="container">
			<div class="row">
				<?php if ( !is_user_logged_in() ){ ?>
				<h3>Войти</h3>
				<div class="col-lg-4 col-lg-offset-2 col-md-5 col-md-offset-1 col-sm-6  col-xs-12">
					<form name="loginform" id="loginform" action="" method="post">
						<input type="text" id="user_login" name="log" class="enter--input" placeholder="Логин">
						<input type="text" id="user_pass" name="pwd" class="enter--input" placeholder="Пароль">
						<a href="#" class="enter-forget--pass">Забыл свой пароль</a>
						<input id="wp-submit" type="submit"  name="wp-submit" class="enter--continue" value="Продолжить">
						<input type="hidden" name="action" value="my_login_action" />
					</form>
				</div>
				<div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
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
			</div>
			<div class="row">
				<a href="/registration" class="enter-newuser">Нет, я новый пользователь</a>
			</div>
	<?php }else{ ?>
		<h3>Вы уже авторизированы!</h3>
		<a href="/?logout=true" class="enter-newuser">Выйти</a>
	<?php } ?>
		</div>
	</section>
<? get_footer() ?>

