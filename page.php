<?php get_header(); ?>

<?php
if ( shortcode_exists( 'wp-structuring-markup-breadcrumb' ) ) {
	echo '<nav class="breadcrumb">';
	echo do_shortcode( '[wp-structuring-markup-breadcrumb]' );
	echo '</nav>';
}
?>
<div class="l-contents-wrapper">
	<main>
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				the_title( '<h1>', '</h1>' );
				the_content();
			endwhile;
		endif;
		?>
	</main>
	<?php get_sidebar(); ?>
	<nav id="page_top" class="page-top">ページの先頭へ戻る</nav>
</div>
<?php get_footer();
