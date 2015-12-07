<? get_header()?>
	<section class="page-title-head company-page--head">
		<div class="container-fluid">
			<div class="row">
				<h1>10 Secret Dj Mixing Tips</h1>
			</div>
		</div>		
	</section>

	<section class="company-page__content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="container">
			<div class="row">				
				<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">
					<div class="company-page__content--topline">
						<a href="#nowhere"><i class="fa fa-eye"></i>20</a>
						<a href="#nowhere"><i class="fa fa-heart-o"></i>10</a>
						<a href="#nowhere"><i class="fa fa-comments-o"></i>4</a>
						<a href="#nowhere"><i class="fa fa-share-alt"></i>5</a>
					</div>
					<div class="company-page__content--text">
						<?php the_content(); ?>
					</div>
					<ul class="company-page__content--linksline">
						<li><a href="#">Наши проекты</a></li>
						<li><a href="#">Наша команда</a></li>
						<li><a href="#">Обучение</a></li>
						<li><a href="#">Контакты</a></li>
					</ul>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">					
					<article class="company-page--quote">
						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">
								<h2><i class="fa fa-quote-left"></i> Vestibulum massa pellentes est dapibus consequat.</h2>
								<p>Suspendisse justo dui, efficitur eu tellus non, varius facilisis velit.
								 Mauris a ligula at metus tempus mollis nec nec mauris commodo orci facilisis et. </p>
							</div>
						</div>
					</article>
				</div>				
			</div>
		</div>
		<?php endwhile; ?>
		<?php  endif;?>	
		<div class="container-fluid">		
			<div class="row">			
				<article class="company-page--bottom--text">
					
						<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">								
							<p>Sed turpis tellus, euismod vitae purus sit amet, varius elementum augue. 
								Donec sed nunc accumsan, ultrices felis sit amet, lobortis nisl. 
								Nulla bibendum ut erat eu commodo. Vivamus nulla quam, finibus vitae consectetur pellentesque, 
								euismod vitae massa. Sed vitae bibendum lacus, vitae sagittis est. 
								Pellentesque lacinia urna vitae mi porta scelerisque. 
								In hac habitasse platea dictumst. Etiam at odio vehicula turpis bibendu. </p>
						</div>
			
				</article>
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