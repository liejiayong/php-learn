<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/5
 * Time: 13:55
 */

/**
 * Add a widget to the dashboard.
 *
 * This function is hooked into the 'wp_dashboard_setup' action below.
 */
function example_add_dashboard_widgets() {

    wp_add_dashboard_widget(
        'example_dashboard_widget',         // Widget slug.
        'Example Dashboard Widget',         // Title.
        'example_dashboard_widget_function' // Display function.
    );
}
add_action( 'wp_dashboard_setup', 'example_add_dashboard_widgets' );

/**
 * Create the function to output the contents of our Dashboard Widget.
 */
function example_dashboard_widget_function() {

    // Display whatever it is you want to show.
    echo "Hello World, I'm a great Dashboard Widget";
}



//启用多语言翻译
function my_theme_setup(){
    load_theme_textdomain('Yong',get_template_directory().'/languages');
}
add_action('after_setup_theme','my_theme_setup');

//注册小工具
register_sidebar(
    array(
        'name' => '侧边栏',
        'before_widget'=> '<div class="shop">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => "</h2>"
    )
);

register_sidebar(
    array(
        'name' => '侧边栏1',
        'before_widget'=> '<div class="shop">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => "</h2>"
    )
);

?>