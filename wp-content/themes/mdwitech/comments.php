<div class="comments-wrapper">


    <div class="comments" id="comments">


        <div class="comments-header">

            <h2 class="comment-reply-title">
                <?php
                if (!have_comments()) {
                    echo "Leave a comment";
                } else {
                    echo get_comments_number() . " Comments";
                }
                ?>
            </h2>

        </div>
        <div class="comments-inner">
            <?php
            wp_list_comments(
                'avatar_size=120&type=comment&style=div',
                get_comments(array('post_id' => get_the_ID()))
            );
            ?>
        </div>
    </div>
    <hr class="" aria-hidden="true">
    <?php
    if (comments_open()) {
        comment_form(
            array(
                'class_form' => 'form-submit',
                'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
                'title_reply_after' => '</h2>'
            )
        );
    }
    ?>

</div>