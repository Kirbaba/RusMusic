<? get_header()?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="page-title-head training__head">
		<div class="container-fluid">
			<div class="row">
				<div class="training__triangle"></div>
				<header class="becomeastar__head--text">						
					<h2><?= the_title(); ?></h2>
					<p><?= the_content(); ?></p>
				</header>
			</div>
		</div>		
	</section>
<?php endwhile; ?>
<?php  endif;?>
	<section class="training__content">
		<div class="container">
			<div class="row">
				<div class="training__content__wrapper">
					<?= do_shortcode('[coursegrid]'); ?>

					<!--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="training__content__item">
							<div class="training__content__item--img">
								<img src="<?php bloginfo('template_directory'); ?>/img/training_1.jpg" alt="">
							</div>
							<div class="training__content__item--title">
								<h4>Создание электронной музыки</h4>
							</div>
							<div class="training__content__item--description">
								<p>Курс для желающих научиться создавать свою музыку на компьютере в домашних условиях в любом 
									музыкальном направлении и стиле.  
									Мы гарантируем, что через 3 месяца вы будете грамотно создавать музыку.</p>
							</div>
							<div class="training__content__item--buttons">
								<a href="#" class="training__content__item--buttons--more">Подробнее</a>
								<a href="#" class="training__content__item--buttons--sign">Записаться</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="training__content__item">
							<div class="training__content__item--img">
								<img src="<?php bloginfo('template_directory'); ?>/img/training-2-1.jpg" alt="">
							</div>
							<div class="training__content__item--title">
								<h4>Сведение трека в студии звукозаписи и мастеринг</h4>
							</div>
							<div class="training__content__item--description">
								<p>Сведение  - это не только искусство, но и ключевой этап, который превращает набор дорожек в 
									законченное музыкальное произведение. Хороший микс поможет выявить в музыке все самое лучшее – 
									подчеркнуть наиболее важные элементы композиции, 
									добавить какие-нибудь сюрпризы, чтобы порадовать слушателя. </p>
							</div>
							<div class="training__content__item--buttons">
								<a href="#" class="training__content__item--buttons--more">Подробнее</a>
								<a href="#" class="training__content__item--buttons--sign">Записаться</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="training__content__item">
							<div class="training__content__item--img">
								<img src="<?php bloginfo('template_directory'); ?>/img/training-3.jpg" alt="">
							</div>
							<div class="training__content__item--title">
								<h4>LOGIC PRO 9, X.</h4>
							</div>
							<div class="training__content__item--description">
								<p>Это профессиональный аудио редактор и миди секвенсор компании Apple, 
									ориентированный на работу с операционными системами Mac OS X. 
									Курс ориентирован для тех, у кого есть опыт в создании музыки и имеет 
									необходимую техническую базу владением секвенсорами. 
									Вы научитесь быстро работать в программе, пользоваться встроенными и 
									внешними плагинами, работать с аранжировкой аудио и миди, 
									а так же сами сводить свои треки. </p>
							</div>
							<div class="training__content__item--buttons">
								<a href="#" class="training__content__item--buttons--more">Подробнее</a>
								<a href="#" class="training__content__item--buttons--sign">Записаться</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="training__content__item">
							<div class="training__content__item--img">
								<img src="<?php bloginfo('template_directory'); ?>/img/training-4.jpg" alt="">
							</div>
							<div class="training__content__item--title">
								<h4>Промоутерская
деятельность - 
организация 
мероприятий</h4>
							</div>
							<div class="training__content__item--description">
								<p>Курс для желающих научиться создавать свою музыку на компьютере в домашних условиях в любом музыкальном направлении и стиле.  Мы гарантируем, что через 3 месяца вы будете грамотно создавать музыку.</p>
							</div>
							<div class="training__content__item--buttons">
								<a href="#" class="training__content__item--buttons--more">Подробнее</a>
								<a href="#" class="training__content__item--buttons--sign">Записаться</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="training__content__item">
							<div class="training__content__item--img">
								<img src="<?php bloginfo('template_directory'); ?>/img/training-5.jpg" alt="">
							</div>
							<div class="training__content__item--title">
								<h4>Мэшап и Спидмиксинг</h4>
							</div>
							<div class="training__content__item--description">
								<p>Mashup (машап) - комбинация двух, или более, треков, объединённых таким образом, чтобы они звучали как одно произведение. Процесс создания "Mashup" напоминает одну из техник в диджеинге, когда берётся "акапелла" (голос без инструментального сопровождения) и смешивается с другим или другими инструментальными треками.</p>
							</div>
							<div class="training__content__item--buttons">
								<a href="#" class="training__content__item--buttons--more">Подробнее</a>
								<a href="#" class="training__content__item--buttons--sign">Записаться</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="training__content__item">
							<div class="training__content__item--img">
								<img src="<?php bloginfo('template_directory'); ?>/img/training-6.jpg" alt="">
							</div>
							<div class="training__content__item--title">
								<h4>Элементарная Теория Музыки</h4>
							</div>
							<div class="training__content__item--description">
								<p>Для того, чтобы читать и правильно писать, нужно знать буквы, слова, их смысл и грамматику, т.е. законы языка. 
Для того, чтобы уметь правильно сочинять музыку, играть её или петь, нужно знать теорию музыки.
Элементарная теория музыки - первоначальная музыкальная грамматика о важнейших элементах музыки.
Можно назвать её орфографией музыки. </p>
							</div>
							<div class="training__content__item--buttons">
								<a href="#" class="training__content__item--buttons--more">Подробнее</a>
								<a href="#" class="training__content__item--buttons--sign">Записаться</a>
							</div>
						</div>
					</div>-->

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