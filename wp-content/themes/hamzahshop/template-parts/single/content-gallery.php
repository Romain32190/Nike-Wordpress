<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HamzahShop
 */

?>
<div class="single-blog no-margin">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	 <?php
	// If not a single post, highlight the gallery.
	if ( get_post_gallery() ) :
	echo '<div class="entry-gallery">';
		echo get_post_gallery();
	echo '</div>';
	endif;
	?>	
    <div class="postinfo-wrapper">
        <div class="post-date">
        	<span class="day"><?php echo get_the_date('d'); ?></span><span class="month"><?php echo get_the_date('M'); ?></span>
        </div>
        <div class="post-info">
       
        <?php if ( 'post' === get_post_type() ) : ?>
        <div class="entry-meta">
        	<?php hamzahshop_posted_on();?>
        </div>
        <?php endif;?>
        </div>
          <div class="entry-summary">
				<?php
                /* translators: %s: Name of current post */
                echo strip_shortcodes( get_the_content() );
                
                wp_link_pages( array(
                    'before'      => '<div class="page-links">' . __( 'Pages:', 'hamzahshop' ),
                    'after'       => '</div>',
                    'link_before' => '<span class="page-number">',
                    'link_after'  => '</span>',
                ) );
                ?>
          </div>
  
    
    <?php if ( is_single() ) : ?>
    	<div class="tag_clould">
		<?php hamzahshop_entry_footer(); ?>
        </div>
	<?php endif; ?>
   
  
  
    </div><!-- #post-## -->
 <div class="row">

  
    
    <div class="single-prev-next col-md-5 pull-right">
        <?php previous_post_link('%link', '<i class="fa fa-long-arrow-left"></i> '.__('Prev Article','hamzahshop')); ?>
        <?php next_post_link('%link', __('Next Article','hamzahshop').' <i class="fa fa-long-arrow-right"></i>'); ?>
    </div>
 </div>
 
</article><!-- #post-## -->
</div>


