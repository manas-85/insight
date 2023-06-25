<?php /* Template Name: Home Page */
    global $assets_uri,$post;
?>
<?php get_header(); ?>

    <section class="section-space">
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
    
    <section class="section-space col-two-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-13">
                    <div class="txt-wrap">
                        <h5 class="ocean-blue-txt">Company</h5>
                        <h2>Our Story: Pioneering Excellence in Sliding Gate Motor</h2>
                        <ul>
                            <li>Cutting-edge Technology: Our sliding gate motors utilize advanced technology for seamless operation.</li>
                            <li>Uncompromising Durability: Built to withstand tough conditions, our motors offer reliable performance over the long term.</li>
                            <li>Enhanced Security: With advanced features like encryption codes and obstacle detection, our motors prioritize your property's safety.</li>
                            <li>Expert Installation and Support: Our team of professionals ensures proper installation and offers ongoing support for optimal motor performance.</li>
                        </ul>                        
                    </div>
                </div>
                <div class="col-sm-10 offset-lg-1">
                    <div class="img-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/company-section-img.png'); ?>" alt="" class="logo">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-space col-four-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-24 px-0">
                    <h5 class="ocean-blue-txt">Products</h5>
                    <h2>Powerful Products</h2>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-6 col-lg-8 col-sm-12 px-2 my-2">
                    <div class="card">
                        <div class="img-wrap">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/product-1.png'); ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5>Sliding gate motor (600 KG)</h5>
                            <p>
                                Power supply: AC220V<br>
                                Motor Power: 370W<br>
                                Move Speed: 10m/min
                            </p>
                            <a href="#" class="btn btn-md">Find Out More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8 col-sm-12 px-2 my-2">
                    <div class="card">
                        <div class="img-wrap">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/product-2.png'); ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5>Sliding Glass Door</h5>
                            <p>
                                Power supply: AC220V<br>
                                Motor Power: 370W<br>
                                Move Speed: 10m/min
                            </p>
                            <a href="#" class="btn btn-md">Find Out More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8 col-sm-12 px-2 my-2">
                    <div class="card">
                        <div class="img-wrap">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/product-3.png'); ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5>Swing Gate Motor</h5>
                            <p>
                                Power supply: AC220V<br>
                                Motor Power: 370W<br>
                                Move Speed: 10m/min
                            </p>
                            <a href="#" class="btn btn-md">Find Out More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8 col-sm-12 px-2 my-2">
                    <div class="card">
                        <div class="img-wrap">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/product-4.png'); ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5>Sliding gate motor (1200 KG)</h5>
                            <p>
                                Power supply: AC220V<br>
                                Motor Power: 370W<br>
                                Move Speed: 10m/min
                            </p>
                            <a href="#" class="btn btn-md">Find Out More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-space col-two-wrap ocean-blue-bg our-work-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-13">
                    <div class="txt-wrap">
                        <h5>Our Work</h5>
                        <h2>Our Impressive Portfolio</h2>
                        <p>With pride, we present our extensive work portfolio as a leading distributor of sliding gate motors. Over the years, we have partnered with numerous residential and commercial clients, delivering exceptional solutions for their sliding gate motor needs. Our portfolio showcases a diverse range of successful installations, highlighting our commitment to cutting-edge technology, durability, and unmatched customer satisfaction.</p>
                        <p>From small residential properties to large-scale industrial complexes, we have consistently provided tailored solutions, ensuring smooth and secure gate operations.</p>                    
                    </div>
                </div>
                <div class="col-sm-10 offset-lg-1">
                    <div class="img-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/our-work-section-img.png'); ?>" alt="" class="logo">
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>