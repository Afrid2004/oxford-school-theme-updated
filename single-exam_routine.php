<?php get_header(); ?>

<!-- body start -->
<div class="container bg-light py-3 pb-3">
    <?php get_template_part('/parts/breadcumbs'); ?>
    <div class="row pb-5">
        <div class="col-md-8">
            <?php

            if (have_posts()):
                while (have_posts()):
                    the_post();
                    ?>

                    <div class="page-content border-bottom border-1 border-dark-subtile mb-3">
                        <h1><?php the_title(); ?></h1>
                        <small class="text-secondary">প্রকাশ :
                            <?php echo convert_to_bangla(get_the_time('g:i a, j F Y')); ?></small>
                    </div>
                    <div class="routine-content">
                        <?php
                        $pdf = get_field('exam_routine_pdf');

                        if ($pdf) { ?>
                            <iframe class="single-iframe" src="<?php echo esc_url($pdf) ?>?inline=1" frameborder="0"
                                style="width:100%;height:500px;"></iframe>
                        <?php } else { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <p class="mb-0"><i class="fa-solid fa-triangle-exclamation"></i> কোন পরীক্ষার রুটিন রুটিন পাওয়া
                                    যায়নি।</p>

                            </div>
                        <?php }
                        ?>

                    </div>

                    <?php
                endwhile;
            endif;
            ?>
        </div>
        <div class="col-md-4">
            <div class="top-content position-sticky" style="top : 1rem;">
                <div class="routine-list mb-md-4 mb-3">
                    <div class="top-title mb-2">
                        <p class="mb-0">
                            <a href="<?php echo the_permalink(252); ?>"
                                class="bg-info text-center text-light py-1 d-block">পরীক্ষার রুটিন</a>
                        </p>
                    </div>
                    <ul class="list-group list-group-two list-group-three rounded-0">
                        <?php
                        $currentPostId = 0;
                        if (is_single()) {
                            $currentPostId = get_the_ID();
                        }
                        $examList = get_posts(
                            array(
                                'post_type' => 'exam_routine',
                                'order' => 'DESC',
                                'posts_per_page' => 10,
                                'fields' => 'ids',
                                'post__not_in' => array($currentPostId),
                                'no_found_rows' => true,
                                'update_post_meta_cache' => false,
                                'update_post_term_cache' => false,
                            )
                        );

                        if ($examList) {
                            foreach ($examList as $examLi) { ?>

                                <li class="list-group-item d-flex flex-column">
                                    <h5>
                                        <a href="<?php echo esc_url(get_permalink($examLi)); ?>" class="text-dark">
                                            <?php echo esc_html(get_the_title($examLi)); ?>
                                        </a>
                                    </h5>
                                    <small
                                        class="text-secondary"><?php echo convert_to_bangla(get_the_time('g:i a, j F Y', $examLi)); ?></small>
                                </li>
                            <?php }
                        }
                        ?>
                        <li class="list-group-item position-sticky border" style="bottom : 0px;">
                            <p class="mb-0">
                                <a href="<?php the_permalink(22); ?>"
                                    class="d-flex justify-content-between align-items-center text-info">সকল শ্রেণির
                                    পরীক্ষার রুটিন দেখুন <i class="fa-solid fa-arrow-right notice-arrow"></i>
                                </a>
                            </p>
                        </li>
                    </ul>
                </div>
                <?php get_template_part('parts/notice') ?>
            </div>
        </div>
    </div>



</div>
<!-- body end -->

<?php get_footer(); ?>