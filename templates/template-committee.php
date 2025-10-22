<?php
get_header();
/**
 * Template Name: ম্যানেজিং কমিটি
 */

?>

<!-- body start -->
<div class="container bg-light py-3">
<?php get_template_part('/parts/breadcumbs'); ?>
    <div class="row">
        <div class="col-lg-3">
            <div class="ex-container position-sticky" style="top: 1rem;">
                <div class="sec-title bg-info text-center py-1 text-light mb-3">
                    <p class="mb-0">প্রাক্তন কমিটি</p>
                </div>
                <ul class="list-group list-group-two list-group-three d-none d-md-flex" id="list-4">
                    <li><a href="./committee.html" class="list-group-item active">কমিটি ২০২৫</a></li>
                    <li><a href="./committee2024.html" class="list-group-item">কমিটি ২০২৪</a></li>
                    <li><a href="./committee2024.html" class="list-group-item">কমিটি ২০২৩</a></li>
                    <li><a href="./committee2024.html" class="list-group-item">কমিটি ২০২২</a></li>
                    <li><a href="./committee2024.html" class="list-group-item">কমিটি ২০২১</a></li>
                    <li><a href="./committee2024.html" class="list-group-item">কমিটি ২০২০</a></li>
                    <li><a href="./committee2024.html" class="list-group-item">কমিটি ২০১৯</a></li>
                    <li><a href="./committee2024.html" class="list-group-item">কমিটি ২০১৮</a></li>
                    <li><a href="./committee2024.html" class="list-group-item">কমিটি ২০১৭</a></li>
                    <li><a href="./committee2024.html" class="list-group-item">কমিটি ২০১৬</a></li>
                    <li><a href="./committee2024.html" class="list-group-item">কমিটি ২০১৫</a></li>
                </ul>
                <select class="form-select form-select-lg mb-3 d-md-none" id="committeeSelect" aria-label=".form-select-lg example">
                    <option selected value="./committee.html">কমিটি ২০২৫</option>
                    <option value="./committee2024.html">কমিটি ২০২৪</option>
                    <option value="./committee2024.html">কমিটি ২০২৩</option>
                    <option value="./committee2024.html">কমিটি ২০২২</option>
                    <option value="./committee2024.html">কমিটি ২০২১</option>
                    <option value="./committee2024.html">কমিটি ২০২০</option>
                    <option value="./committee2024.html">কমিটি ২০১৯</option>
                    <option value="./committee2024.html">কমিটি ২০১৮</option>
                    <option value="./committee2024.html">কমিটি ২০১৭</option>
                    <option value="./committee2024.html">কমিটি ২০১৬</option>
                    <option value="./committee2024.html">কমিটি ২০১৫</option>
                </select>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="sec-title bg-info text-center py-1 text-light mb-3">
                <p class="mb-0">পূর্ণাঙ্গ কমিটি</p>
            </div>

            <div class="committee-content">
                <!--committee 25-->
                <div id="committee25">
                    <div class="row">
                        <?php
                        $committee = new WP_Query(array(
                            'post_type'         =>  'committee',
                            'posts_per_page'    => 9,
                            'order'             => 'ASC'
                        ));
                        while ($committee->have_posts()): $committee->the_post();
                        ?>
                            <div class="col-lg-6 mb-4">
                                <div class="cmt-card rounded-2">
                                    <div class="pt-3 pb-1 px-3 committee-img">
                                        <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
                                    </div>
                                    <div class="py-2 px-3">
                                        <p class="mb-0 fw-bold fs-5"> <?php the_title(); ?> </p>
                                        <p class="mb-0"> <?php echo get_field('position'); ?> </p>
                                        <p class="mb-0"> মোবাইলঃ <?php echo get_field('mobile_number'); ?> </p>
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
        <div class="col-lg-3">
            <div class="ex-container position-sticky" style="top: 1rem;">
                <div class="top-content">
                    <?php
                    //gallery part
                    get_template_part('parts/notice');
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- body end -->

<?php get_footer(); ?>