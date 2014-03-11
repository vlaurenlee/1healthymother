<?php
/**
 * @package healthymother
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php healthymother_posted_on(); ?>
			<!-- Categories -->
			<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
				<?php
					/* translators: used between list items, there is a space after the comma */
					$categories_list = get_the_category_list( __( '.  ', 'healthymother' ) );
					if ( $categories_list && healthymother_categorized_blog() ) :
				?>
					-
					<span class="cat-links">
						<?php printf( __( ' %1$s', 'healthymother' ), $categories_list ); ?>
					</span>
				<?php endif; // End if categories ?>
			<?php endif; ?>
			<!-- Comments -->
			<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
				<span class="comments-link"><?php comments_popup_link( __( ' <i class="ss-icon ss-standard">chat</i> No Comments...yet.', 'healthymother' ), __( ' <i class="ss-icon ss-standard">chat</i> 1 Comment', 'healthymother' ), __( ' <i class="ss-icon ss-standard">chat</i> % Comments', 'healthymother' ) ); ?></span>
			<?php endif; ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'healthymother' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'healthymother' ) );

			if ( ! healthymother_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'Tags: %2$s.', 'healthymother' );
				} else {
					$meta_text = __( 'Tags: None.', 'healthymother' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( 'Tags: %2$s.', 'healthymother' );
				} else {
					$meta_text = __( 'Tags: None.', 'healthymother' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$tag_list,
				get_permalink()
			);
		?>

		<?php edit_post_link( __( 'Edit', 'healthymother' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
