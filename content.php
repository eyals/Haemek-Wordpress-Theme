
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



	<header class="entry-header">

		<?php if ( 'post' == get_post_type() ) : ?>

			<!-- ENTRY META -->
			<div class="entry-meta">
				<?php echo get_avatar( get_the_author_meta( 'ID' ), 30 ); ?>

				<bdi><?php the_author_posts_link(); ?></bdi>
				<bdi><?php the_date(); ?></bdi>
				<a href="<?php comments_link(); ?>"><?php comments_number( '', 'תגובה אחת', '% תגובות' ); ?>	</a>
				<?php edit_post_link( "עריכה", " | "); ?>
			</div>



			<!-- TITLE AND PATH-->
			<?php if (is_single()): ?>
				<?php the_title( '<h1>','</h1>' ); ?>
				<div class="cat_path">קטגוריה: <?php the_category(" &raquo; ","multiple",$post->ID);?></div>
			<?php else: ?>
				<?php the_title( '<h2 class="entry-title"><a href="'.get_permalink().'" rel="bookmark">','</a></h2>' ); ?>
			<?php endif; ?>



			<!-- ACTIONS -->
			<div class="post-actions">
				<?php likebtn_post(); ?>
				<?php
				//$post_custom = get_post_custom( get_the_ID() );
				//echo (int)$post_custom['Likes minus dislikes'][0];
				?>
				&nbsp;|&nbsp;
				<?php haemek_favorites_btn(); ?>
			</div>


		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php
			the_post_thumbnail( 'thumbnail' );

			the_content();
			/* translators: %s: Name of current post */
			// the_content( sprintf(
			// 	__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'haemek' ),
			// 	the_title( '<span class="screen-reader-text">"', '"</span>', false )
			// ) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->