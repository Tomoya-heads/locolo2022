<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover,user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="Wrapper">

		<!-- ヘッダー -->
		<header class="common-header" id="Header">
			<!-- <div class="common-header__inner"> -->
				<!-- *** logo *** -->
				<!-- <?php if(is_front_page()): ?>
					<h1 class="common-header__logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="http://placehold.jp/ffffff/000000/130x50.png?text=Logo" alt="ロゴ">
						</a>
					</h1>
				<?php else: ?>
					<div class="common-header__logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="http://placehold.jp/ffffff/000000/130x50.png?text=Logo" alt="ロゴ">
						</a>
					</div>
				<?php endif; ?>
				<div class="common-header__toggle">
					<span></span>
					<span></span>
					<span></span>
				</div>

				<nav class="common-header__nav">
					<ul class="common-header__menu">
						<li><a href="<?php echo home_url('/about/'); ?>">About</a></li>
						<li><a href="<?php echo home_url('/service/');?>">Service</a></li>
						<li><a href="<?php echo home_url('/members/'); ?>">Members</a></li>
						<li><a href="<?php echo home_url('/company/');?>">Company</a></li>
						<li><a href="<?php echo home_url( '/contact/' ); ?>">Contact</a></li>
					</ul>
				</nav>
			</div> -->
		</header>
		<!-- ////ヘッダー -->

    <!-- コンテンツ -->
    <main class="common-main">
      <?php get_template_part('template-parts/common/page-title'); ?>
      <?php
			//パンくず
			if(!is_front_page()){
				get_template_part('template-parts/common/breadcrumbs');
			}?>
