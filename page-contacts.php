<? get_header()?>
	<section class="page-title-head contacts__head">
		<div class="container-fluid">
			<div class="row">
				<header class="contacts__head--text">						
					<h3><span>Контакты</span></h3>
					<p>Москва, Тверская ул., д. 56</p>
					<h2><span>+7.495.</span>614.12.74 </h2>
				</header>
			</div>
		</div>		
	</section>

	<section class="contacts-map">
			<div id="map_canvas" style="width:100%; height:100%"></div>
			<div class="container">
				<div class="row">
					<div class="contacts-map__forms">
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="contacts-map__forms--social">
								<a href="#"><i class="fa fa-envelope-o"></i>office@rusmusic-records.ru</a>
								<a href="#"><i class="fa fa-facebook-official"></i>facebook.com/rusmusicrecords</a>
								<a href="#"><i class="fa fa-instagram"></i>@rusmusic.pro</a>
							</div>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<div class="contacts-map__forms--contactform">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<input type="email" name="contact-email" placeholder="Ваш e-mail:">
									<input type="text" name="contact-name" placeholder="Ваше имя:">
									<input type="text" name="contact-site" placeholder="Ваш сайт:">
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<textarea name="contact-message" id="" placeholder="Ваше сообщение:"></textarea>
									<input type="button" value="Отправить" class="contacts--but">
								</div>
							</div>
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