<?php get_header(); ?>



<div class="container_">
    <div class="cat"><?php  _e('search key :', 'Yong'); echo get_search_query();?></div>
    <div id="home-page" class="content">
        <div class="home-loop">
            <?php
            if (have_posts()) {
                while (have_posts()) {
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
                            <?php edit_post_link(_e('Edit', 'Yong'), '<span>| </span>', ''); ?>
                        </div>
                    </div>

                    <?php
                }
            } else {
                echo "没有可用文章";
            }
            ?>
        </div>

        <div class="post-nav">
            <?php posts_nav_link(); ?>
        </div>

        <div class="view">
            访问量：<?php
            $view = get_option('view');
            update_option('view', $view + 1);
            echo $view;
            ?>
        </div>

    </div>

    <div class="sidebar">
        <?php get_sidebar(); ?>
    </div>


</div>
<?php get_footer(); ?>





