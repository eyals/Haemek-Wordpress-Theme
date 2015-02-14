<?php

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<h2 class="comments-title">תגובות</h2>

	<div id="comment_box">

		<?php haemek_user_avatar_link(); ?>
		<?php $comment_args = array(
				'comment_field' => '<textarea id="comment" name="comment" rows="3" aria-required="true"></textarea>',
				'must_log_in' => 'עליך להתחבר כדי להגיב',
				'logged_in_as' => '',
				'title_reply' => '',
				'comment_notes_after' => '',
				'label_submit' => 'פרסום תגובה'
			);
			?>
		<?php comment_form($comment_args); ?>
	</div>


	<?php if ( have_comments() ) : ?>
		<!-- COMMENTS LIST -->
		<div class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'div'
				) );
			?>
		</div>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<!-- COMMENTS NAVIGATION -->
			<nav id="comment-nav-below" class="comment-navigation" role="navigation">
				<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'haemek' ); ?></h1>
				<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'haemek' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'haemek' ) ); ?></div>
			</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>


</div><!-- #comments -->
