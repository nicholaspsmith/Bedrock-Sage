<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to synth_comment() which is
 * located in the functions.php file.
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
?>

    
	<?php // You can start editing here -- including this comment! ?>


	<div class="space30"></div>
	<div class="row">
      <div class="col-md-12">
        <h3><?php _e('Comments', 'synth'); ?></h3>
        <div class="space40"></div>
      </div>  
    </div>
    
	<?php if ( have_comments() ) : ?>
		
		

		
		<?php wp_list_comments( array( 'callback' => 'synth_comment', 'style' => 'div' ) ); ?>
			
			

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="navigation" role="navigation">
			<h1 class="assistive-text section-heading"><?php _e( 'Comment navigation', 'synth' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'synth' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'synth' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

		<?php
		/* If there are no comments and comments are closed, let's leave a note.
		 * But we only want the note on posts and pages that had comments in the first place.
		 */
		if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="nocomments"><?php _e( 'Comments are closed.' , 'synth' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php 
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " " : '' );
	$args = array(
	'id_form' => 'form-comment',
	'id_submit' => 'submit',
	'title_reply' => __( 'Leave a Reply', 'synth' ),
	'title_reply_to' => __( 'Leave a Reply to %s', 'synth' ),
	'cancel_reply_link' => __( 'Cancel Reply', 'synth' ),
	'label_submit' => __( 'Post Comment', 'synth' ),
	'comment_field' => '<div class="row"><div class="form-group col-md-12"><textarea id="comment" name="comment" placeholder="'.__('Message *', 'synth').'" class="form-control"></textarea></div></div>',
	'must_log_in' => '<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.', 'synth' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
	'logged_in_as' => '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'synth' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
	'comment_notes_before' => '',
	'comment_notes_after' => '',
	'fields' => apply_filters( 'comment_form_default_fields', array(
		'author' => '<div class="row"><div class="form-group col-md-6"><input id="author" class="form-control" placeholder="'.__('Name', 'synth').'" name="author" type="text" value="' .
                esc_attr( $commenter['comment_author'] ) . '" size="30" tabindex="1" placeholder="Name *"' . $aria_req . ' /></div>',
		'email' => '<div class="form-group col-md-6"><input id="email" name="email" type="text" class="form-control" placeholder="'.__('E-mail *', 'synth').'" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" tabindex="2"' . $aria_req . ' /></div></div>',
		'url' => '<div class="row"><div class="form-group col-md-12"><input type="text" name="url" class="form-control" placeholder="'.__('URL', 'synth').'" value=""></div></div>' ) ) );
	?>

	<div class="space20"></div>  
	<?php comment_form($args); ?>
	<div class="space30"></div> 

