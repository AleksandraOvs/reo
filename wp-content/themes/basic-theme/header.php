<!DOCTYPE html>
<html <?php language_attributes(); ?> itemscope itemtype="https://schema.org/Organization">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>

	<link rel="icon" href="images/favicons/favicon.ico"> <!-- 32×32 -->
	<link rel="icon" href="images/favicons/favicon.svg" type="image/svg+xml">
	<link rel="apple-touch-icon" href="images/favicons/favicon.png"> <!-- 180×180 -->
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div class="show-temp"><?php echo get_current_template(); ?> </div>       

	<?php wp_body_open(); ?>
	<div class="site-container">
		<header class="header">

			<div href="<?php echo site_url() ?>" class="header__top">
				<div class="fixed-container">
					<div class="header__top__left">
						<a href="/" class="site-header__logo">
							<?php
							$header_logo = get_theme_mod('header_logo');
							$img = wp_get_attachment_image_src($header_logo, 'full');
							if ($img) : echo '<img src="' . $img[0] . '" alt="">';
							endif;
							?>
						</a>

						<div class="header__top__left__content">
							<h1><?php echo get_bloginfo('name') ?></h1>
							<p><?php echo get_bloginfo('description') ?></p>
						</div>


						
					</div>

					<div class="header__top__right">
						<div class="header__top__right__contacts">
							<?php
							if (carbon_get_theme_option('crb_phone') && $phone_link = carbon_get_theme_option('crb_phone_link')) {
							?>
								<div class="header__top__right__phone">
									<a class="header__top__right__phone__link" href="<?php echo $phone_link ?>"><?php echo carbon_get_theme_option('crb_phone'); ?></a>
								</div>
							<?php }
							?>
							<?php
							if ($messengers = carbon_get_theme_option('messengers')) {
							?>
								<ul class="header__menu__messengers flex align-center">
									<?php
									foreach ($messengers as $messenger) {
									?>
										<li class="social__item">
											<a href="<?php echo $messenger['crb_mes_link']; ?>" class="social__link">
												<?php
												$thumb_contact = wp_get_attachment_image_url($messenger['crb_mes_image'], 'full');
												?>
												<img class="social__img" width="25" height="25" src="<?php echo $thumb_contact; ?>" alt="<?php echo $messenger['crb_mes_name']; ?>">
											</a>
										</li>
									<?php
									}
									?>
								</ul>
							<?php
							}
							?>
							<?php
							if ($button_link = carbon_get_theme_option('crb_but_link')) {
							?>
								<a href="<?php echo carbon_get_theme_option('crb_but_link') ?>" data-fancybox class="button fill"><?php echo carbon_get_theme_option('crb_but_text') ?></a>
							<?php
							}
							?>
						</div>

						<div class="header__top__right__menu">

							<?php
							$main_menu = wp_nav_menu(
								array(
									'theme_location' => 'menu-header',
									'container' => 'nav',
									'menu_class' => 'header__menu',
								)
							);
							?>

						</div>





					</div>

					<button class="header__burger burger js-toggle-menu" type="button">
						<span class="burger__line"></span>
						<span class="sr-only">open/close menu</span>
					</button>

				</div>
			</div>


		</header>

		<div class="mobile__menu__inner">

			<?php
			$main_menu = wp_nav_menu(
				array(
					'theme_location' => 'menu-header',
					'container' => 'nav',
					'menu_class' => 'mobile__menu',
				)
			);
			?>

<div class="mobile_menu__contacts">
							<?php
							if (carbon_get_theme_option('crb_phone') && $phone_link = carbon_get_theme_option('crb_phone_link')) {
							?>
								<div class="header__top__right__phone">
									<a class="header__top__right__phone__link" href="<?php echo $phone_link ?>"><?php echo carbon_get_theme_option('crb_phone'); ?></a>
								</div>
							<?php }
							?>
							<?php
							if ($messengers = carbon_get_theme_option('messengers')) {
							?>
								<ul class="header__menu__messengers flex align-center">
									<?php
									foreach ($messengers as $messenger) {
									?>
										<li class="social__item">
											<a href="<?php echo $messenger['crb_mes_link']; ?>" class="social__link">
												<?php
												$thumb_contact = wp_get_attachment_image_url($messenger['crb_mes_image'], 'full');
												?>
												<img class="social__img" width="25" height="25" src="<?php echo $thumb_contact; ?>" alt="<?php echo $messenger['crb_mes_name']; ?>">
											</a>
										</li>
									<?php
									}
									?>
								</ul>
							<?php
							}
							?>
							<?php
							if ($button_link = carbon_get_theme_option('crb_but_link')) {
							?>
								<a href="<?php echo carbon_get_theme_option('crb_but_link') ?>" data-fancybox class="button fill"><?php echo carbon_get_theme_option('crb_but_text') ?></a>
							<?php
							}
							?>
						</div>

			<?php if (is_active_sidebar('mobmenu-widget')) { ?>
				<ul id="mobile-widget">
					<?php dynamic_sidebar('mobmenu-widget'); ?>
				</ul>
			<?php } ?>

		</div>


		<main class="main">