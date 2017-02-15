<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bootstrap_4
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
	<header class="entry-header">
		<?php
		if (is_single()) :
			the_title('<h2 class="blog-post-title">', '</h2>');
		else :
			the_title('<h2 class="blog-post-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;

		if (get_post_type() == 'post') : ?>
		<p class="blog-post-meta">
			<?php bootstrap_4_posted_on(); ?>
		</p>
		<?php
		endif; ?>
	</header>

	<div class="entry-content">
		<?php
			the_content(sprintf(
				/* translators: %s: Name of current post. */
				wp_kses(__('Continue reading %s <span class="meta-nav">&rarr;</span>', 'bootstrap-4'), array('span' => array('class' => array()) ) ),
				the_title('<span class="screen-reader-text">"', '"</span>', false)
			));

			wp_link_pages(array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'bootstrap-4'),
				'after'  => '</div>',
			));
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php bootstrap_4_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
