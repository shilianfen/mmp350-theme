<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package theme
 */

?>

<!--<?php get_header(); ?>

<div id="main">
	<div id="content">
		<?php if (have_posts()): while (have_posts()): the_post();?>
			<h2>
				<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
			</h2>
<?php the_content();?>
<?php endwhile; else:?>
<?php endif;?>
</div>


	
</div>-->
	

<div class="myContainer" id="id-<?php the_ID(); ?>">

<div class="myContainerTitle">
	<?php the_title() ?>
	
</div>
</div>



