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
			<a href="index.html">
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
			<ul>
				<li><a href="about.html">動物園について</a></li>
				<li><a href="guide.html">ガイドのご案内</a></li>
				<li><a href="animals.html">人気の動物たち</a></li>
				<li><a href="contact.html">お問い合わせ</a></li>
			</ul>
		</nav>
	</header>
