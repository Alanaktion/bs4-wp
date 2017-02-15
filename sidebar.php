<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_4
 */

if (!is_active_sidebar('sidebar-1')) {
	return;
}
?>

</div><!-- .blog-main -->
<div class="col-sm-3 offset-sm-1 blog-sidebar">
	<?php dynamic_sidebar('sidebar-1'); ?>
</div>
