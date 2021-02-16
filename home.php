<?php get_header(); ?>
<div class="l-eye-catch">
	<ul id="eye_catch" class="eye-catch">
		<li>
			<img src="<?php echo get_template_directory_uri(); ?>/images/graphic1.png" alt="ペンギンのすみか">
		</li>
		<li>
			<img src="<?php echo get_template_directory_uri(); ?>/images/graphic2.png" alt="ZOO LOGICALにパンダ登場">
		</li>
		<li>
			<img src="<?php echo get_template_directory_uri(); ?>/images/graphic3.png" alt="みんなの来場を待ってるよ！">
		</li>
	</ul>
</div>
<div class="l-contents-wrapper">
	<main>
		<section class="l-section">
			<h2 class="section-title">お知らせ</h2>
			<ol class="topics-list">
				<?php
				if ( have_posts() ) :
					while( have_posts() ) :
						the_post();
				?>
				<li>
					<time class="topics-date" datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time>
					<h3 class="topics-title">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h3>
				</li>
				<?php
					endwhile;
				endif;
				?>
			</ol>
		</section>
	</main>
	<?php get_sidebar(); ?>
	<nav id="page_top" class="page-top">ページの先頭へ戻る</nav>
</div>
<?php get_footer();
