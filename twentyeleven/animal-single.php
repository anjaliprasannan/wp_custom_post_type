<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<?php $meta_fields = get_post_custom(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
        <?php echo get_the_term_list( $post->ID, 'habitat', 'Habitat: ', ', ' ); ?><br>
        <?php echo get_the_term_list( $post->ID, 'class', 'Class: ', ', ' ); ?><br>
        <?php echo get_the_term_list( $post->ID, 'diet', 'Diet: ', ', ' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
    <?php 
                if ( has_post_thumbnail() ){
                    
                    the_post_thumbnail('medium', array( 'class' => 'alignright')); 
                              }
            ?>
		<?php the_content(); ?>
        <?php if($meta_fields['habitat'][0] != '') { ?>
        <h2> Habitat </h2>
        <?php print($meta_fields['habitat'][0]); ?>
        <?php }?>
        <?php if($meta_fields['diet'][0] != '') { ?>
        <h2> Diet </h2>
        <?php print($meta_fields['diet'][0]); ?>
        <?php }?>
		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>',
				'after'  => '</div>',
			)
		);
		?>
        
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
