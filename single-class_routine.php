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
                        $pdf = get_field('class_routine_pdf');

                        if ($pdf) { ?>
                            <a href="<?php the_permalink(21); ?>" class="text-white btn bg-info mb-3"><i
                                    class="fa-regular fa-calendar-days"></i> সকল শ্রেণির রুটিন দেখুন
                            </a>
                            <iframe class="single-iframe" src="<?php echo esc_url($pdf) ?>?inline=1" frameborder="0"
                                style="width:100%;height:500px;"></iframe>
                        <?php } else { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <p class="mb-0"><i class="fa-solid fa-triangle-exclamation"></i> কোন রুটিন পাওয়া যায়নি।</p>

                            </div>
                            <a href="<?php the_permalink(21); ?>" class="text-white btn bg-info"><i
                                    class="fa-regular fa-calendar-days"></i> সকল শ্রেণির রুটিন দেখুন
                            </a>
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
                <?php get_template_part('parts/notice') ?>
            </div>
        </div>
    </div>



</div>
<!-- body end -->

<?php get_footer(); ?>