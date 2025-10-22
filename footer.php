<!-- footer start -->
<footer class="footer">
    <div class="container footer-bg-color">
        <div class="footer-top">
            <div class="row px-md-3 pt-md-3 px-2 pt-2">

                <!-- যোগাযোগ -->
                <div class="col-md-4 col-12 bg-light">
                    <div class="col-content">
                        <div class="top-title py-2 border-bottom border-dark mb-3">
                            <p class="mb-0 text-dark">যোগাযোগ</p>
                        </div>
                        <?php get_template_part('/parts/contact-information'); ?>
                    </div>
                </div>

                <!-- গুগল ম্যাপ -->
                <div class="col-md-4 col-12 bg-light px-0 overflow-hidden">
                    <div class="top-title py-2 border-bottom border-dark mb-3">
                        <p class="mb-0 text-dark"> গুগল ম্যাপ </p>
                    </div>

                    <div class="col-content p-2">
                        <div class="iframe-content">
                            <iframe src="<?php echo get_theme_mod('npa_footer_map_url', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.074605392548!2d90.40690178576378!3d23.744718834022915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c79e9e166e75%3A0xe8bfc6d579d79114!2swebnewsdesign.com!5e0!3m2!1sen!2sbd!4v1759137110236!5m2!1sen!2sbd'); ?>" class="d-block w-100 rounded-3" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

                <!-- পলিসি মেনু -->
                <div class="col-md-4 col-12 bg-light">
                    <div class="top-title py-2 border-bottom border-dark mb-3">
                        <p class="mb-0 text-dark"> পলিসি মেনু </p>
                    </div>


                    <?php
                    function policy_menu_fallback()
                    { ?>
                        <ul class="policy-menu list-unstyled">
                            <li> <a href="<?php echo esc_url(admin_url('nav-menus.php')) ?>" class="text-dark"> প্রাইভেসি পলিসি </a> </li>
                            <li> <a href="<?php echo esc_url(admin_url('nav-menus.php')) ?>" class="text-dark"> টার্মস অ্যান্ড কন্ডিশন </a> </li>
                        </ul>
                    <?php }
                    ?>


                    <?php
                    wp_nav_menu(array(
                        'theme_location'    => 'policy-menu',
                        'menu_class'        => 'policy-menu list-unstyled',
                        'container'         => false,
                        'fallback_cb'       => 'policy_menu_fallback',
                    ));
                    ?>

                </div>
            </div>
        </div>
        <div class="footer-bottom text-center py-md-3 py-2">
            <p class="text-light mb-0 text-center">Design & Developed by: <a class="text-warning" href="https://www.webnewsdesign.com/" target="_blank">webnewsdesign.com</a></p>
        </div>
    </div>
</footer>
<!-- footer end -->




<?php wp_footer(); ?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('.gallery-wrap').forEach(gallery => {
            lightGallery(gallery, {
                selector: '.card-item',
                download: false
            });
        });
    });
</script>
</body>

</html>