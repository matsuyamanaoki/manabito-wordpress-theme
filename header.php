<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="header-logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php
				if ( has_custom_logo() ) {
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$image          = wp_get_attachment_image_src( $custom_logo_id, 'full' );
					$html           = '<img src="' . $image[0] . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '">';
					echo $html;
				}
				?>
			</a>
		</div>
		<nav class="nav-global">
			<?php
			$args = array(
				'container'      => '',
				'theme_location' => 'global',
				'items_wrap'     => '<ul>%3$s</ul>'
			);
			wp_nav_menu( $args );
			?>
		</nav>
	</header>
