<?php get_header(); ?>

<!-- body start -->
<div class="container bg-light py-3 pb-3">
    <?php get_template_part('/parts/breadcumbs'); ?>
    <div class="row pb-5">
        <div class="col-md-8">
          <div class="top-title bg-info text-center text-light py-1 mb-2">
              <p class="mb-0"> সব পোস্ট </p>
          </div>
          <div class="row">
            <?php
                  $original_id = 1;
                    $category_id = intval(get_theme_mod("rjs_category_dropdown_{$original_id}"));
                    if (empty($category_id)) {
                        $category_id = 1;
                    }
                $news_and_event = new WP_Query(array(
                    'cat'               => $category_id,
                    'order'             => 'DESC'
                ));
                while ($news_and_event->have_posts()): $news_and_event->the_post();
            ?>

                <div class="col-md-4">
                
                    <div class="notice-title mb-2">
                        <a href="<?php the_permalink(); ?>" class="d-block">

                            <?php
                                $thumb_id = get_post_thumbnail_id(get_the_ID());
                                        $alt_text = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('news-and-event-image-420x250', array(
                                                'class' => 'img-fluid mb-md-2 mb-1 w-100',
                                                'alt'   => $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title())
                                            ));
                                        } else { ?>
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/news-and-event-image-420x250.jpg' ?>" alt="<?php echo $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title()); ?>" class="mb-md-2 mb-1 img-fluid w-100">
                                        <?php } ?>

                                        <h5 class="text-dark"> <?php the_title(); ?> </h5>

                                    </a>
                    </div>

                    <div class="page-content mb-3">
                        <small class="text-secondary">প্রকাশ :
                            <?php echo convert_to_bangla(get_the_time('g:i a, j F Y')); ?></small>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            ?>
          </div>
        </div>
        <div class="col-md-4">
            <div class="top-content position-sticky" style="top : 1rem;">
                <?php get_template_part('parts/notice') ?>
            </div>
        </div>
    </div>



</div>
<!-- body end -->

<?php get_footer(); ?>