<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php echo get_the_title(); ?></h1>
				</header>
			<?php endif; ?>



			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php single_post_title(); ?></h2>
				<div id="date">
				<?php echo get_the_date(); ?>
				<?php echo get_the_time();?>
				 <?php the_category( 'turkey'); ?> 
				</div>

				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
				?>

			<?php endwhile; ?>





			<?php rewind_posts(); ?>

<?php

//$args = array( ‘post_type’ => ‘photo_item’, ‘posts_per_page’ => 10 );
$args = array('post_type' => 'photo_item', 'posts_per_page' => 10);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();


the_title();
echo '<div class=”entry-content”>';
the_content();
echo '</div>';
echo '<div class="plug-content">';
the_content();
echo '</div>';

endwhile;

?>




			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
