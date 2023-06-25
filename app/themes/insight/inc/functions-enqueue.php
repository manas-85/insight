<?php
	/* Enqueue styles and scripts */
    add_action( 'wp_enqueue_scripts', function () {
        global $assets_uri, $theme_uri, $home;
        wp_enqueue_style( 'main-style', $assets_uri . '/css/style.css' );
        
        

        // wp_deregister_script( 'jquery' );
        wp_enqueue_script( 'jquery', $assets_uri . '/js/jquery-3.6.4.min.js', false, false, true );
        wp_enqueue_script( 'script.custom', $assets_uri . '/js/custom.js', ['jquery'], false, true );
        wp_enqueue_script( 'font-awesome-pro', 'https://kit.fontawesome.com/61f8236001.js', array(), time(), 'all' );

        wp_localize_script( 'script.custom', 'GLOBALS', [
            'THEME_URI' => $theme_uri,
            'HOME_URI' => $home,
            'ajax_url' => admin_url('admin-ajax.php'),
        ] );

    });

    add_action('admin_enqueue_scripts', function() {
        wp_enqueue_media();
    });