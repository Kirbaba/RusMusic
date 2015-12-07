<? get_header() ?>

	<section class="page-title-head team__head">
		<div class="container-fluid">
			<div class="row">
				<h1>Команда</h1>
			</div>
		</div>		
	</section>

	<section class="team__wrapper">
		<div class="container">
			<div class="row">
				<header class="team__wrapper--head">					
				</header>
			</div>
			<div class="row">
				<div class="team-carousel">
					<?= do_shortcode('[team]'); ?>
					<!--<div class="team-carousel__item">
						<div class="team-carousel__item--img">
							<img src="<?php bloginfo('template_directory'); ?>/img/card1.jpg" alt="">							
						</div>
						<div class="team-carousel__item--name">	
						<a href="#" class="team-carousel__item--open"><i class="fa fa-search"></i></a>						
							<div class="team-carousel__item--name--text">
								<h3>Дмитрий Медведев</h3>
								<p>Prime Minister</p>
							</div>
						</div>
					</div>
					<div class="team-carousel__item">
						<div class="team-carousel__item--img">
							<img src="<?php bloginfo('template_directory'); ?>/img/card1.jpg" alt="">
						</div>
						<div class="team-carousel__item--name">
							<a href="#" class="team-carousel__item--open"><i class="fa fa-search"></i></a>
							<div class="team-carousel__item--name--text">
								<h3>Дмитрий Медведев</h3>
								<p>По связям с общественностью</p>
							</div>
						</div>
					</div>
					<div class="team-carousel__item">
						<div class="team-carousel__item--img">
							<img src="<?php bloginfo('template_directory'); ?>/img/card1.jpg" alt="">
						</div>
						<div class="team-carousel__item--name">
							<a href="#" class="team-carousel__item--open"><i class="fa fa-search"></i></a>
							<div class="team-carousel__item--name--text">
								<h3>Дмитрий Медведев</h3>
								<p>По связям с общественностью</p>
							</div>
						</div>
					</div>
					<div class="team-carousel__item">
						<div class="team-carousel__item--img">
							<img src="<?php bloginfo('template_directory'); ?>/img/card1.jpg" alt="">
						</div>
						<div class="team-carousel__item--name">
							<a href="#" class="team-carousel__item--open"><i class="fa fa-search"></i></a>
							<div class="team-carousel__item--name--text">
								<h3>Дмитрий Медведев</h3>
								<p>По связям с общественностью</p>
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

<? get_footer() ?>