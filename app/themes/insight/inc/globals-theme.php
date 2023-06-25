<?php
	/* Variables for global usage */
	$theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();
    $home = home_url();
    $site_text_domain = 'base_theme';
    $assets_uri = $theme_uri . '/assets';
    $uploaddir = wp_upload_dir();
    $current_user = wp_get_current_user();