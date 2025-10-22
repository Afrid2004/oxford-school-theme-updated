<?php get_header(); ?>

<!-- body start -->
<div class="container bg-light py-3 pb-3">
    <?php get_template_part('/parts/breadcumbs'); ?>
    <div class="row pb-5">
        <div class="col-md-8">
            <?php
            if (have_posts()) : while (have_posts()) : the_post();
            ?>

                    <div class="page-img mb-3">
                        <?php
                        $thumb_id = get_post_thumbnail_id(get_the_ID());
                        $alt_text = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('large', array(
                                'class' => 'img-fluid',
                                'alt'   => $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title())
                            ));
                        } else { ?>
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/banner-demo-image-856x460.jpg' ?>"
                                alt="<?php echo $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title()); ?>">
                        <?php }
                        ?>
                        <span class="py-md-3 py-2 d-block text-secondary">
                            <?php
                            $image_caption = get_field('image_caption');
                            echo $image_caption;
                            ?>
                        </span>

                    </div>
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


    <!-- Section===2 Start  -->
    <div class="container-fluid mb-md-5 mb-3 d-print-none">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h6 class="fw-bold">আরও
                        <div>
                            <hr class="hr-rule-color">
                        </div>
                </div>
            </div>

            <div class="row">
                <?php
                $current_post_id = get_the_ID();
                $current_post_type = get_post_type($current_post_id);

                // কাস্টম ট্যাক্সোনমির টার্মগুলো নিন
                $terms = wp_get_post_terms($current_post_id, 'my_custom_taxonomy');
                $term_ids = array();

                if (!is_wp_error($terms) && !empty($terms)) {
                    foreach ($terms as $term) {
                        $term_ids[] = $term->term_id;
                    }
                }

                // WP_Query এর আর্গুমেন্ট
                $args = array(
                    'post_type'      => $current_post_type, // অথবা সরাসরি 'my_custom_post'
                    'posts_per_page' => 4,
                    'post__not_in'   => array($current_post_id),
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                );

                // যদি টার্ম থাকে, ট্যাক্সোনমি কুয়েরি যোগ করুন
                if (!empty($term_ids)) {
                    $args['tax_query'] = array(
                        array(
                            'taxonomy' => 'my_custom_taxonomy',
                            'field'    => 'term_id',
                            'terms'    => $term_ids,
                        ),
                    );
                }

                $related_query = new WP_Query($args);

                if ($related_query->have_posts()) {
                    while ($related_query->have_posts()) {
                        $related_query->the_post();
                        $thumb_id = get_post_thumbnail_id(get_the_ID());
                        $alt_text = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                ?>
                        <!-- per item start  -->
                        <div class="col-md-3 col-12 mb-md-0 mb-3 d-flex align-items-stretch">
                            <div class="border-bottom border-dark shadow position-relative">
                                <div class="overflow-hidden position-relative mb-md-2 mb-1">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('custom-thumb-410x231', array(
                                                'class' => 'img-fluid',
                                                'alt'   => $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title())
                                            ));
                                        } else { ?>
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/banner-demo-image-856x460.jpg' ?>"
                                                alt="<?php echo $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title()); ?>"
                                                class="img-fluid">
                                        <?php } ?>
                                    </a>
                                    <div
                                        class="for-gradient-color position-absolute top-0 start-0 px-2 py-1 text-white w-100 d-flex justify-content-between">
                                        <small><a href="<?php the_permalink(); ?>"
                                                class=" text-decoration-none text-danger d-block">
                                                <?php
                                                // টার্ম নাম দেখানো (যদি থাকে)
                                                $post_terms = wp_get_post_terms(get_the_ID(), 'my_custom_taxonomy');
                                                if (!empty($post_terms) && !is_wp_error($post_terms)) {
                                                    echo esc_html($post_terms[0]->name);
                                                }
                                                ?>
                                            </a></small>
                                        <small>
                                            <a href="<?php the_permalink(); ?>" class=" text-decoration-none text-white">
                                                <?php
                                                $title = get_the_title();
                                                $content = get_post_field('post_content', get_the_ID());
                                                $combined_text = $title . ' ' . $content;

                                                $word_count = str_word_count(strip_tags($combined_text));
                                                $reading_time = ceil($word_count / 200);
                                                $reading_time = $reading_time > 0 ? $reading_time : 1;

                                                // যদি convert_to_bangla() ফাংশন থাকে, তা ব্যবহার করুন, নইলে সরাসরি ইংরেজি দিন
                                                if (function_exists('convert_to_bangla')) {
                                                    echo convert_to_bangla($reading_time) . ' মিনিটে পড়ুন';
                                                } else {
                                                    echo $reading_time . ' মিনিটে পড়ুন';
                                                }
                                                ?>
                                            </a>
                                        </small>
                                    </div>
                                </div>
                                <h5 class="mb-md-2 mb-1 px-2 lh-base">
                                    <a href="<?php the_permalink(); ?>"
                                        class="text-decoration-none text-dark cat-lead-font-size fw-bold">
                                        <?php
                                        $sub_heading = get_field('subheading');
                                        if (!empty($sub_heading)) {
                                            echo '<span class="text-danger">' . esc_html($sub_heading) . ' / </span>';
                                        }
                                        the_title();
                                        ?>
                                    </a>
                                </h5>

                                <small class="text-secondary mb-md-2 mb-1 px-2 d-block">
                                    প্রকাশ : <?php echo convert_to_bangla(get_the_time('g:i a, j F Y')); ?>
                                </small>

                            </div>
                        </div>
                        <!-- per item end  -->
                <?php
                    }
                    wp_reset_postdata();
                } else {
                    echo '<p>কোনো পোস্ট পাওয়া যায়নি।</p>';
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Section===2 End -->



</div>
<!-- body end -->

<?php get_footer(); ?>