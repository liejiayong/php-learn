<div class="post-item col-sm-6">
    <div class="post-title">
        <h2><?php the_title(); ?></h2>
    </div>
    <div class="post-meta">
        <?php
        _e('Category:', 'Yong');
        the_category(',');
        _e('Posted by:', 'Yong');
        the_author();
        _e('Post in:', 'Yong');
        the_time('Y-m-d');
        single_cat_title($post->ID, true);
        ?>
    </div>
    <div class="post-content">
        <?php the_content(); ?>
    </div>

    <div class="current-btn">
        <p><?php _e('Perious:', 'Yong');
            previous_post_link(); ?></p>
        <p><?php _e('Next:', 'Yong');
            next_post_link(); ?></p>

    </div>

    <div class="comments-box">
        <?php comments_template(); ?>
    </div>
</div>
