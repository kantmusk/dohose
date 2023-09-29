<!DOCTYPE html>
<html lang="en-EN">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700;900&amp;display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body>
	<div class="wrapper">
		<div class="content">
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="header-top">
								<div class="logo-box">
									<a class="logo" href="/">
										<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
									</a>
								</div>
								<div class="header-top__right">
									<div class="header-top__city"><a href="#">Москва</a>
										<ul>
											<li>Москва</li>
											<li>Псков</li>
										</ul>
									</div>
									<div class="header-top__email"><a href="mailto:<?php the_field('электронная_почта', 'option'); ?>"><?php the_field('электронная_почта', 'option'); ?></a>
									</div>
									<div class="header-top__phone"><a href="tel:<?php the_field('телефон', 'option'); ?>"><?php the_field('телефон', 'option'); ?></a>
									</div>
								</div>
								<a class="burger" href="#mobile-panel" data-modal="mobile-panel"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<?php 
						    wp_nav_menu( array(
						        'theme_location'  => '',
						        'menu'            => 'Главное меню', 
						        'container'       => '', 
						        'container_class' => '', 
						        'container_id'    => '',
						        'menu_class'      => 'main-menu', 
						        'menu_id'         => '',
						        'echo'            => true,
						        'fallback_cb'     => 'wp_page_menu',
						        'before'          => '',
						        'after'           => '',
						        'link_before'     => '',
						        'link_after'      => '',
						        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						        'depth'           => 0,
						        'walker'          => '',
						        ) );    
						    ?>
						</div>
					</div>
				</div>
			</div>
