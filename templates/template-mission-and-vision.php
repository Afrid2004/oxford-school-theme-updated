<?php 
/**
 * Template Name: লক্ষ্য ও উদ্দেশ্য
 */
get_header();
?>

<div class="container bg-light py-3">
    <?php get_template_part('/parts/breadcumbs'); ?>
    <section class="banner-section">
        <div class="row mb-md-4 mb-2">
            <div class="col-lg-8 mb-3">
                <div class="row">
                    <div class="col-12 mb-2">
                        <div class="top-title bg-info text-center text-light py-1 mb-2">
                            <p class="mb-0">প্রতিষ্ঠানের লক্ষ্য</p>
                        </div>

                        <div class="row">
                            <?php 
                            $missionAndVision = new WP_Query(array(
                                'post_type'      => 'mission_and_vision',
                                'order'          => 'DESC',
                                'posts_per_page' => 1
                            ));

                            while($missionAndVision->have_posts()): $missionAndVision->the_post();
                                $institute_mission = get_field('institute_mission');
                                $institute_mission_image = get_field('institute_mission_image');
                            ?>
                            <div class="col-md-8">
                                <p><?php if(!empty($institute_mission)){
                                    echo $institute_mission;
                                }else{echo 'কোন ডেসক্রিপশন পাওয়া যায় নি।';} ?></p>
                            </div>
                            <div class="col-md-4">
                                <?php if(!empty($institute_mission_image)) { ?>
                                    <img class="img-fluid w-100" src="<?php echo esc_url($institute_mission_image['url']); ?>" alt="<?php echo $institute_mission_image['alt']; ?>">
                                <?php } else { ?>
                                    <img class="img-fluid w-100" src="<?php echo get_template_directory_uri() . '/assets/images/news-and-event-image-420x250.jpg'; ?>" alt="প্রতিষ্ঠানের লক্ষ্য">
                                <?php } ?>
                            </div>
                            <?php 
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="top-title bg-info text-center text-light py-1 mb-2">
                            <p class="mb-0">প্রতিষ্ঠানের উদ্দেশ্য</p>
                        </div>

                        <div class="row">
                            <?php 
                            $missionAndVision = new WP_Query(array(
                                'post_type'      => 'mission_and_vision',
                                'order'          => 'DESC',
                                'posts_per_page' => 1
                            ));

                            while($missionAndVision->have_posts()): $missionAndVision->the_post();
                                $institute_vision = get_field('institute_vision');
                                $institute_vision_image = get_field('institute_vision_image');
                            ?>
                            <div class="col-md-8">
                                 <p><?php if(!empty($institute_vision)){ 
                                    echo $institute_vision;
                                }else{echo 'কোন ডেসক্রিপশন পাওয়া যায় নি।' ;} ?></p>
                            </div>
                            <div class="col-md-4">
                                <?php if(!empty($institute_vision_image)) { ?>
                                    <img class="img-fluid w-100" src="<?php echo esc_url($institute_vision_image['url']); ?>" alt="<?php echo $institute_vision_image['alt']; ?>">
                                <?php } else { ?>
                                    <img class="img-fluid w-100" src="<?php echo get_template_directory_uri() . '/assets/images/news-and-event-image-420x250.jpg'; ?>" alt="প্রতিষ্ঠানের উদ্দেশ্য">
                                <?php } ?>
                            </div>
                            <?php 
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="top-content position-sticky" style="top: 1rem;">
                    <?php get_template_part('parts/notice'); ?>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('parts/gallery'); ?>
</div>

<?php get_footer(); ?>
