<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site-wrapper">
	<!-- Top Bar -->
	<div class="top-bar">
		<div class="site-container">
			<div class="top-bar-date">
				<span><?php echo esc_html( wp_date( 'l, F j, Y' ) ); ?></span>
				<span>•</span>
				<span>Dhaka Time: <?php echo esc_html( wp_date( 'g:i A' ) ); ?></span>
			</div>
			<div class="top-bar-edition">
				<span>City Edition</span>
			</div>
		</div>
	</div>

	<!-- Main Header -->
	<header class="site-header" role="banner">
		<div class="header-branding-area">
			<div class="site-container">
				<div class="site-branding">
					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Daily City Desk</a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Daily City Desk</a></p>
					<?php endif; ?>
					<p class="site-tagline"><?php bloginfo( 'description' ); ?></p>
				</div>
				<div class="header-badge">
					<strong>LOCAL NEWSROOM</strong>
					<span>Verified Practice Desk</span>
				</div>
			</div>
		</div>

		<!-- Navigation -->
		<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'city-desk' ); ?>">
			<div class="site-container">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_class'     => 'nav-menu',
					'container'      => false,
					'fallback_cb'    => function() {
						echo '<ul class="nav-menu">';
						echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
						echo '<li><a href="' . esc_url( home_url( '/category/national/' ) ) . '">National</a></li>';
						echo '<li><a href="' . esc_url( home_url( '/category/sports/' ) ) . '">Sports</a></li>';
						echo '<li><a href="' . esc_url( home_url( '/media/' ) ) . '">Media</a></li>';
						echo '<li><a href="' . esc_url( home_url( '/about/' ) ) . '">About</a></li>';
						echo '</ul>';
					},
				) );
				?>
			</div>
		</nav>
	</header>

	<?php if ( is_front_page() || is_home() ) : ?>
		<!-- Breaking News Section -->
		<div class="breaking-news-section" role="region" aria-label="Breaking News">
			<div class="site-container">
				<div class="breaking-news-container">
					<div class="breaking-badge">Breaking News</div>
					<div class="breaking-ticker">
						<div class="breaking-items-list">
							<span class="breaking-item">City Desk reports a new community update on municipal transit improvements.</span>
							<span class="breaking-item">Local youth teams begin a new training session across district sports facilities.</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
