<?php /* Register scripts and styles to render on our wordpress website */



if ( !function_exists('vivadrip_theme_setup')) {

    // Theme setup

    function vivadrip_theme_setup() {
        load_theme_textdomain('vivadrip', get_template_directory() . '/languages');
        // Tells WordPress that we want things to be customizable
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support(
            'html5', array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption'
            )
        );

        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('responsive-embeds');
        register_nav_menus( 
            array(
                'primary' => esc_html__( 'Primary Navbar', 'vivadrip')
            )
            );
        register_nav_menus( 
            array(
                'packages' => esc_html__( 'Footer Packages', 'vivadrip')
            )
            );
        register_nav_menus( 
            array(
                'support' => esc_html__( 'Footer Support', 'vivadrip')
            )
            );  
        register_nav_menus( 
            array(
                'more' => esc_html__( 'Footer More', 'vivadrip')
            )
            );    
    }
    }
 
add_action( 'after_setup_theme', 'vivadrip_theme_setup' );

function vivadrip_assets() {

    // Enqueue CSS Files
    wp_enqueue_style('google-font-inter', '//fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Oswald:wght@200;300;400;500;600;700&display=swap', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap', get_theme_file_uri('css/bootstrap.min.css'), array(), 'v5.1.1', 'all');

    //Enqueue Main Style
    wp_enqueue_style('vivadrip', get_theme_file_uri('css/style.css'), array(), 'v1.0', 'all');

    //Enqueue Main Scripts
    wp_enqueue_script('bootstrap', get_theme_file_uri('js/bootstrap.min.js'), array(),'v5.1.1', true);
    wp_enqueue_script('main-vivadrip-script', get_theme_file_uri('js/script.js'), array(), 'v1.0', true);
}

add_action('wp_enqueue_scripts', 'vivadrip_assets');


// Add Customizer Functionality 

require get_template_directory() . '/includes/customizer-vivadrip.php';