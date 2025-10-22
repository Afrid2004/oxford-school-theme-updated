<?php get_header()
/**
 * Template Name: যোগাযোগ
 */
?>

<!-- body start -->
<div class="container bg-light py-3">
    <?php get_template_part('/parts/breadcumbs'); ?>
    <section class="banner-section">
        <div class="row mb-md-4 mb-2">
            <div class="col-lg-8 mb-3">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <div class="contact-topper position-sticky" style="top: 1rem;">
                            <div class="top-title bg-info text-center text-light py-1 mb-3">
                                <p class="mb-0">যোগাযোগের ঠিকানা</p>
                            </div>

                            <?php get_template_part('/parts/contact-information'); ?>

                            <div class="iframe-content">
                                <iframe src="<?php echo get_theme_mod('npa_footer_map_url', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.074605392548!2d90.40690178576378!3d23.744718834022915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c79e9e166e75%3A0xe8bfc6d579d79114!2swebnewsdesign.com!5e0!3m2!1sen!2sbd!4v1759137110236!5m2!1sen!2sbd'); ?>" class="d-block w-100 rounded-3" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="top-title bg-info text-center text-light py-1 mb-3">
                            <p class="mb-0">বার্তা পাঠান</p>
                        </div>
                        <div class="contact-form">
                            <form action="#">
                                <div class="mb-2">
                                    <label for="name" class="form-label">আপনার নাম</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="mb-2">
                                    <label for="email" class="form-label">আপনার ই-মেইল</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="mb-2">
                                    <label for="subject" class="form-label">বিষয়</label>
                                    <input type="text" class="form-control" id="subject" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">আপনার ম্যাসেজ (অপশনাল)</label>
                                    <textarea class="form-control" id="message" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-info text-light px-4">সাবমিট</button>
                            </form>
                        </div>
                    </div>
                </div>
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