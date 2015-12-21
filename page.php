<?php get_header()?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="page-title-head company-page--head">
		<div class="container-fluid">
			<div class="row">
				<h1><?= the_title(); ?></h1>
			</div>
		</div>		
	</section>
	<section class="company-page__content">
		<div class="container">
			<div class="row">				
				<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">
					<div class="company-page__content--topline"></div>
					<div class="company-page__content--text">
						<?php the_content(); ?>
						<?php
						if(is_page('sitemap')){
							wp_nav_menu( array(
									'theme_location'    => 'sitemap',
									'depth'             => 1,
									'menu_class'        => 'nav'
							));
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; ?>
<?php  endif;?>
	<section class="partners">
		<div class="container">
			<div class="row">				
				<h4>НАШИ ПАРТНЕРЫ</h4>
				<?= do_shortcode('[partners]'); ?>
			</div>
		</div>
	</section>
<?php get_footer()?>