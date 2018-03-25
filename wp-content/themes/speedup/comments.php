<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>

<?php if ( have_comments() ) : ?>
<h4 id="comments-title"><?php if(isset($speedup_redux_demo['blog_comment'])){?>
                                    <?php echo htmlspecialchars_decode($speedup_redux_demo['blog_comment']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Comments', 'speedup' );
                                    }
                                    ?></h4>

<ol class="commentlist">
            <?php wp_list_comments('callback=speedup_theme_comment'); ?>
        </ol>
        

                <?php if ( ! comments_open() && get_comments_number() ) : ?>
                    <p class="no-comments"><?php esc_html_e( 'Comments are closed.' , 'speedup' ); ?></p>
                <?php endif; ?> 
        <?php endif; ?> 
        
        <?php
    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $comment_args = array(
                'id_form' => 'commentform',                                
                'title_reply'=> esc_html__( 'Leave a Comment', 'speedup' ),
                'fields' => apply_filters( 'comment_form_default_fields', array(
                    'author' => '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <input type="text" name="author" id="author"
                                    aria-required="true" required class="form-control" placeholder="'.esc_html__( 'Name', 'speedup' ).'">
                                                </div>
                                            </div>
                            ',
                    'email' => '
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="'.esc_html__( 'Email', 'speedup' ).'" name="email" required aria-required="true" >
                                                </div>
                                            </div>

                    ',      
                                                                                           
                ) ),   
                'comment_field' => '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <textarea name="comment"'.$aria_req.' id="comment" class="form-control" rows="7" placeholder="'.esc_html__( 'Comment', 'speedup' ).'"></textarea>
                                                </div>
                                            </div>',                    
                 'label_submit' => esc_html__( 'Submit', 'speedup' ),
                 'comment_notes_before' => '',
                 'comment_notes_after' => '',               
        )
    ?>
    <?php comment_form($comment_args); ?>




