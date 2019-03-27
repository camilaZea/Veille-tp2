<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( ! twentynineteen_can_show_post_thumbnail() ) : ?>
	<header class="entry-header">
		<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
	</header>
	<?php endif; ?>

	<div class="entry-content">
		
		<h4>Nombres d'heures : <?php
		the_field('heures'); 
		?> h</h4>

		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
				 
			)
		);
		

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
				'after'  => '</div>',
			)
		);
		?>
		<h4>Le professeur(s)  :  <?php the_field('professeur'); ?></h4>
		
		
		<?php
			
				

			$image1 = get_field('images_projets');
			$image2 = get_field('images_projets_2');
			$image3 = get_field('images_projets_3');


			$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

		?>
		<h4>Projets : </h4>
		<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image( $image1, $size ); ?></a>	
		<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image( $image2, $size ); ?></a>	
		<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image( $image3, $size ); ?></a>	
		<?php

			


		?>
		
				
	</div><!-- .entry-content -->
		
		
	<footer class="entry-footer">
		<?php twentynineteen_entry_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
	<?php get_template_part( 'template-parts/post/author', 'bio' ); ?>
	<?php endif; ?>

</article><!-- #post-${ID} -->
