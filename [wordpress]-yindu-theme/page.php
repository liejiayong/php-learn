<?php get_header(); ?>


<div class="container_">
    <div class="page-box">
        <div id="home-page" class="content">
            <div class="home-loop">
                <?php
                if (have_posts()) {
                the_post();
                ?>
                <div class="post-item col-sm-6">
                    <div class="post-title">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </div>
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                    <div class="post-meta">
                        <?php _e('Category:', 'Yong'); ?><?php the_category(','); ?>
                        <?php the_author(); ?>
                        <?php _e('Post in:', 'Yong'); ?><?php the_time('Y-m-d'); ?>
                        <?php single_cat_title($post->ID, true);
                        } ?>
                    </div>
                </div>


            </div>

            <?php comments_template(); ?>

        </div>

    </div>

    <?php get_footer(); ?>





