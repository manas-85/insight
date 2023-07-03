<?php
    get_header();
    global $assets_uri, $post, $product;

?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="section-space">
    <div class="container">
        <div class="row">
            <div class="col-sm-24">
                <div class="main-banner inner-pages" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/main-banner-img.png'); ?>');">
                    <div class="banner-txt">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-space col-two-wrap">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
				<?php 

				$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
				$post_thumbnail_id = $product->get_image_id();
				$wrapper_classes   = apply_filters(
					'woocommerce_single_product_image_gallery_classes',
					array(
						'woocommerce-product-gallery',
						'woocommerce-product-gallery--' . ( $post_thumbnail_id ? 'with-images' : 'without-images' ),
						'woocommerce-product-gallery--columns-' . absint( $columns ),
						'images',
					)
				);
				?>
					<div class="product-single-gallery <?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>" data-columns="<?php echo esc_attr( $columns ); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">
						<div class="woocommerce-product-gallery__wrapper">
							<?php
							if ( $post_thumbnail_id ) {
								$html = wc_get_gallery_image_html( $post_thumbnail_id, true );
							} else {
								$html  = '<div class="woocommerce-product-gallery__image--placeholder">';
								$html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
								$html .= '</div>';
							}

							echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped

							do_action( 'woocommerce_product_thumbnails' );
							?>
						</div>
					</div>
            </div>
			<div class="col-sm-12">
				<p>
					<?php echo $post->post_content; ?>
				</p>
			</div>
        </div>
    </div>
</section>
<?php endwhile; ?>

<?php get_footer(); ?>