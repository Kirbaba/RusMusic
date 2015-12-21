<? get_header()?>
	<section class="page-title-head team__head">
		<div class="container-fluid">
			<div class="row">
				<h1>Альбомы</h1>
			</div>
		</div>		
	</section>

	<section class="team__wrapper">
		<div class="container">
			<div class="row">
				<header class="team__wrapper--head">					
				</header>
			</div>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php if ( has_post_thumbnail() ): ?>
			<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
				<div class="team-carousel__item">
					<div class="team-carousel__item--img">
						<?php the_post_thumbnail('full', array()); ?>							
					</div>
					<div class="team-carousel__item--name">											
						<div class="team-carousel__item--name--text">
							<h3><?php the_title(); ?></h3>
							<p><?= get_post_meta(get_the_ID(), 'year', 1) ?></p>
							<p><?= get_post_meta(get_the_ID(), 'label', 1) ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
				<article class="team__bio">
					<?php the_content(); ?>
				</article>
			</div>
			
		</div>
		
		<?php  endif;?>	
		<?php endwhile; ?>
		<?php  endif;?>	
	</section>
<? get_footer()?>