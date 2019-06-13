<?php
//ENABLE MENUS
add_theme_support('menus');

//POST FEATURED IMAGES
add_theme_support('post-thumbnails');

//Register Menu
register_nav_menu('main-menu', 'Primary');
register_nav_menu('footer-menu', 'Secondary');

function wpb_widgets_init()
{

    register_sidebar(array(

        'name' => __('Footer', 'wpb'),

        'before_widget' => '<div id="%1$s" class="col-md-3 col-sm-6 %2$s">',

        'after_widget' => '</div>',

        'before_title' => '<div class="widget-title"><h4>',

        'after_title' => '</h4></div>',

    ));
}

add_action('widgets_init', 'wpb_widgets_init');


register_post_type('service', array(
    'label' => __('Services'),
    'singular_label' => __('Service'),
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'rewrite' => false,
    'query_var' => false,
    'taxonomies' => array('post_tag', 'category'),
    'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt')
));
register_post_type('advisor', array(
    'label' => __('Advisors'),
    'singular_label' => __('Advisor'),
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'rewrite' => false,
    'query_var' => false,
    'taxonomies' => array('post_tag', 'category'),
    'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt')
));
register_post_type('partner', array(
    'label' => __('Partners'),
    'singular_label' => __('Partner'),
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'rewrite' => false,
    'query_var' => false,
    'taxonomies' => array('post_tag', 'category'),
    'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt')
));

//REMOVE EMPTY P TAGS
add_post_type_support('page', 'excerpt');
remove_filter('the_content', 'wpautop');

// add_filter('wpcf7_form_elements', function($content) {
//     $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

//     return $content;
// });
// add_filter( 'wpcf7_autop_or_not', '__return_false' );
add_action('init', 'create_Teams_post_type');
function create_Teams_post_type()
{
    register_post_type(
        'Teams',
        array(
            'labels' => array(
                'name' => __('Teams'),
                'singular_name' => __('Teams')
            ),
            'publicly_queryable' => true,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => null,
            'taxonomies' => array('category'),
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt')
        )
    );
}
function Teams_init()
{
    // create a new taxonomy
    register_taxonomy(
        'Teams',
        'post',
        array(
            'label' => __('Teams'),
            'rewrite' => array('slug' => 'category'),
            'capabilities' => array(
                'assign_terms' => 'edit_guides',
                'edit_terms' => 'publish_guides'
            )
        )
    );
}
