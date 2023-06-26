<?php global $assets_uri, $home, $post; ?>
<footer class="top-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="logo-wrap">
                    <a class="" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.svg'); ?>" alt="" class="logo">
                    </a>
                    <p>Effortless Automation for Seamless Access</p>
                </div>
            </div>
            <div class="col-sm-5">
                <h5>Quick Link</h5>
                <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'Footer Manu',
                            'container' => false,
                            'menu_class' => 'footer-manu',
                        )
                    );
                ?>
            </div>
            <div class="col-sm-10">
                <div class="footer-contact-info">
                    <h5>Effortless Automation for Seamless Access</h5>
                    <ul>
                        <li> 
                           
                            <span>Běijīng shì, zhāoyáng qū, cháo wài dàjiē 22 hào fàn lì dàshà 5 céng 512A</span>
                        </il>
                        <li> 
                            <a href="mailto:insightsmartmotors@email.com">insightsmartmotors@email.com</a>
                        </il>
                        <li> 
                            <span>Tel: 545-487-6433</span>
                        </il>
                        <li> 
                            <span>Mobile: 469-494-1228</span>
                        </il>
                        <li> 
                            <span>WhatsApp: 275-766-8904</span>
                        </il>
                        <li> 
                            <span>WeChat: 807-609-0966</span>
                        </il>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="top-head">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-side">
                        <Small>Copyright 2023 Insight Smarts Motors. Co., Ltd</Small>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="social-link-side">
                        <small>Powered By: Digidazzlers</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php wp_footer(); ?>
</body>

</html>