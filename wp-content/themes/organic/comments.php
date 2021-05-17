<?php
$commenter = wp_get_current_commenter();
$defaults = [
		'fields' 			 => [
			'author' => '<p class="comment-form-author">
			<input id="author" class="form-control" placeholder="' . __( 'Name', 'orgamic' ) . '" name="author" type="text"" size="30"/>',
			'email'  => '<p class="comment-form-email">
			<input id="email" class="form-control" placeholder="' . __( 'Email', 'orgamic' ) . '" name="email"  size="30" aria-describedby="email-notes"/>',
			'url'    => '<p class="comment-form-url">
			<input id="url" class="form-control" placeholder="' . __( 'Website', 'orgamic' ) . '" name="url" size="30" />',       
		],
	'comment_field'        => '<p class="comment-form-comment">
		<textarea placeholder="' . __( 'Message', 'orgamic' ) . '" name="comment" cols="45" rows="8"  aria-required="true" required="required"></textarea>
	</p>',
	'comment_notes_after'  => '',
	'id_form'              => 'commentform',
	'id_submit'            => 'submit',
	'class_form'           => 'comment-form',
	'class_submit'         => 'submit',
	'name_submit'          => 'submit',
	'title_reply'          => __( 'Leave a Reply' ),
	'title_reply_to'       => __( 'Leave a Reply to %s' ),
	'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">',
	'title_reply_after'    => '</h3>',
	'cancel_reply_before'  => ' <small>',
	'cancel_reply_after'   => '</small>',
	'cancel_reply_link'    => '',
	'label_submit'         => __( 'Submit' ),
	'submit_button'        => '<input name="%1$s" type="submit" id="%2$s" class="btn btn-parsley %3$s" value="%4$s" />',
	'submit_field'         => '<p class="form-submit">%1$s %2$s</p>',
	'format'               => 'xhtml',
];

// Do not delete these lines.
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && 'comments.php' === basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
	die( 'Please do not load this page directly. Thanks!' );
}

if ( post_password_required() ) { ?>
		<p class="nocomments"><?php _e( 'This post is password protected. Enter the password to view comments.' ); ?></p>
	<?php
	return;
}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<h3 id="comments">
		<?php
		if ( 1 == get_comments_number() ) {
			printf(
				/* translators: %s: Post title. */
				__( 'One response to %s' ),
				'&#8220;' . get_the_title() . '&#8221;'
			);
		} else {
			printf(
				/* translators: 1: Number of comments, 2: Post title. */
				_n( '%1$s response to %2$s', '%1$s responses to %2$s', get_comments_number() ),
				number_format_i18n( get_comments_number() ),
				'&#8220;' . get_the_title() . '&#8221;'
			);
		}
		?>
	</h3>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link(); ?></div>
		<div class="alignright"><?php next_comments_link(); ?></div>
	</div>

	<ol class="commentlist">
	<?php wp_list_comments(); ?>
	</ol>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link(); ?></div>
		<div class="alignright"><?php next_comments_link(); ?></div>
	</div>
<?php else : // This is displayed if there are no comments so far. ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	<?php else : // Comments are closed. ?>
		<!-- If comments are closed. -->
		<p class="nocomments"><?php _e( 'Comments are closed.' ); ?></p>

	<?php endif; ?>
<?php endif;

comment_form( $defaults ); ?>
