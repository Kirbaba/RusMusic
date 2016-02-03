<? get_header()?>
<?php if(is_user_logged_in()){
	global $current_user;
	global $wpdb;
	get_currentuserinfo();
	//получаем информацию о ленте
	$projects = $wpdb->get_results( "SELECT * FROM `projects` WHERE `user_id` = '{$current_user->ID}'", ARRAY_A );

	$projects_count = count($projects);
	$mixing = 0;
	$mastering = 0;
	$pending = 0;
	$atwork = 0;
	$done = 0;
	$count = 0;

	foreach($projects as $project){
		$proj_count = $wpdb->get_results( "SELECT COUNT(*) FROM `messages` WHERE `proj_id` = '{$project['id']}'", ARRAY_A );
		$count += $proj_count[0]['COUNT(*)'];

		if($project['status'] == 'pending'){
			$pending++;
		}
		if($project['status'] == 'atwork'){
			$atwork++;
		}
		if($project['status'] == 'done'){
			$done++;
		}
		if($project['type'] == 'mastering'){
			$mastering++;
		}
		if($project['type'] == 'mixing'){
			$mixing++;
		}
	}

	?>

	<section class="page-title-head cabinet__head">
	<div class="container">
		<div class="row">
			<a href="/?logout=true" class="cabinet--signout">
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
							<img src="<?php echo get_wp_user_avatar_src($current_user->ID, 96); ?>" alt="">
						</div>
						<div class="cabinet__sidebar--name">
							<p><?= $current_user->nickname; ?></p>
							<h4><?= $current_user->user_firstname; ?> <?= $current_user->user_lastname; ?></h4>
						<!-------------------STARS------------------- -->
							<div class="cabinet__sidebar--name--stars">
								<?php $rating = get_the_author_meta( 'stars',$current_user->ID ); ?>
								<ul>
									<?php for($i = 0; $i < 5; $i++){ ?>
										<?php if($i < $rating){ ?>
											<li class="cabinet__sidebar--name--stars__item is-active" ></li>
										<?php }else{ ?>
											<li class="cabinet__sidebar--name--stars__item" ></li>
										<?php }?>

									<?php } ?>
								</ul>
							</div>
						<!-- -----------------STARS------------------- -->
						</div>
					</div>
					<ul class="cabinet__sidebar--menu">
						<li>
							<a href="/account"><i class="fa fa-home"></i>Личный кабинет</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-commenting-o"></i>Сообщения<span class="counter--active"><?= $count; ?></span></a>
						</li>
						<li>
							<a href="#nowhere"><i class="fa fa-flask"></i>Проекты<span class="counter"><?= count($projects); ?></span></a>
							<ul class="cabinet__sidebar--menu--bottom">
								<li><a href="#">На рассмотрении <span class="counter"><?= $pending; ?></span></a></li>
								<li><a href="#">В работе<span class="counter--passive"><?= $atwork; ?></span></a></li>
								<li><a href="#">Сделано<span class="counter--active"><?= $done; ?></span></a></li>
							</ul>
						</li>
					</ul>
					<div class="cabinet__sidebar--searchhit">
						<a href="/findthehit">НАЙДИ СВОЙ ХИТ</a>
					</div>
				</aside>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
				<div class="row">				
					<div class="col-xs-6">
						<div class="cabinet__processes mastering">
							<div class="cabinet__processes--icon"></div>
							<div class="cabinet__processes--title">
								<h4>НА МАСТЕРИНГЕ</h4>
								<h3><?= $mastering ?> композиции</h3>
							</div>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="cabinet__processes reduction">
							<div class="cabinet__processes--icon"></div>
							<div class="cabinet__processes--title">
								<h4>НА СВЕДЕНИИ</h4>
								<h3><?= $mixing ?> композиции</h3>
							</div>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="cabinet__board">
							<?php echo do_shortcode('[feed user_id= '.$current_user->ID.' current_time= '.time().']'); ?>
							<!--<article class="cabinet__board__item dropping">
								<div class="cabinet__board__item--head">
									<small>СЕГОДНЯ, 12:30</small>
								</div>
								<span class="cabinet__board__item--percentage">23%</span>
								<div class="cabinet__board__item--title">
									<h3>«<span>Песня №1</span>» в стадии сведения</h3>
								</div>
								<div class="cabinet__board__item--controls">
									<span class="cabinet__board__item--controls--type">СВЕДЕНИЕ</span>
									<a href="#" class="cabinet__board__item--controls--dropbtn">
										<i class="fa fa-angle-down"></i>
									</a>
								</div>
							</article>
							<article class="cabinet__board__item">
								<div class="cabinet__board__item--head">
									<small>СЕГОДНЯ, 12:30</small>
								</div>
								<div class="cabinet__board__item--title">
									<h3>Вы были в разделе «О компании»</h3>
								</div>
							</article>
							<article class="cabinet__board__item dropping">
								<div class="cabinet__board__item--head">
									<small>СЕГОДНЯ, 12:30</small>
								</div>
								<span class="cabinet__board__item--percentage">83%</span>
								<div class="cabinet__board__item--title">
									<h3>Композиция «<span>лето</span>» в стадии мастеринга</h3>
								</div>
								<div class="cabinet__board__item--controls">
									<span class="cabinet__board__item--controls--type">МАСТЕРИНГ</span>
									<a href="#" class="cabinet__board__item--controls--dropbtn">
										<i class="fa fa-angle-down"></i>
									</a>
								</div>

							</article>
							<div class="cabinet__board__item--open">
								<article class="cabinet__board__item from-admin">
									<div class="cabinet__board__item--head">
										<small>СЕГОДНЯ, 12:30</small>
										<small>ОТВЕТ ОТ АДМИНИСТРАТОРА</small>
									</div>
									<div class="cabinet__board__item--comment ">
										<p>До мастеринга внимательно прослушайте материал.
										Во многих музыкальных жанрах вокал является наиболее важным.
										В других стилях это ритм, в некоторых - дистошн и так далее. </p>
										<a href="#" class="cabinet__board__item--comment--reply">ОТВЕТИТЬ</a>
									</div>
								</article>
								<article class="cabinet__board__item from-admin">
									<div class="cabinet__board__item--head">
										<small>СЕГОДНЯ, 12:30</small>
										<small>ОТВЕТ ОТ АДМИНИСТРАТОРА</small>
									</div>
									<div class="cabinet__board__item--comment ">
										<p>До мастеринга внимательно прослушайте материал.
										Во многих музыкальных жанрах вокал является наиболее важным.
										В других стилях это ритм, в некоторых - дистошн и так далее.  </p>
										<textarea name="mes" class="cabinet__board__item--comment--text"></textarea>
										<a href="#" class="cabinet__board__item--comment--reply">ОТПРАВИТЬ</a>
									</div>
								</article>
								<article class="cabinet__board__item  from-user">
									<div class="cabinet__board__item--head">
										<small>СЕГОДНЯ, 12:30</small>
										<small>ОТВЕТ ОТ nikiforof01</small>
									</div>
									<div class="cabinet__board__item--comment">
										<p>До мастеринга внимательно прослушайте материал.
										Во многих музыкальных жанрах вокал является наиболее важным.
										В других стилях это ритм, в некоторых - дистошн и так далее.  </p>
									</div>
								</article>
							</div>-->
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
				<div class="cabinet__forwarding">
					<a href="#" class="cabinet__forwarding--mastering js-song-modal" data-type="mastering">ОТПАРВИТЬ НА МАСТЕРИНГ</a>
					<a href="#" class="cabinet__forwarding--reduction js-song-modal" data-type="mixing">ОТПАРВИТЬ НА СВЕДЕНИЕ</a>
					<a href="#" class="cabinet__forwarding--instructions">Инструкция по подготовке файлов для мастеринга и сведения</a>
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

<!-- Modal -->
<div class="modal fade" id="sendSong" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Отправить песню </h4>
			</div>
			<div class="modal-body">
				<p>Название песни</p>
				<input type="text" name="js-song-name">
				<p>Ссылка на песню</p>
				<input type="text" name="js-song-link">
				<input type="hidden" name="js-song-type">
				<input type="hidden" name="js-song-user" value="<?php echo $current_user->ID; ?>">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger js-send-song">Отправить</button>
			</div>
		</div>
	</div>
</div>

<?php }else{
	print "<script language='Javascript'>document.location.href='/enter' ;</script>";
}  ?>
<? get_footer()?>