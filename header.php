<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaOWKyamSxMTXclSDFmJ2N4Am20PCTD6I&sensor=FALSE">
    </script>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>	
	<div class="topline-soc">
		<div class="container">
			<div class="row">
				<div class="skew-wrap">
					<div class="topline-soc--logobord"></div>
					<div class="topline-soc--but">
						<a href="#"><i class="fa fa-vk"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-odnoklassniki"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<header class="header">
		<div class="container">	
			<div class="row">
				<div class="skew-wrap">		
					<div class="header__navigation">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p0">
							<a href="/" class="header__navigation--logo">
								<span><b>R</b></span>
								<h3>RUSMUSIC</h3>
							</a>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-6 col-xs-12 p0">
							<div class="header__navigation--menu">								
								<div class="navbar-header">
									<a href="#nowhere" class="hamburger-slim" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"></a>
									<div class="navbar-brand">
										
									</div>     		      
								</div>
								
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<?php
									wp_nav_menu( array(
											'theme_location'    => 'primary',
											'depth'             => 2,
											'menu_class'        => 'nav navbar-nav',
											'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
											'walker'            => new wp_bootstrap_navwalker())
									);
									?>
									<div class="header__account">
										<a href="#" class="header__navigation--menu--account"><span>регистрация</span></a>
										<a href="#" class="header__navigation--menu--account"><span>войти</span></a>
									</div>
									<div class="header__search">
										<input type="text" name="search--input" class="header__search--input">
										<a href="#" class="header__search--butt"><i class="fa fa-search"></i></a>
									</div>	

								</div><!-- /.navbar-collapse -->
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>	
	</header>