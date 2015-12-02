<? get_header() ?>

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
			<?php
			$first = new WP_Query(array(
				'posts_per_page' => 1,
				'tax_query' => array(
					array(
						'taxonomy' => 'custnews',
						'field' => 'slug',
						'terms' => 'mainnews'
					)
				)
			));
				while ($first->have_posts()) : $first->the_post(); ?>
			<div class="row">
				<article class="news-page__item--first">
					<div class="news-page__item--first--img">
						<?php  echo get_the_post_thumbnail(get_the_ID(),'full'); ?>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">
						<small class="news__author">Written by <a ><?php the_author() ?></a> on <span><?php the_time('l j F Y') ?></span></small>
						<h3><?= get_the_title(get_the_ID()); ?></h3>
						<p><?php content('50') ?></p>
						<a href="<?= get_permalink(get_the_ID()); ?>" class="news--read">Читать</a>
					</div>
				</article>
			</div>
				<?php endwhile; ?>

<?php
$recent = new WP_Query(array(
	'posts_per_page' => 3,
	'paged' => $_GET['page'],
	'tax_query' => array(
		array(
			'taxonomy' => 'custnews',
			'field' => 'slug',
			'terms' => 'mainnews'
		)
	)
));

while ($recent->have_posts()) : $recent->the_post(); ?>

	<div class="row">
		<article class="news-page__item">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="news-page__item--img">
					<a href="<?= get_permalink(get_the_ID()); ?>">
						<?php  echo get_the_post_thumbnail(get_the_ID(),'full'); ?>
					</a>
				</div>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<div class="news-page__item--description">
					<h3><?= get_the_title(get_the_ID()); ?></h3>
					<small class="news__author">Written by <a ><?php the_author() ?></a> on <span><?php the_time('l j F Y') ?></span></small>
					<p><?php content('50') ?></p>
					<a href="<?= get_permalink(get_the_ID()); ?>" class="news--read">Читать</a>
				</div>
			</div>
		</article>
	</div>

<?php endwhile; ?>
			<?php my_pagenavi($recent); ?>

			<!--<div class="row">
				<article class="news-page__item">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="news-page__item--img">
							<a href="#">
								<img src="<?php bloginfo('template_directory'); ?>/img/miley_cyrus.jpg" alt="">
							</a>
						</div>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<div class="news-page__item--description">
							<h3>MILEY CYRUS & THE FLAMING LIPS "DOOO IT (LIVE & UNCENSORED)"</h3>
							<small class="news__author">Written by <a href="#">Eric Snorker</a> on <span>Sunday 25 December 2016.</span></small>
							<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, 
								lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. 
								Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.  
								Aenean sollicitudin, lorem quis bibendum sed odio sit.</p>
								<a href="#" class="news--read">Читать</a>
						</div>
					</div>
				</article>
			</div>
			<div class="row">
				<article class="news-page__item">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="news-page__item--img">
							<a href="#">
								<img src="<?php bloginfo('template_directory'); ?>/img/miley_cyrus.jpg" alt="">
							</a>
						</div>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<div class="news-page__item--description">
							<h3>MILEY CYRUS & THE FLAMING LIPS "DOOO IT (LIVE & UNCENSORED)"</h3>
							<small class="news__author">Written by <a href="#">Eric Snorker</a> on <span>Sunday 25 December 2016.</span></small>
							<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, 
								lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. 
								Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.  
								Aenean sollicitudin, lorem quis bibendum sed odio sit.</p>
								<a href="#" class="news--read">Читать</a>
						</div>
					</div>
				</article>
			</div>
			<div class="row">
				<article class="news-page__item">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="news-page__item--img">
							<a href="#">
								<img src="<?php bloginfo('template_directory'); ?>/img/miley_cyrus.jpg" alt="">
							</a>
						</div>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<div class="news-page__item--description">
							<h3>MILEY CYRUS & THE FLAMING LIPS "DOOO IT (LIVE & UNCENSORED)"</h3>
							<small class="news__author">Written by <a href="#">Eric Snorker</a> on <span>Sunday 25 December 2016.</span></small>
							<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, 
								lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. 
								Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.  
								Aenean sollicitudin, lorem quis bibendum sed odio sit.</p>
								<a href="#" class="news--read">Читать</a>
						</div>
					</div>
				</article>
			</div> -->
			<!--<ul class="pagination">
				<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/LEFT-ARROW.png" alt=""></a></li>
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/RIGHT-ARROW.png" alt=""></a></li>
			</ul>-->
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
<? get_footer() ?>