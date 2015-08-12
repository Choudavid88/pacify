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
		<!--<h1 class="entry-title"><?php the_title(); ?></h1>-->
<?php
	/* Assign variables with custom fields */
	$postid = get_the_ID();
	$location = get_post_meta( $postid , "Location", true); 
	$date = get_post_meta( $postid , "Date", true); 
	$tickets = get_post_meta( $postid , "Buy Tickets", true); 
?>
<!--<?php echo $date ?>
<?php the_meta(); ?>-->
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta"> <br />
			<p><span class="Span_Location"> <?php echo $location ?> </span></p> <!-- Style This -->
			<p><span class="Span_Tickets"><a href="<?php echo $tickets ?>"> Buy Tickets </a> </span></p><!-- Style This -->
			
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
	
		<?php
			
			the_excerpt( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'pacify' ), 
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>
<!--
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'pacify' ),
				'after'  => '</div>',
			) );
		?>-->
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //pacify_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	
	</div> <!-- right-content -->
	
	</div> <!-- wrapper -->
</article><!-- #post-## -->


