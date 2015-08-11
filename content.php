<?php
/**
 * @package pacify
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="post-wrapper">
<div class="left-content">
<?php
			// check if the post has a Post Thumbnail assigned to it.
if ( has_post_thumbnail() ) {
	the_post_thumbnail('thumbnail');
} 
?>
</div> <!-- left-content-->
<div class="right-content">
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		<?php get_post_custom_keys(); ?>
		<br><br>
		
		<?php
		$args = array(
		'meta_key' => 'Location',
		);
		
		echo $args;
		
		?>
<?php the_meta(); ?>
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
		
			<?php pacify_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
	
		<?php
			/* translators: %s: Name of current post */
			// check if the post has a Post Thumbnail assigned to it.
/*if ( has_post_thumbnail() ) {
	the_post_thumbnail('thumbnail');
} */
			the_excerpt( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'pacify' ), 
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'pacify' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //pacify_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	
	</div> <!-- right-content -->
	
	</div> <!-- wrapper -->
</article><!-- #post-## -->


