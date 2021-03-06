<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
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
<?php
	/* Assign variables with custom fields */
	$postid = get_the_ID();
	$location = get_post_meta( $postid , "Location", true); 
	$date = get_post_meta( $postid , "Date", true); 
	$tickets = get_post_meta( $postid , "Buy Tickets", true); 
	$venue  = get_post_meta( $postid , "Venue", true); 
	$page_url = esc_url( get_permalink() );
?>
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta"> 
			<p class="location"><span class="Span_Date"> <?php echo $date ?> </span><br>
			<span class="Span_Venue"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $venue ?> </span> <br>
			<span class="Span_Location"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $location ?> </span></p> <!-- Style This -->
			
			
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->


		<footer class="entry-footer">
	<p><a href="<?php echo $tickets ?>"><input type="button" id="Button_Ticket" value="Buy Tickets" class="Button_Tickets"></a><!-- Style This -->
			<a href="<?php echo $page_url ?>"><input type="button" id="Button_Information" value="More Information" class="Button_Information"></a></p>
	</footer><!-- .entry-footer -->
	</div> <!-- right-content -->
	
	</div> <!-- wrapper -->
</article><!-- #post-## -->
