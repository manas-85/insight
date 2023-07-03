<?php /* Template Name: Contact Us Page */
    global $assets_uri,$post;
?>
<?php get_header(); ?>

    <section class="section-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-24">
                    <div class="main-banner inner-pages" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/Contact-Us-2.jpg'); ?>');">
                        <div class="banner-txt">
                            <h1>Contact Us</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
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
                        <h2 class="mb-4">Contact Us Today</h2>
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
                    <div class="txt-wrap justify-content-start">  
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