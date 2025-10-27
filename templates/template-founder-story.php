<?php
    get_header();
    /**
    * Template Name: প্রতিষ্ঠাতার বানী 
    */
?>

    <!-- body start -->
    <div class="container bg-light pt-3">
        <?php get_template_part('/parts/breadcumbs'); ?>
        <div class="row pb-5">
            <div class="col-lg-8 mb-3">
                <div class="row">
                    <?php
                        $spechOfHead = new WP_Query(array(
                            'post_type'         =>  'founder_story',
                            'posts_per_page'    => 1,
                            'order'             => 'DESC'
                        ));
                        while ($spechOfHead->have_posts()): $spechOfHead->the_post();
                    ?>
                        <div class="col-lg-4 mb-3 px-0">
                            <div class="row mx-1 pb-2">
                                <div class="col-lg-12 mb-3">
                                    <?php the_post_thumbnail('large', array('class' => 'img-fluid w-100')); ?>
                                </div>
                            </div> 
                        </div>
                        <div class="col-lg-8">
                                <div class=" border-bottom border-2 border-info mb-3" style="text-align: justify;">
                                    
                                    <p class="mb-0"><?php the_content(); ?></p>
                                    
                                </div>
                                <div>
                                    <p class="mb-0 fs-4 text-info"><?php echo get_field('headmaster_name') ?></p>
                                    <p class="mb-0">
                                        প্রতিষ্ঠাতা, <?php
                                        $school_name =  get_theme_mod('name-of-school', 'জিয়া ভাই উচ্চ বিদ্যালয়');
                                        echo $school_name;
                                        ?>।
                                    </p>
                                    <p class="mb-0">মোবাইলঃ <?php echo get_field('head_master_mobile_number') ?></p>
                                </div>
                            
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    ?>
                </div>
            </div>
            <div class="col-lg-4">
                   <div class="top-content">
                       <?php get_template_part('parts/notice'); ?>
                   </div>
            </div>
        </div>
        
        <section class="gallery-section pt-2 pb-5">
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
                                'order'             => 'ASC'
                            ));
                            while ($gallery->have_posts()): $gallery->the_post();
                            ?>

                                <div class="card-item swiper-slide" data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" data-sub-html="<p><?php the_title(); ?></p>" >
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
    </div>
    <!-- body end -->
     

<?php get_footer(); ?>