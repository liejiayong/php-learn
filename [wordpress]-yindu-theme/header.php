<!doctype html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html,charset=<?php bloginfo('charset'); ?>"/>
    <meta name="description" content="<?php bloginfo('description') ?>"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css"/>
    <!--
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.css"/>

   -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jQuery-3.2.1.js"></script>
    <?php wp_head(); ?>
</head>
<body>

<div id="header" class="container-fluid">
    <div id="headerimg" class="navbar-brand">
        <h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
        <div class="description"><?php bloginfo('description'); ?></div>
    </div>

    <div class="nav">
        <div class="container">
            <?php wp_nav_menu(); ?>
        </div>
    </div>

    <div class="breadcrumb">
        <?php
        if (!is_home()){
        ?>
        <div class="container">
            <a href="<?php bloginfo('url'); ?>"><?php _e('home', 'Yong'); ?></a> >
            <?php
            if (is_category()) {
                $cat = single_cat_title();
            } else if (is_search()) {
                echo $cat = $s;
            } else if (is_single()) {
                $cat = get_the_category();
                $cat = $cat[0];
                echo '<a href="' . get_category_link($cat) . '">' . $cat->name . '</a>';
            } else if (is_page()) {
                the_title();
            } else if (is_404()) {
                echo '404页面不存在';
            }

            }
            ?>


        </div>
    </div>
</div>



