<?php get_header(); ?>
	<section class="enter-slideshow">
		<div class="fotorama" data-width="100%"  data-ratio="1568/658" data-fit="cover" data-arrows="false">
			<?= do_shortcode('[mainSlider]'); ?>
			<!--<div data-img="<?php bloginfo('template_directory'); ?>/img/slide1.jpg">
		<div class="fotorama" data-width="100%"  data-ratio="1568/658" data-fit="cover" data-arrows="false">
			<div data-img="<?php bloginfo('template_directory'); ?>/img/slide1.jpg">
				<div class="container">
					<div class="enter-slideshow__text">
						<h1>ЕЛКА <span>/</span> ХОЧУ</h1>
						<h4>Премия Ru.Tv 2012</h4>
						<a href="#" class="enter-slideshow__text--listen"><span>СЛУШАТЬ</span></a>
					</div>
					<div class="enter-slideshow__video">
						<iframe width="100%" height="100%" src="https://www.youtube.com/embed/t4mUEKCKCtw" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div data-img="<?php bloginfo('template_directory'); ?>/img/slide1.jpg">
				<div class="container">
					<div class="enter-slideshow__text">
						<h1>Slide #2</h1>
						<h4>НОВЫЙ КОНЦЕРТНЫЙ ТУР ПО РОССИИ И КАЗАХСТАНУ</h4>
					</div>
					<div class="enter-slideshow__video">
						<iframe width="100%" height="100%" src="https://www.youtube.com/embed/t4mUEKCKCtw" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>	-->
			</div>
		</div>

	</section>

	<section class="becomeastar">
		<canvas id="slider-canvas"></canvas>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-6 col-xs-12">
					<h3>Стань звездой</h3>
					<p>МЕЧТАЕШЬ О СЦЕНЕ И СЛАВЕ, МНОГО ИДЕЙ НО НЕТ ВОЗМОЖНОСТИ РЕАЛИЗОВАТЬ НА ВСЮ КАТУШКУ СВОЙ ПОТЕНЦИАЛ - МЫ ПОМОЖЕМ!</p>
				</div>
			</div>
			<div class="row">
				<div class="becomeastar--link-line">
					<?php echo do_shortcode('[mainDirection paged="0"]'); ?>
					<!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p0">
						<a href="#" class="becomeastar--link-line--item">
							<span class="img-skew-wrap">
								<img src="<?php bloginfo('template_directory'); ?>/img/755645743456-(6).jpg" alt="">
								<span class="becomeastar--link-line--item--text align-right">
									<h3>Заработай на музыке</h3>
									<p>ПРОДАЖА МУЗЫКАЛЬНО КОНТЕНТА НА ГИПЕР ПЛОЩАДКАХ: ITUNES, GOOGLE DRIVE</p>
								</span>
							</span>
							<span class="link-line--border"></span>
						</a>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p0">
						<a href="#" class="becomeastar--link-line--item">
							<span class="img-skew-wrap">
								<img src="<?php bloginfo('template_directory'); ?>/img/1-(12).jpg" alt="">
								<span class="becomeastar--link-line--item--text align-left">
									<h3>Запиши хит</h3>
									<p>СТУДИЯ ЗВУКОЗАПИСИ, АРАНЖИРОВКИ, ПРОМОУШЕН</p>
								</span>
							</span>
							<span class="link-line--border"></span>
						</a>
					</div>-->
				</div>
			</div>
		</div>
	</section>

	<section class="more-links">
		<canvas id="more-links-canvas"></canvas>
		<article class="second-line">
			<div class="container">
				<div class="row">
					<div class="line--box">
						<?php echo do_shortcode('[mainDirection paged="2"]'); ?>
						<!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p0">
							<a href="#" class="becomeastar--link-line--item">
								<span class="img-skew-wrap">
									<img src="<?php bloginfo('template_directory'); ?>/img/shutterstock_132936830.png" alt="">
									<span class="becomeastar--link-line--item--text align-right">
										<h3>Найди свой хит</h3>
										<p>ТУТ можно купить песню для своего репертуара, а автор  сможет продать песни артистам.</p>
									</span>
								</span>
								<span class="link-line--border"></span>
							</a>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p0">
							<a href="#" class="becomeastar--link-line--item">
								<span class="img-skew-wrap">
									<img src="<?php bloginfo('template_directory'); ?>/img/shutterstock_85515949.png" alt="">
									<span class="becomeastar--link-line--item--text align-left">
										<h3>Обучение</h3>
										<p>Организуем любой перфоманс, EVENT или PROMO мероприятие. проектов.</p>
									</span>
								</span>
								<span class="link-line--border"></span>
							</a>
						</div>-->
					</div>
				</div>
			</div>
		</article>
		<article class="third-line">
			<div class="container">
				<div class="row">
					<div class="line--box">
						<?php echo do_shortcode('[mainDirection paged="4"]'); ?>
						<!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p0">
							<a href="#" class="becomeastar--link-line--item">
								<span class="img-skew-wrap">
									<img src="<?php bloginfo('template_directory'); ?>/img/shutterstock_88537570.png" alt="">
									<span class="becomeastar--link-line--item--text align-right">
										<h3>Детская творческая мастерская</h3>
										<p>место, где дети и взрослые узнают о самых разных видах творчества в дружеской и свободной обстановке. </p>
									</span>
								</span>
								<span class="link-line--border"></span>
							</a>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p0">
							<a href="#" class="becomeastar--link-line--item">
								<span class="img-skew-wrap">
									<img src="<?php bloginfo('template_directory'); ?>/img/shutterstock_234744790.png" alt="">
									<span class="becomeastar--link-line--item--text align-left">
										<h3>Организация концертов</h3>
										<p>Организуем любой перфоманс, EVENT или PROMO мероприятие. проектов. </p>
									</span>
								</span>
								<span class="link-line--border"></span>
							</a>
						</div>-->
					</div>
				</div>
			</div>
		</article>
	</section>

	<section class="news">
		<div class="container">
			<div class="row">
				<div class="news-wrapper">
					<h4>НОВОСТИ ПРОДЮСЕРСКОГО ЦЕНТРА</h4>
					<div class="responsive">
						<?php echo do_shortcode('[mainNews]'); ?>
						<!--<div class="news__item">
							<div class="news__item--img">
								<img src="<?php bloginfo('template_directory'); ?>/img/shutterstock_112378778.jpg" alt="">
							</div>
							<div class="news__item--soc">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-vk"></i></a>
							</div>
							<div class="news__item--title">
								<p>19.06.2015</p>
								<h4>АННА ШУЛЬГИНА:«БАЛ ДЕБЮТАНТОК — ЭТО ШАНС НАЙТИ ДРУЗЕЙ</h4>
								<a href="#">> ПОДРОБНЕЕ</a>
							</div>
		                </div>

						<div class="news__item">
							<div class="news__item--img">
								<img src="<?php bloginfo('template_directory'); ?>/img/shutterstock_112378778.jpg" alt="">
							</div>
							<div class="news__item--soc">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-vk"></i></a>
							</div>
							<div class="news__item--title">
								<p>19.06.2015</p>
								<h4>АННА ШУЛЬГИНА:«БАЛ ДЕБЮТАНТОК — ЭТО ШАНС НАЙТИ ДРУЗЕЙ</h4>
								<a href="#">> ПОДРОБНЕЕ</a>
							</div>
		                </div>

						<div class="news__item">
							<div class="news__item--img">
								<img src="<?php bloginfo('template_directory'); ?>/img/shutterstock_112378778.jpg" alt="">
							</div>
							<div class="news__item--soc">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-vk"></i></a>
							</div>
							<div class="news__item--title">
								<p>19.06.2015</p>
								<h4>АННА ШУЛЬГИНА:«БАЛ ДЕБЮТАНТОК — ЭТО ШАНС НАЙТИ ДРУЗЕЙ</h4>
								<a href="#">> ПОДРОБНЕЕ</a>
							</div>
		                </div>

						<div class="news__item">
							<div class="news__item--img">
								<img src="<?php bloginfo('template_directory'); ?>/img/shutterstock_112378778.jpg" alt="">
							</div>
							<div class="news__item--soc">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-vk"></i></a>
							</div>
							<div class="news__item--title">
								<p>19.06.2015</p>
								<h4>АННА ШУЛЬГИНА:«БАЛ ДЕБЮТАНТОК — ЭТО ШАНС НАЙТИ ДРУЗЕЙ</h4>
								<a href="#">> ПОДРОБНЕЕ</a>
							</div>
		                </div>		-->
			        </div>
				</div>
			</div>
		</div>
	</section>

	<section class="social-network">
		<div class="container">
			<div class="row">
			<div class="social-network-wrapper">
				<div class="row">
					<h4>НАШ ИНСТАГРАМ</h4>
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
						<?= do_shortcode('[instagram]'); ?>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="social-network--facebook">
							<div class="fb-page" data-href="https://www.facebook.com/rusmusicrecords/" data-width="270" data-height="356" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/rusmusicrecords/"><a href="https://www.facebook.com/rusmusicrecords/">Продюсерский центр &quot;RusMusic Records&quot;</a></blockquote></div></div>
						</div>
					</div>
				</div>
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
						<!--<a href="#" class="stars-slider__item">
							<img src="<?php bloginfo('template_directory'); ?>/img/a-dessa.jpg" alt="">
							<span class="stars-slider__item--text">
								<h4>Раненая<br>птица</h4>
								<h5>A-DESSA</h5>
							</span>
						</a>

						<a href="#" class="stars-slider__item">
							<img src="<?php bloginfo('template_directory'); ?>/img/placebo.jpg" alt="">
							<span class="stars-slider__item--text">
								<h4>Плацебо</h4>
								<h5>АНАСТАСИЯ КОВАЛЕВА</h5>
							</span>
						</a>

						<a href="#" class="stars-slider__item">
							<img src="<?php bloginfo('template_directory'); ?>/img/mans.jpg" alt="">
							<span class="stars-slider__item--text">
								<h4>ПОЭТ ПЕСЕННИК</h4>
								<h5>Mans Zelmerlow</h5>
							</span>
						</a>

						<a href="#" class="stars-slider__item">
							<img src="<?php bloginfo('template_directory'); ?>/img/semenovich.jpg" alt="">
							<span class="stars-slider__item--text">
								<h4>ПЕВИЦА ВОКАЛИСТКА ПРОДЮСЕР</h4>
								<h5>АННА СЕМЕНОВИЧ</h5>
							</span>
						</a>

						<a href="#" class="stars-slider__item">
							<img src="<?php bloginfo('template_directory'); ?>/img/rodriges.jpg" alt="">
							<span class="stars-slider__item--text">
								<h4>АРТИСТ ПРОДЮСЕР ШОУМЭН</h4>
								<h5>ТИМУР РОДРИГЕЗ</h5>
							</span>
						</a>

						<a href="#" class="stars-slider__item">
							<img src="<?php bloginfo('template_directory'); ?>/img/a-dessa.jpg" alt="">
							<span class="stars-slider__item--text">
								<h4></h4>
								<h5></h5>
							</span>
						</a>-->
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

				<!--<div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-4 col-xs-6">
					<div class="partners__item">
						<img src="<?php bloginfo('template_directory'); ?>/img/partners_03.png" alt="">
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
					<div class="partners__item">
						<img src="<?php bloginfo('template_directory'); ?>/img/partners_05.png" alt="">
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
					<div class="partners__item">
						<img src="<?php bloginfo('template_directory'); ?>/img/partners_07.png" alt="">
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-sm-offset-2 col-lg-offset-0 col-md-offset-0 col-xs-6">
					<div class="partners__item">
						<img src="<?php bloginfo('template_directory'); ?>/img/partners_09.png" alt="">
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 col-xs-offset-3 col-sm-offset-0">
					<div class="partners__item">
						<img src="<?php bloginfo('template_directory'); ?>/img/partners_11.png" alt="">
					</div>
				</div>-->
			</div>
		</div>
	</section>
<?php get_footer(); ?>