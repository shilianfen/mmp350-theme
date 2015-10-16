<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<!--<?php myFunction(16); ?> -->
	<?php mySide(); ?>
	<?php $txt ="hi"; ?>
</div><!-- #secondary -->

<div>
<?php 
$txt ="hi";
?>
</div>