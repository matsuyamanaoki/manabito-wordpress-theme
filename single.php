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
		?>
				<div class="blog-date">
					公開日：<time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time><br>
					<?php if ( get_the_time( 'Y-m-d' ) !== get_the_modified_date( 'Y-m-d' ) ) : ?>
					更新日：<time datetime="<?php the_modified_date( ' Y-m-d ' ); ?>"><?php the_modified_date( get_option( 'date_format' ) ); ?></time>
					<?php endif; ?>
				</div>
		<?php
				the_content();
			endwhile;
		endif;
		?>
	</main>
	<?php get_sidebar(); ?>
	<nav id="page_top" class="page-top">ページの先頭へ戻る</nav>
</div>
<?php get_footer();
