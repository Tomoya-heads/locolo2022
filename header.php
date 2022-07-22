<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover,user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Google Tag Manager -->
	<script>
	(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-58ZG3DM');
	</script>
	<!-- End Google Tag Manager -->

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-58ZG3DM"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
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
