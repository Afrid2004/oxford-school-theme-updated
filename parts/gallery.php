<div class="container bg-light">

    <div class="container bg-light px-0">
        <!-- gallery start -->
        <section class="gallery-section pb-5">
            <div class="sec-title bg-info text-center py-1 text-light mb-2">
                <p class="mb-0">ফটো গ্যালারি</p>
            </div>
            <div class="position-relative gallery-wrap">
                <div class="gallery-slider swiper">
                    <div class="slider-wrapper">
                        <div class="card-list swiper-wrapper" id="lightGallery">
                            <?php
                            $gallery = new WP_Query(array(
                                'post_type'         =>  'photo_gallery',
                                'order'             => 'DESC'
                            ));
                            while ($gallery->have_posts()): $gallery->the_post();
                            ?>

                                <div class="card-item swiper-slide" data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" data-sub-html="<p><?php the_title(); ?></p>">
                                    <div class="sec-img-content position-relative">
                                        <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
                                        <div class="sec-text-content position-absolute bottom-0 z-1 w-100 p-1">
                                            <p class="mb-0 text-light" id="imgCaption"> <?php the_title(); ?> </p>
                                        </div>
                                    </div>
                                </div>

                            <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </section>
        <!-- gallery end -->
    </div>
</div>