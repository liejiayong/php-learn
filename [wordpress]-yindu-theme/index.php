<?php get_header(); ?>

<div class="container_">
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
                            <?php _e('Posted by:', 'Yong'); ?><?php the_author(); ?>
                            <?php _e('Post in:', 'Yong'); ?><?php the_time('Y-m-d'); ?>
                            <?php single_cat_title($post->ID, true); ?>
                        </div>
                    </div>

                    <?php
                }
            } else {
                echo "没有可用文章";
            }
            ?>
            <?php
            $args = array(
                'post_type' => 'psot', //自定义文章类型名称
                'showposts' => 10, //输出的文章数量，这个可以是缺省值，不用设置
                'tax_query' => array(
                    array(
                        'taxonomy' => 'filters',//自定义分类法名称
                        'terms' => 64 //id为64的分类。也可是多个分类array(12,64)
                    ),
                )
            );
            $my_query = new WP_Query($args);
            if( $my_query->have_posts() ) {
                while ($my_query->have_posts()) : $my_query->the_post();?>
                    //这里输出分类文章
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_content(); ?></p>
                <?php endwhile; wp_reset_query(); //重置query查询
            } ?>
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





