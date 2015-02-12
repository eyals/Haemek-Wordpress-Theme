<?php
/**
 * @package Haemek
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<?php if ( 'post' == get_post_type() ) : ?>

		<div class="entry-meta">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 30 ); ?>
			<?php the_author_link(); ?>
			<?php the_date(); ?>
			<a href="<?php comments_link(); ?>"><?php comments_number( '', 'תגובה אחת', '% תגובות' ); ?>	</a>
		</div><!-- .entry-meta -->

		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		<div class="like-button">
			<?php //likebtn_post(); ?>
			<?php $post_custom = get_post_custom( get_the_ID() ); ?>
			Rank: <?php echo (int)$post_custom['Likes minus dislikes'][0]?>
		</div>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'haemek' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'haemek' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //haemek_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->