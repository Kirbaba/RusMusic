<? get_header()?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="page-title-head organizing__head">
		<div class="container-fluid">
			<div class="row">
				<h1><?= the_title(); ?></h1>
			</div>
		</div>		
	</section>
<?php endwhile; ?>
<?php  endif;?>
	<?= do_shortcode('[earnmoney]'); ?>

	<section class="partners">
		<div class="container">
			<div class="row">				
				<h4>НАШИ ПАРТНЕРЫ</h4>

				<?= do_shortcode('[partners]'); ?>
			</div>
		</div>
	</section>
<? get_footer()?>


