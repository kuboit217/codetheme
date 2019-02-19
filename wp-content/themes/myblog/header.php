<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/libs/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/responsive.css">
		<?php wp_head(); ?>
	</head>
	<body>
		<div class="wallpaper">
			<header>
				<div class="main-header">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-3">
								<div class="logo">
									<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory') ?>/images/logo.png" alt="Blog Huy kira"></a>
									<h1><?php bloginfo('name'); ?></h1>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-9">
								<div class="banner">
									<a href="#"><img src="<?php bloginfo('template_directory') ?>/images/banner.jpg" alt=""></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="main-nav">
					<div class="container">
						<div class="menu-header">
							<ul>
								<li class="active"><a href="#">Trang chủ</a></li>
								<li><a href="#">Giới thiệu</a></li>
								<li><a href="#">Học HTML</a></li>
								<li><a href="#">Học CSS</a></li>
								<li>
									<a href="#">Học Jquery</a>
									<ul>
										<li><a href="#">Học VueJS</a></li>
										<li><a href="#">Học AngularJs</a></li>
										<li><a href="#">Học ReactJS</a></li>
									</ul>
								</li>
								<li><a href="#">Học Wordpress</a></li>
								<li><a href="#">Học ReactJS</a></li>
								<li><a href="#">Liên hệ</a></li>
								<div class="clear"></div>
							</ul>
						</div>
					</div>
				</div>
			</header>