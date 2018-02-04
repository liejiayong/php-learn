<div id="right-bar">
    <?php if (is_dynamic_sidebar()) {

        dynamic_sidebar('侧边栏1'); ?>

        <?php

        dynamic_sidebar('侧边栏');
    } else {
        ?>
        <div class="box">
            <h2><?php get_search_form();?></h2>
        </div>
        <div class="box">
            <h2><?php _e('Category:', 'Yong'); ?></h2>
            <li>
                <?php
                wp_list_categories();
                ?>
            </li>
        </div>

        <div class="box">
            <h2><?php _e('Page:', 'Yong'); ?></h2>
            <li>
                <?php
                wp_list_pages();
                ?>
            </li>
        </div>

        <div class="box">
            <h2><?php _e('Manager:', 'Yong'); ?></h2>
            <li>
                <?php
                wp_register();

                ?>
            </li>
        </div>

    <?php } ?>
</div>