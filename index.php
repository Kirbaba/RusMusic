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
						<div class="insta--wrapper">						
								<div class="col-lg-10 col-sm-10 col-md-10 col-xs-10 p0">									
									<div class="slider-item-slider">
										<div class="slick-slider-item">
											<img src="<?php bloginfo('template_directory'); ?>/img/11410496_202365863429996_1088910130_n.jpg" alt="">
											<div class="insta--liks">
												<p><i class="fa fa-heart"></i>12730</p>
											</div>												
										</div>
										<div class="slick-slider-item">
											<img src="<?php bloginfo('template_directory'); ?>/img/1921928_893827157376295_753702593_n.jpg" alt="">										
										</div>
										<div class="slick-slider-item">
											<img src="<?php bloginfo('template_directory'); ?>/img/12120229_1656778934596228_287584296_n.jpg" alt="">
										</div>
										<div class="slick-slider-item">
											<img src="<?php bloginfo('template_directory'); ?>/img/12120263_1699297110314488_1772948494_n.jpg" alt="">
										</div>
										<div class="slick-slider-item">
											<img src="<?php bloginfo('template_directory'); ?>/img/12145093_418405665037172_958160522_n.jpg" alt="">
										</div>
										<div class="slick-slider-item">
											<img src="<?php bloginfo('template_directory'); ?>/img/12145502_411674379029941_1074693874_n.jpg" alt="">
										</div>
										<div class="slick-slider-item">
											<img src="<?php bloginfo('template_directory'); ?>/img/11380158_1702125156683339_285776453_n.jpg" alt="">
										</div>
									</div>
								  <!-- .slider-item-slider -->
									<div class="slider-thumb-slider">
										<div class="slick-slider-item">
											<img src="<?php bloginfo('template_directory'); ?>/img/11410496_202365863429996_1088910130_n.jpg" alt="">
										</div> 
										<div class="slick-slider-item">
											<img src="<?php bloginfo('template_directory'); ?>/img/1921928_893827157376295_753702593_n.jpg" alt="">
										</div>
										<div class="slick-slider-item">
											<img src="<?php bloginfo('template_directory'); ?>/img/12120229_1656778934596228_287584296_n.jpg" alt="">
										</div>
										<div class="slick-slider-item">
											<img src="<?php bloginfo('template_directory'); ?>/img/12120263_1699297110314488_1772948494_n.jpg" alt="">
										</div>
										<div class="slick-slider-item">
											<img src="<?php bloginfo('template_directory'); ?>/img/12145093_418405665037172_958160522_n.jpg" alt="">
										</div>
										<div class="slick-slider-item">
											<img src="<?php bloginfo('template_directory'); ?>/img/12145502_411674379029941_1074693874_n.jpg" alt="">
										</div>
										<div class="slick-slider-item">
											<img src="<?php bloginfo('template_directory'); ?>/img/11380158_1702125156683339_285776453_n.jpg" alt="">
										</div>
									</div>
								  <!-- .slider-thumb-slider -->
									
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
									<div class="insta--title">
										<a href="#">
											<img src="<?php bloginfo('template_directory'); ?>/img/2015-06-09.png" alt="">
											<span>rusmusic.pro</span>
										</a>

										<div class="insta--title--info">
											<p>Публикации:</p>
											<h5>116</h5>
										</div>
										<div class="insta--title--info">
											<p>подписчиков:</p>
											<h5>118</h5>
										</div>
										<div class="insta--title--info">
											<p>подписки:</p>
											<h5>103</h5>
										</div>

									</div>
								</div>
					
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="social-network--facebook">
							<div class="fb-page" data-href="https://www.facebook.com/rusmusicrecords/" data-width="270" data-height="356" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/rusmusicrecords/"><a href="https://www.facebook.com/rusmusicrecords/">Продюсерский центр &quot;RusMusic Records&quot;</a></blockquote></div></div>
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
						<a href="#" class="stars-slider__item">
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
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="partners">
		<div class="container">
			<div class="row">				
				<h4>НАШИ ПАРТНЕРЫ</h4>
				
				<div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-4 col-xs-6">
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
				</div>
			</div>
		</div>
	</section>

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<ul>
						<li><a href="#">Главная</a></li>
						<li><a href="#">О компании</a></li>
						<li><a href="#">Команда</a></li>
						<li><a href="#">Наши проекты</a></li>
						<li><a href="#">Новости</a></li>
						<li><a href="#">Поиск</a></li>
						<li><a href='#'>Детская творческая мастерская</a></li>
						<li><a href='#'>Организация концертов фестивалей, Дни Рождения</a></li>	
					</ul>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
					<ul>					
						<li><a href='#'>Стань звездой</a></li>
						<li><a href='#'>Обучение</a></li>
						<li><a href='#'>Заработай на музыке</a></li>
						<li><a href='#'>Запиши хит</a></li>
						<li><a href='#'>Студия</a></li>
						<li><a href='#'>Портфолио</a></li>
						<li><a href='#'>Галерея артистов</a></li>
						<li><a href='#'>Галерея релизов</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
					<ul>
						<li><a href='#'>Демо записи</a></li>
						<li><a href='#'>Он-лайн работа</a></li>
						<li><a href='#'>Найди свой хит</a></li>
						<li><a href='#'>Регистрация</a></li>
						<li><a href='#'>Карта сайта</a></li>
						<li><a href='#'>Контакты</a></li>
						<li><a href='#'>Карта проезда</a></li>
						<li><a href='#'>Партнерам</a></li>
					</ul>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<a href="#" class="footer__soc"><i class="fa fa-facebook"></i>facebook</a>
					<a href="#" class="footer__soc"><i class="fa fa-twitter"></i>twitter</a>
					<a href="#" class="footer__soc"><i class="fa fa-instagram"></i>instagram</a>
					<a href="#" class="footer__soc"><i class="fa fa-vk"></i>вконтакте</a>
					<a href="#" class="footer__soc"><i class="fa fa-youtube"></i>youtube</a>
					<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
						<div class="row">
							<a href="#" class="footer__tags">Демо записи</a>
							<a href="#" class="footer__tags">СТУДИЯ</a>
							<a href="#" class="footer__tags">ХИТ</a>
							<a href="#" class="footer__tags">ОБУЧЕНИЕ</a>
							<a href="#" class="footer__tags">ПОРТФОЛИО</a>
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
					<h3>8-800-555-12-74 <span>(бесплатные звонки из РФ)</span> +7 (495) 614 12 74, +7 (495) 614 08 65</h3>
				</div>
			</div>
		</div>
	</article>
    
<?php wp_footer(); ?>
</body>
</html>