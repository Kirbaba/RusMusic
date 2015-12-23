<?php get_header()?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php $src =  wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' ); ?>
	<section class="page-title-head single-training__head" style="background-image: url('<?= $src[0]; ?>')">
		<div class="container-fluid">
			<div class="row">
				<div class="becomeastar__triangle"></div>
				<header class="single-training__head--text">						
					<h2><?= the_title(); ?></h2>
				</header>
			</div>
		</div>		
	</section>

	<section class="single-training--info">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
					<p><?= get_post_meta(get_the_ID(), 'description', 1) ?></p>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
					<a href="<?= get_site_url() ?>/signuptraining/?id=<?= get_the_ID() ?>" class="single-training--info--but">Записаться</a>
				</div>
			</div>
		</div>
	</section>

	<section class="single-training__content">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">

					<p><?= the_content(); ?></p>
					<div class="becomeastar__questionnaire--but">
  						<a href="<?= get_site_url() ?>/signuptraining/?id=<?= get_the_ID() ?>" class="single-training--button">Записаться</a>
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

<?php endwhile; ?>
<?php  endif;?>
<? get_footer()?>