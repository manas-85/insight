<?php /* Template Name: About Page */
    global $assets_uri,$post;
?>
<?php get_header(); ?>

    <section class="section-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-24">
                    <div class="main-banner inner-pages" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/main-banner-img.png'); ?>');">
                        <div class="banner-txt">
                            <h1>About Us</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
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
    <section class="section-space col-two-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-24">
                    <div class="txt-wrap">
                        <h5 class="ocean-blue-txt">Company</h5>
                        <h2>Our Story: Pioneering Excellence in Sliding Gate Motor</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>                     
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-space col-two-wrap contact-info-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-10">
                    <div class="form-wrap">
                        <h4 class="mb-4">Contact Us Today</h4>
                        <form>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Your Email" aria-label="Your Email">
                            </div>
                            <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Subject" aria-label="Subject">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" placeholder="Your Message " id="floatingTextarea"></textarea>
                                
                            </div>
                            <a href="#" class="btn btn-md">
                                Send Message
                            </a>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12 offset-lg-2">
                    <div class="txt-wrap">  
                        <h4 class="mb-4">Let’s communicate & get your product</h4>
                        <ul>
                            <li> 
                                <span class="icon"><i class="fa-sharp fa-light fa-location-dot"></i></span>
                                <span>Běijīng shì, zhāoyáng qū, cháo wài dàjiē 22 hào fàn lì dàshà 5 céng 512A</span>
                            </il>
                            <li> 
                                <span class="icon"><i class="fa-light fa-envelope"></i></span>
                                <a href="mailto:insightsmartmotors@email.com">insightsmartmotors@email.com</a>
                            </il>
                            <li> 
                                <span class="icon"><i class="fa-light fa-phone"></i></span>
                                <span>Tel: 545-487-6433</span>
                            </il>
                            <li> 
                                <span class="icon"><i class="fa-light fa-mobile"></i></span>
                                <span>Mobile: 469-494-1228</span>
                            </il>
                            <li> 
                                <span class="icon"><i class="fa-brands fa-whatsapp"></i></span>
                                <span>WhatsApp: 275-766-8904</span>
                            </il>
                            <li> 
                                <span class="icon"><i class="fa-light fa-message-middle"></i></span>
                                <span>WeChat: 807-609-0966</span>
                            </il>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>