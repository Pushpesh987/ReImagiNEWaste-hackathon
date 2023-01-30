<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Meet Metaslider
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('posts-entry fbox blogposts-list'); ?>>
	<?php if (has_post_thumbnail()) : ?>
		<div class="featured-img-box">
			<a href="<?php the_permalink() ?>" class="featured-thumbnail" rel="bookmark">
				<?php esc_html(the_post_thumbnail('meet-metaslider-slider')); ?>
			</a>
		<?php else : ?>
			<div class="no-featured-img-box">
			<?php endif; ?>
			<div class="content-wrapper">
				<header class="entry-header">
					<?php
                    if (is_singular()) :
                        the_title('<h1 class="entry-title">', '</h1>');
                    else :
                        the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                    endif;

if ('post' === get_post_type()) : ?>
						<div class="entry-meta">
							<div class="blog-data-wrapper">
								<span class="post-author-wrapper"><?php esc_html_e('By', 'meet-metaslider'); ?> <?php the_author(); ?> <?php esc_html_e('on', 'meet-metaslider'); ?></span>
								<?php meet_metaslider_posted_on(); ?>
							</div>
						</div><!-- .entry-meta -->
						<?php
endif; ?>
				</header><!-- .entry-header -->

				<div class="entry-content">

					<?php if (get_theme_mod('show_except_or_full') == '') : ?>
					<?php the_excerpt(); ?>
					<?php else : ?>
						<?php the_content(); ?>
					<?php endif; ?>

					<?php
wp_link_pages(array(
    'before' => '<div class="page-links">' . esc_html__('Pages:', 'meet-metaslider'),
    'after'  => '</div>',
));
?>

				</div>
					<?php if (get_theme_mod('show_except_or_full') == '') : ?>
			<a class="read-story" href="<?php the_permalink() ?>">
				<?php esc_html_e('Continue reading', 'meet-metaslider'); ?>
			</a>
		<?php else : ?>
		<?php endif; ?>
			</div>

		</div>
	
	</article><!-- #post-<?php the_ID(); ?> -->
