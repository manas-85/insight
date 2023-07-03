<?php
    get_header();
    global $assets_uri, $post;

?>
    <section>
        <article class="inner-page">
		<?php
            while ( have_posts() ) : the_post();
            the_content();
            endwhile;
            ?>
        </article>
    </section>
<?php get_footer(); ?>