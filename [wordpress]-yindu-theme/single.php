<?php get_header(); ?>
<div class="container_">
    <div id="home-page" class="content">
        <div class="home-loop">

            <?php
            if (have_posts()) {
                the_post();
            }
            ?>

            <?php

            $cat = get_the_category($post->ID);
            $name = $cat->slug;
            get_template_part('content',$name);?>

        </div>

    </div>

    <div class="sidebar">
        <?php get_sidebar(); ?>
    </div>


</div>
<?php get_footer(); ?>




