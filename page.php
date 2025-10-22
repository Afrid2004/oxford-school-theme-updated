<?php get_header(); ?>

<!-- body start -->
<div class="container bg-light py-3 pb-3">
    <?php get_template_part('/parts/breadcumbs'); ?>
    <div class="row pb-5">
        <div class="col-md-8">
            <?php
            if (have_posts()) : while (have_posts()) : the_post();
            ?>


                    <?php
                    $thumb_id = get_post_thumbnail_id(get_the_ID());
                    $alt_text = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('large', array(
                            'class' => 'img-fluid page-img mb-3',
                            'alt'   => $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title())
                        ));
                    }
                    ?>

                    <?php
                    $image_caption = get_field('image_caption');
                    if (!empty($image_caption)) { ?>
                        <span class="py-md-3 py-2 d-block text-secondary">
                            <?php echo $image_caption; ?>
                        </span>
                    <?php }

                    ?>



                    <div class="page-content border-bottom border-1 border-dark-subtile mb-3">
                        <h1><?php the_title(); ?></h1>
                        <small class="text-secondary">প্রকাশ :
                            <?php echo convert_to_bangla(get_the_time('g:i a, j F Y')); ?></small>
                    </div>
                    <div class="notice-text">
                        <p class="mb-0"><?php the_content(); ?></p>
                    </div>

            <?php
                endwhile;
            endif;
            ?>
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