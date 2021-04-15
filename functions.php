<?php

  // Add theme support for featured images, and add a few custom image sizes
  add_image_size( 'gallery_thumb', 395 );

  // Enqueue theme JavaScripts and CSS styles
  function corsham_office_rentals_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/custom-script.js', false, false, true );

    if ( get_page_template_slug() == "page-availability.php" ) {
      wp_register_style( 'glightbox-styles', 'https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css' );
      wp_enqueue_style('glightbox-styles');

      wp_register_script( 'glightbox', 'https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js', null, null, true );
      wp_enqueue_script('glightbox');
      wp_enqueue_script( 'glightbox-options', get_template_directory_uri() . '/js/glightbox-options.js', false, false, true );
    }

  }
  add_action( 'wp_enqueue_scripts', 'corsham_office_rentals_scripts' );

  //Setup custom posts
  function custom_post_type() {
    register_post_type('availability',
        array(
          'labels'                  => array(
          'name'                => __('Availability', 'textdomain'),
          'singular_name'       => __('Availability', 'textdomain'),
            ),
          'public'              => true,
          'has_archive'         => false,
          'menu_icon'           => "dashicons-admin-multisite",
          'publicly_queryable'  => false,
          'supports'            => array('title','editor', 'thumbnail')
        )
    );
  }
  add_action('init', 'custom_post_type');
?>