<?php get_header()
/**
 * Template Name: ভিডিও গ্যালারি
 */
?>
<!-- body start -->
<div class="container bg-light py-3">
    <?php get_template_part('/parts/breadcumbs'); ?>
    <div class="committee-banner">
        <div class="text-center py-5 text-light banner-text">
            <h1>ভিডিও গ্যালারি</h1>
        </div>
    </div>
    <section class="banner-section">
        <div class="row">
            <div class="col-lg-8 mb-3">
                <div class="top-title bg-info text-center text-light py-1 mb-2">
                    <p class="mb-0">সব ভিডিও</p>
                </div>
                <?php
                //gallery part
                get_template_part('parts/banner-slider');
                ?>
            </div>
            <div class="col-lg-4">
                <div class="top-content position-sticky" style="top: 1rem;">
                    <?php
                    //gallery part
                    get_template_part('parts/notice');
                    ?>
                </div>
            </div>
        </div>
    </section>

    <?php
    //gallery part
    get_template_part('parts/gallery');
    ?>
</div>
<!-- body end -->

<?php get_footer() ?>