<?php /* Template Name: Home Page */
    global $assets_uri,$post;
?>
<?php get_header(); ?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-24">
                    <div class="main-banner" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/main-banner-img.png'); ?>');">
                        <div class="banner-txt">
                            <h1>Effortless Automation for Seamless Access</h1>
                            <p>Introducing our revolutionary sliding gate motor! Designed with cutting-edge technology, our motor offers seamless operation, exceptional durability, and unparalleled security. </p>
                            <a href="#" class="btn btn-md">
                                Contact  Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>