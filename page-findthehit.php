<? get_header()?>
	<section class="page-title-head onlinework--head">
		<div class="container-fluid">
			<div class="row">
				<h2 class="onlytitle--text">Найди свой хит</h2>
			</div>
			<div class="findthehit--pagedescription">
				<div class="container">					
					<div class="row">
						<p>
							Здесь Вы можете купить песни под ключ (с готовой аранжировкой). Возможно изменение тональности в готовых песнях. <br>
							Чтобы узнать стоимость песен, напиши сюда. Узнавай первым о появлении новых песен - подпишись
						</p>
					</div>
				</div>				
			</div>
		</div>		
	</section>

	<section class="findthehit__container">
		<div class="container">
			<div class="row">
				<div class="findthehit--titleline">
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-2">
							<h4 class="findthehit--date">Дата размещения</h4>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-4">
							<h4>Название</h4>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-4">
							<h4>Автор</h4>
						</div>
					</div>
				</div>
                <?= do_shortcode('[findthehit]'); ?>
				<!--<div class="findthehit--itemline">
			
					<div class="col-lg-2 col-md-2 col-sm-2">
						<p class="findthehit--date">21.12.2014</p>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4">
						<p>Cемейный праздник</p>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4">
						<a href="#">Александр Куприянов</a>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2">
						<div class="findthehit__player">
							<a href="#" class="findthehit--controls findthehit--controls--vol"><i class="fa fa-volume-off"></i></a>
							<a href="#" class="findthehit--controls findthehit--controls--play"><i class="fa fa-play"></i></a>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4 col-lg-offset-0 col-md-offset-0 col-sm-offset-2">
						<a class="findthehit--reservation">Зарезервировать</a>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4">
						<a class="findthehit--order">Заказать</a>
					</div>
				
				</div>
				<div class="findthehit--itemline">
					
					<div class="col-lg-2 col-md-2 col-sm-2">
						<p class="findthehit--date">21.12.2014</p>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4">
						<p>Cемейный праздник</p>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4">
						<a href="#">Александр Куприянов</a>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2">
						<div class="findthehit__player">
							<a href="#" class="findthehit--controls findthehit--controls--vol"><i class="fa fa-volume-up"></i></a>
							<a href="#" class="findthehit--controls findthehit--controls--play"><i class="fa fa-pause"></i></a>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4 col-lg-offset-0 col-md-offset-0 col-sm-offset-2">
						<a href="#" class="findthehit--reservation findthehit--reservation--active">Зарезервировать</a>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4">
						<a href="#" class="findthehit--order findthehit--order--active">Заказать</a>
					</div>
				
				</div>-->
				
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