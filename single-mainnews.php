<? get_header()?>
	<section class="news-page">
		<div class="container">
			<div class="row">
				<header class="news-page--head">						
					<h3><span>Новости</span></h3>
					<div class="news-page--social">
						<a href="#"><i class="fa fa-vk"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-odnoklassniki"></i></a>
					</div>
				</header>
			</div>
			<div class="row">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="news-page__item--first">					
					<?php if ( has_post_thumbnail() ): ?>
					<div class="news-page__item--first--img">
						<?php the_post_thumbnail('full', array()); ?>	
					</div>
					<?php  endif;?>	

					<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">
						<small class="news__author">Written by <a ><?php the_author() ?></a> on <span><?php the_time('l j F Y') ?></span></small>
						<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
							<div class="news__post--mediabox">
								<h4>Proin vel nulla</h4>
								<p>gravida nibh vel velit auctor aliquet.</p>
								<a href="#"><i class="fa fa-heart-o"></i>26</a>
							</div>
					</div>
				</article>
			</div>
		</div>

		<?php endwhile; ?>
		<?php  endif;?>	
	</section>

	

<? get_footer()?>