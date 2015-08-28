<?php
/**
 * @package pacify
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<?php if ( function_exists('yoast_breadcrumb')){  yoast_breadcrumb('<p id="breadcrumbs">','</p>');  }?>
		<?php the_title( '<center><h1 class="entry-title">', '</h1></center>' ); ?>

<!-- **Removed Because Don't Need Information Regarding Post Dates 
		<div class="entry-meta">
			<?php pacify_posted_on(); ?>
		</div>
	</header> --> 
	

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'pacify' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php pacify_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
