<div class="comments-box">

    <h3><?php _e('comment:', 'Yong'); ?></h3>

    <ol class="comment-list">
        <?php
        if (!comments_open()) { ?>
            <li class="tip-box"><p><a href="#c">评论功能已经关闭！</a></p></li>
            <?php
        } else if (post_password_required()) { ?>
            <li class="tip-box"><p><a href="#c">请输入密码再查看评论类容！</a></p></li>
            <?php
        } else if (!have_comments()) { ?>
            <li class="tip-box"><p><a href="#c">还没有评论，你来说一下吧！</a></p></li>
            <?php
        } else {
            wp_list_comments();
        } ?>
    </ol>

    <div class="clr"></div>
    <? if (get_option('comments_registration') && !is_user_logged_in()) { ?>
        <p>你必须<a href="<?php echo wp_login_url(get_permalink()); ?>">登陆</a>才能发表评论</p>
    <?php } else if (comments_open()) {
        comment_form();
    } ?>
</div>