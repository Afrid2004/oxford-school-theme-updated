<?php get_header()
/**
 * Template Name: ফটো গ্যালারি
 */
?>
<!-- body start -->
<div class="container bg-light py-3">
    <?php get_template_part('/parts/breadcumbs'); ?>

    <section class="banner-section">
        <div class="row">
            <div class="col-md-8 col-12 mb-3">
                <div class="top-title bg-info text-center text-light py-1 mb-2">
                    <p class="mb-0"> ফটো গ্যালারি </p>
                </div>
                <div class="all-photos mt-3">
                    <div class="gallery-wrap">
                        <div class="row" id="lightGallery">
                            <?php
                            $gallery = new WP_Query(array(
                                'post_type' => 'photo_gallery',
                                'order'     => 'DESC',
                            ));
                            while ($gallery->have_posts()): $gallery->the_post();
                            ?>
                                <div class="col-lg-4 col-md-6 col-12 mb-3">
                                    <div class="card-item swiper-slide" data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" data-sub-html="<p><?php the_title(); ?></p>">
                                        <div class="sec-img-content position-relative">
                                            <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
                                            <div class="sec-text-content position-absolute bottom-0 z-1 w-100 p-1">
                                                <p class="mb-0 text-light" id="imgCaption"><?php the_title(); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>



            </div>
            <div class="col-md-4 col-12">
                <div class="top-content position-sticky" style="top: 1rem;">
                    <?php get_template_part('parts/notice'); ?>
                </div>
            </div>
        </div>
    </section>

</div>
<!-- body end -->

<?php get_footer() ?>