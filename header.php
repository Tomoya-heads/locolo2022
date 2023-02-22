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
			<div class="common-header__inner">
				<!-- *** logo *** -->
				<?php if(is_front_page()): ?>
					<h1 class="common-header__logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/txt_locolo-white.svg" alt="ロゴ">
						</a>
					</h1>
				<?php else: ?>
					<div class="common-header__logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/txt_locolo-white.svg" alt="ロゴ">
						</a>
					</div>
				<?php endif; ?>
				<div class="common-header__toggle">
					<span></span>
					<span></span>
					<span></span>
				</div>

				<nav class="common-header__nav">
					<ul class="common-header__list">
						<li class="common-header__item"><a href="<?php if(!is_front_page() ||  !is_home()) {echo esc_url( home_url( '/' ) ); }?>#about">ABOUT</a></li>
						<li class="common-header__item"><a href="<?php if(!is_front_page() ||  !is_home()) {echo esc_url( home_url( '/' ) ); }?>#howtofun">HOW TO FUN</a></li>
						<li class="common-header__item"><a href="<?php if(!is_front_page() ||  !is_home()) {echo esc_url( home_url( '/' ) ); }?>#map">MAP</a></li>
						<li class="common-header__item"><a href="<?php if(!is_front_page() ||  !is_home()) {echo esc_url( home_url( '/' ) ); }?>#price">PRICE</a></li>
						<li class="common-header__item"><a href="<?php if(!is_front_page() ||  !is_home()) {echo esc_url( home_url( '/' ) ); }?>#location">LOCATION</a></li>
						<!-- <li class="common-header__item"><a href="https://locolo2334.stores.jp/" target="_blank">GOODS</a></li> -->
						<li class="common-header__item"><a href="<?php if(!is_front_page() ||  !is_home()) {echo esc_url( home_url( '/' ) ); }?>#faq">FAQ</a></li>
					</ul>
					<div class="common-header__sns tabsp-only">
						<ul class="common-header__sns-list">
						<!-- Twitter -->
						<li class="common-header__sns-item">
							<a href="//twitter.com/locolo2334" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/icn_twitter-white.svg" alt="ロゴ"></a>
						</li>
						<!-- LINE -->
						<!-- <li class="common-header__sns-item">
							<a href="#" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/icn_line-white.svg" alt="ロゴ"></a>
						</li> -->
						<!-- instagram -->
						<li class="common-header__sns-item">
							<a href="//www.instagram.com/locolo2334" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/icn_instagram-white.svg" alt="ロゴ"></a>
						</li>
						<!-- YouTube -->
						<li class="common-header__sns-item">
							<a href="//www.youtube.com/channel/UCTOp6AMiEcsWlXDrbxabK1w" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/icn_youtube-white.svg" alt="ロゴ"></a>
						</li>
						</ul>
					</div>
				</nav>

				<div class="common-header__sns pc-only">
					<ul class="common-header__sns-list">
						<!-- Twitter -->
						<li class="common-header__sns-item">
							<a href="//twitter.com/locolo2334" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/icn_twitter-white.svg" alt="ロゴ"></a>
						</li>
						<!-- LINE -->
						<!-- <li class="common-header__sns-item">
							<a href="＃" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/icn_line-white.svg"></a>
						</li> -->
						<!-- instagram -->
						<li class="common-header__sns-item">
							<a href="//www.instagram.com/locolo2334" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/icn_instagram-white.svg"></a>
						</li>
						<!-- YouTube -->
						<li class="common-header__sns-item">
							<a href="//www.youtube.com/channel/UCTOp6AMiEcsWlXDrbxabK1w" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/icn_youtube-white.svg"></a>
						</li>
					</ul>
				</div>
			</div>
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
