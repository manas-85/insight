<?php global $assets_uri, $home, $post; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width,  user-scalable=no, initial-scale=1, shrink-to-fit=no">
    <meta name="Referrer-Policy" value="no-referrer | same-origin" />

    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $assets_uri; ?>/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $assets_uri; ?>/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $assets_uri; ?>/images/icons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $assets_uri; ?>/images/icons/site.webmanifest">
    <link rel="mask-icon" href="<?php echo $assets_uri; ?>/images/icons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="theme-color" content="#ffffff">
    <?php
            wp_head();
        ?>
</head>

<body <?php body_class(); ?>>
    <div class="top-head light-gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-side">
                        <span class="icon"><i class="fa-light fa-envelope"></i></span>
                        <a href="mailto:insightsmartmotors@email.com" class="">insightsmartmotors@email.com</a>
                        <span class="icon"><i class="fa-light fa-phone"></i></span>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="social-link-side">
                        <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="icon"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="icon"><i class="fa-brands fa-pinterest-p"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <div class="container">
            <header>
                <div class="row d-flex align-items-center">
                    <div class="col-sm-6">
                        <div class="logo-wrap">
                            <a class="" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.svg'); ?>" alt="" class="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-18">
                        <nav class="topmenu">
                            <?php
                                wp_nav_menu(
                                    array(
                                        'menu' => 'Main Manu',
                                        'container' => false,
                                        'menu_class' => 'main-manu',
                                    )
                                );
                            ?>
                            <div class="search-fliter-wrap">
                                <span class="icon"><i class="fa-light fa-magnifying-glass"></i></sapn>
                            </div>
                            <div class="button-wrap">
                                <a href="#" class="btn btn-md">
                                    Inquire Now
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>
        </div>
    