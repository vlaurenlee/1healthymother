<?php
/**
 * @package healthymother
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
	<!-- Title -->
		<?php healthymother_posted_on(); ?>
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
	<!-- Metadata -->
		<div class="entry-meta">
			
			<!-- Categories -->
			<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
				<?php
					/* translators: used between list items, there is a space after the comma */
					$categories_list = get_the_category_list( __( '  ', 'healthymother' ) );
					if ( $categories_list && healthymother_categorized_blog() ) :
				?>
					
				<span class="cat-links">
					<?php printf( __( '%1$s', 'healthymother' ), $categories_list ); ?>
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

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
	
	<?php else : ?>	 
		<div class="entry-content">
			<?php echo apply_filters('the_content', $post->post_content); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'healthymother' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	<?php endif;?>

	<footer class="entry-footer">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<div class="social-menu">
				<a href="#"><i class="ss-icon">facebook</i></a>
				<a href="#"><i class="ss-icon">twitter</i></a>
				<a href="#"><i class="ss-icon">pinterest</i></a>
			</div>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'healthymother' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'healthymother' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php edit_post_link( __( 'Edit', 'healthymother' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
