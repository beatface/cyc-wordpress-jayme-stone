<?php

  function arphabet_widgets_init() {

  	register_sidebar( array(
  		'name'          => 'SendGrid Modal',
  		'id'            => 'sendgrid-widget',
  		'before_widget' => '<div>',
  		'after_widget'  => '</div>',
  		'before_title'  => '<h2 class="rounded">',
  		'after_title'   => '</h2>',
  	) );

  }
  add_action( 'widgets_init', 'arphabet_widgets_init' );


  if (! isset( $content_width )) {
    $content_width = 660;
  }

  function site_setup() {
    add_theme_support('automatic-fee-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    require_once('wp_bootstrap_navwalker.php');
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'Compose-Your-Career' ),
        'footer' => __( 'Footer Menu', 'Compose-Your-Career' ),
    ) );
  }

  add_action('after_setup_theme', 'site_setup');

  function site_scripts() {
    // Add styles
    // wp_enqueue_style('bootstrap-core', get_template_directory_uri() . '/public/lib/bootstrap/dist/css/bootstrap.min.css');
    // wp_enqueue_style('font-awesome', get_template_directory_uri() . '/public/lib/font-awesome/css/font-awesome.min.css');
    // wp_enqueue_style('animate', get_template_directory_uri() . '/public/stylesheets/animate.min.css');
    // wp_enqueue_style('custom', get_template_directory_uri() . '/style.css');
    // wp_enqueue_style('css-shake', get_template_directory_uri() . '/public/stylesheets/csshake.css');

    // // Add scripts
    // wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/public/lib/bootstrap/dist/js/bootstrap.min.js', array('jquery'), '', true);
    // wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/public/lib/jquery.easing.min.js', array('jquery'), '', true);
    // wp_enqueue_script('jquery-fittext', get_template_directory_uri() . '/public/lib/jquery.fittext.js', array('jquery'), '', true);
    // wp_enqueue_script('wow', get_template_directory_uri() . '/public/lib/wow.min.js');
    // wp_enqueue_script('custom', get_template_directory_uri() . '/public/javascripts/creative.js');
    // wp_enqueue_script('main', get_template_directory_uri() . '/public/javascripts/main.js');
    // wp_enqueue_script('custom-bs', get_template_directory_uri() . '/public/javascripts/my-bootstrap-js.js');
    // wp_enqueue_script('custom-bs', get_template_directory_uri() . '/public/javascripts/modules.js');
  }

  add_action('wp_enqueue_scripts', 'site_scripts');

  function new_exceprt_more($more) {
    return "...";
  }
  add_filter('excerpt_more', 'new_exceprt_more');

  function get_footer_class() {
    if (is_front_page()) {
      return "text-purple-primary";
    } elseif (is_home()) {
      return 'bg-md-purple text-white';
    } else {
      return "text-purple-primary";
    }
  }

  function get_footer_image() {
    if (is_front_page()) {
      return "CC_Logo_04";
    } elseif (is_home()) {
      return 'CC_Logo_03';
    } else {
      return "CC_Logo_04";
    }
  }

  function header_btn_text() {
    _e("BE THE FIRST TO HEAR ABOUT IT.");
  }

?>
