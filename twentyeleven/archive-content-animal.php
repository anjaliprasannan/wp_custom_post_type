<?php
/**
 * Template for displaying archive animal content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		</header><!-- .entry-header -->

		<div class="entry-summary">
        <?php 
                if ( has_post_thumbnail() ){
                    echo '<a href="' . get_permalink() . '">' ;
                    the_post_thumbnail('thumbnail', array( 'class' => 'alignleft')); 
                    echo '</a>';                }
            ?>
			<?php the_excerpt(); ?>
           
		</div>

		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post-<?php the_ID(); ?> -->
