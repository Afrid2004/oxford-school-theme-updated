<?php
get_header();
?>

<!-- Search Page Start -->
<div class="container-fluid mb-md-5 mb-3">
    <div class="container bg-white py-3">
        <?php get_template_part('/parts/breadcumbs'); ?>
        <div class="row specific-margin-cat-page">
        </div>
        <div class="row cat-page-margin">
            <!--start per_templat_matter-->
            <div class="col-md-8 col-12">
                <h6 class="fw-bold"> আপনি "<?php echo get_search_query(); ?>" কী ওয়ার্ড দিয়ে সার্চ করেছেন।
                    ফলাফল পাওয়া গেছে
                    <?php
                        $all_search_result = new WP_Query("s=$s&showposts=-1");
                        $count = $all_search_result->post_count;
                        echo $count . '';
                        wp_reset_postdata();
                        ?>টি
                </h6>

                <hr class="hr-rule-color">

                <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post(); ?>
                <!-- per item start  -->
                <div class="row mb-3">
                    <div class="col-2 pe-0">

                        <div class="overflow-hidden position-relative">
                            <a href="<?php the_permalink(); ?>">
                                <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('thumbnail', array('class' => 'img-fluid'));
                                            } else { ?>
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/custom-thumb-150x150.jpg' ?>"
                                    alt="photo" class="img-fluid">
                                <?php } ?>
                            </a>
                            
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="d-none d-md-block">
                            <div class="d-flex justify-content-between mb-3">
                                <small>
                                    <a href="<?php the_permalink(); ?>" class="text-decoration-none text-danger">
                                        <?php get_template_part('includes/get-specific-cat-name'); ?>
                                    </a>
                                </small>
                                <small class="text-secondary">
                                    <?php
                                            $time_diff = human_time_diff(get_the_time('U'), current_time('timestamp'));
                                            echo convert_to_bangla($time_diff) . ' আগে';
                                            ?>
                                </small>
                            </div>
                        </div>
                        <div>
                            <h4 class="mb-md-3 mb-1 heading-hover">
                                <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark fw-bold search-font-size">
                                    <?php 
                                                    $title = get_the_title(); 
                                                    $trimp_words = wp_trim_words($title, 8, '...');
                                                    $sub_heading = get_field('subheading');
                                                    if(!empty($sub_heading)){
                                                        echo '<span class="text-danger">' . $sub_heading .  ' / '. '</span>';
                                                    }
                                                    echo $trimp_words;
                                                ?>
                                </a>
                            </h4>
                            <p>
                                
                                <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark d-none d-md-block">
                                    <?php
                                                $content = get_the_content();
                                                $trim_words = wp_trim_words($content, 18, '...');
                                                echo $trim_words;
                                                ?>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <hr class="hr-rule-color">
                <!-- per item end  -->
                <?php endwhile;
                    endif;
                    wp_reset_postdata(); ?>
            </div>

            <!-- Last news start -->
            <div class="col-md-4 col-12">
                <?php get_template_part('parts/notice'); ?>
            </div>
            <!-- Last news end -->
        </div>
    </div>
</div>
<!-- Search Page Start -->

<?php get_footer();