<?php
get_header();
global $assets_uri, $post;
?>
<section class="section-space">
    <div class="container">
        <div class="row">
            <div class="col-sm-24">
                <div class="main-banner inner-pages" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/main-banner-img.png'); ?>');">
                    <div class="banner-txt">
                        <h1>Products</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-space col-four-wrap">
    <div class="container">
        <div class="row">
            <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 12
                    );
                $loop = new WP_Query( $args );
                if ( $loop->have_posts() ) {
                    while ( $loop->have_posts() ) : $loop->the_post();?>
                        <div class="col-lg-6 col-sm-12 px-2 my-2">
                            <div class="card">
                                <div class="img-wrap">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="card-body">
                                    <h5><?php the_title(); ?></h5>
                                    <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-md">Find Out More</a>
                                </div>
                        </div>
                    </div>
                    <?php endwhile;
                } else {
                    echo __( 'No products found' );
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<?php get_footer();
?>