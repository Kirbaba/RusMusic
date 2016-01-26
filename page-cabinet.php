<? get_header()?>
<section class="page-title-head cabinet__head">
	<div class="container">
		<div class="row">
			<a href="" class="cabinet--signout">
				ВЫЙТИ ИЗ ЛИЧНОГО КАБИНЕТА
				<i class="fa fa-sign-out"></i>
			</a>
		</div>
	</div>		
</section>

<section class="cabinet__content">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<aside class="cabinet__sidebar">
					<div class="cabinet__sidebar--head">
						<div class="cabinet__sidebar--avatar">
							<img src="<?php bloginfo('template_directory'); ?>/img/Layer-1.jpg" alt="">
						</div>
						<div class="cabinet__sidebar--name">
							<p>nikiforof01</p>
							<h4>Владимир Никифоров</h4>
						<!-- -----------------STARS------------------- -->
							<div class="cabinet__sidebar--name--stars">
								
							</div>
						<!-- -----------------STARS------------------- -->
						</div>
					</div>
					<ul class="cabinet__sidebar--menu">
						<li>
							<a href="#"><i class="fa fa-home"></i>Личный кабинет</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-commenting-o"></i>Сообщения<span class="counter--active">32</span></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-flask"></i>Проекты<span class="counter">12</span></a>
							<ul class="cabinet__sidebar--menu--bottom">
								<li><a href="#">На рассмотрении <span class="counter">1</span></a></li>
								<li><a href="#">В работе<span class="counter--passive">23</span></a></li>
								<li><a href="#">Сделано<span class="counter--active">5</span></a></li>
							</ul>
						</li>
					</ul>
					<div class="cabinet__sidebar--searchhit">
						<a href="#">НАЙДИ СВОЙ ХИТ</a>
					</div>
				</aside>
			</div>
		</div>
	</div>
</section>

<section class="stars-slider">
	<div class="container">
		<div class="row">
			<div class="stars-slider__wrapper">
				<div class="stars-slick">
					<?= do_shortcode('[authors]'); ?>
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