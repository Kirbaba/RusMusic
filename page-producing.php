<? get_header()?>
	<section class="page-title-head producing--head">
		<div class="container-fluid">
			<div class="row">
				<h1>Музыкальное <br> продюсирование</h1>
			</div>
		</div>		
	</section>

	<section class="company-page__content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="container">
			<div class="row">				
				<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">				
					<div class="company-page__content--text">
						<?php the_content(); ?>
					</div>
				</div>				
			</div>
		</div>
		<?php endwhile; ?>
		<?php  endif;?>		
	</section>

	<section class="producing__artists">
		<div class="container">
			<div class="row">
				<h2>Артисты</h2>
				<div class="passed-events--head"></div>

				<div class="producing-carousel">
					<div class="producing-carousel__item">
						<div class="producing-carousel__item--wrap">
							<a href="#" class="artist--link">
								<img src="<?php bloginfo('template_directory'); ?>/img/lorac.jpg" alt="">
							</a>
							<a href="#" class="artist--link">
								<img src="<?php bloginfo('template_directory'); ?>/img/lorac.jpg" alt="">
							</a>
							<a href="#" class="artist--link">
								<img src="<?php bloginfo('template_directory'); ?>/img/lorac.jpg" alt="">
							</a>
						</div>
					</div>
					<div class="producing-carousel__item">
						<div class="producing-carousel__item--wrap">
							<a href="#" class="artist--link">
								<img src="<?php bloginfo('template_directory'); ?>/img/lorac.jpg" alt="">
							</a>
							<a href="#" class="artist--link">
								<img src="<?php bloginfo('template_directory'); ?>/img/lorac.jpg" alt="">
							</a>
							<a href="#" class="artist--link">
								<img src="<?php bloginfo('template_directory'); ?>/img/lorac.jpg" alt="">
							</a>
						</div>
					</div>
					<div class="producing-carousel__item">
						<div class="producing-carousel__item--wrap">
							<a href="#" class="artist--link">
								<img src="<?php bloginfo('template_directory'); ?>/img/lorac.jpg" alt="">
							</a>
							<a href="#" class="artist--link">
								<img src="<?php bloginfo('template_directory'); ?>/img/lorac.jpg" alt="">
							</a>
							<a href="#" class="artist--link">
								<img src="<?php bloginfo('template_directory'); ?>/img/lorac.jpg" alt="">
							</a>
						</div>
					</div>
					<div class="producing-carousel__item">
						<div class="producing-carousel__item--wrap">
							<a href="#" class="artist--link">
								<img src="<?php bloginfo('template_directory'); ?>/img/lorac.jpg" alt="">
							</a>
							<a href="#" class="artist--link">
								<img src="<?php bloginfo('template_directory'); ?>/img/lorac.jpg" alt="">
							</a>
							<a href="#" class="artist--link">
								<img src="<?php bloginfo('template_directory'); ?>/img/lorac.jpg" alt="">
							</a>
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
<? get_footer()?>