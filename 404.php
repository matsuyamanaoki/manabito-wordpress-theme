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
		<h1>404 Not Found</h1>
		<p>お探しのページが見つかりませんでした。</p>
	</main>
	<?php get_sidebar(); ?>
	<nav id="page_top" class="page-top">ページの先頭へ戻る</nav>
</div>


<?php get_footer();
