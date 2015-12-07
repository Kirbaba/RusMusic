	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<?php
					wp_nav_menu( array(
							'theme_location'    => 'footer_menu_1',
							'menu_class'        => '',
					));
					?>
					<!--<ul>
						<li><a href="#">Главная</a></li>
						<li><a href="#">О компании</a></li>
						<li><a href="#">Команда</a></li>
						<li><a href="#">Наши проекты</a></li>
						<li><a href="#">Новости</a></li>
						<li><a href="#">Поиск</a></li>
						<li><a href='#'>Детская творческая мастерская</a></li>
						<li><a href='#'>Организация концертов фестивалей, Дни Рождения</a></li>	
					</ul>-->
				</div>
				<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
					<?php
					wp_nav_menu( array(
						'theme_location'    => 'footer_menu_2',
						'menu_class'        => '',
					));
					?>
					<!--<ul>
						<li><a href='#'>Стань звездой</a></li>
						<li><a href='#'>Обучение</a></li>
						<li><a href='#'>Заработай на музыке</a></li>
						<li><a href='#'>Запиши хит</a></li>
						<li><a href='#'>Студия</a></li>
						<li><a href='#'>Портфолио</a></li>
						<li><a href='#'>Галерея артистов</a></li>
						<li><a href='#'>Галерея релизов</a></li>
					</ul>-->
				</div>
				<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
					<?php
					wp_nav_menu( array(
						'theme_location'    => 'footer_menu_3',
						'menu_class'        => '',
					));
					?>
					<!--<ul>
						<li><a href='#'>Демо записи</a></li>
						<li><a href='#'>Он-лайн работа</a></li>
						<li><a href='#'>Найди свой хит</a></li>
						<li><a href='#'>Регистрация</a></li>
						<li><a href='#'>Карта сайта</a></li>
						<li><a href='#'>Контакты</a></li>
						<li><a href='#'>Карта проезда</a></li>
						<li><a href='#'>Партнерам</a></li>
					</ul>-->
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<a href="<?php echo get_theme_mod('fb_textbox'); ?>" class="footer__soc"><i class="fa fa-facebook"></i>facebook</a>
					<a href="<?php echo get_theme_mod('tw_textbox'); ?>" class="footer__soc"><i class="fa fa-twitter"></i>twitter</a>
					<a href="<?php echo get_theme_mod('inst_textbox'); ?>" class="footer__soc"><i class="fa fa-instagram"></i>instagram</a>
					<a href="<?php echo get_theme_mod('vk_textbox'); ?>" class="footer__soc"><i class="fa fa-vk"></i>вконтакте</a>
					<a href="<?php echo get_theme_mod('yt_textbox'); ?>" class="footer__soc"><i class="fa fa-youtube"></i>youtube</a>
					<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
						<div class="footer__tags">

							<?php
							$menuParameters = array(
								'theme_location'  => 'footer_menu_4',
								'menu_class'      => 'menu',
								'menu_id'         => '',
								'echo'            => false,
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '%3$s',
								'depth'           => 0
							);

							echo strip_tags(wp_nav_menu( $menuParameters ), '<a>');
							?>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<article class="site-copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<h4>© 2015 rusmusic-records.ru</h4>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
					<h3><?php echo get_theme_mod('phone_textbox'); ?> <span>(бесплатные звонки из РФ)</span><?php echo get_theme_mod('phone_textbox2'); ?>, <?php echo get_theme_mod('phone_textbox3'); ?></h3>
				</div>
			</div>
		</div>
	</article>
    
<?php wp_footer(); ?>

</body>
</html>