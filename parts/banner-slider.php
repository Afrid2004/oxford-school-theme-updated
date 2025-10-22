<div id="carouselExampleIndicators" class="carousel slide carousel-1" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <?php
        $i = 0;
        $banner = new WP_Query(array(
            'post_type' => 'slider',
            'order'     => 'ASC'
        ));
        while ($banner->have_posts()): $banner->the_post();
        ?>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $i == 0 ? 'active' : ''; ?>">
            </button>
        <?php
            $i++;
        endwhile;
        wp_reset_postdata();
        ?>
    </div>
    <div class="carousel-inner">
        <?php
        $j = 0;
        $banner = new WP_Query(array(
            'post_type'         => 'slider',
            'posts_per_page'    =>  10,
            'order'             => 'DESC'
        ));
        while ($banner->have_posts()): $banner->the_post();
        ?>
            <div class="carousel-item <?php echo $j == 0 ? 'active' : ''; ?>">
                <a href="<?php the_permalink(); ?>">

                    <?php
                    $thumb_id = get_post_thumbnail_id(get_the_ID());
                    $alt_text = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('banner-image-size-856x460', array(
                            'class' => 'img-fluid',
                            'alt'   => $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title())
                        ));
                    } else { ?>
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/banner-demo-image-856x460.jpg' ?>" alt="<?php echo $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title()); ?>">
                    <?php }

                    ?>
                </a>
                <a href="<?php the_permalink(); ?>" class="carousel-content position-absolute d-block bottom-0 z-1 w-100 p-2">
                    <p class="mb-0 text-light text-center"><?php the_title(); ?></p>
                </a>
            </div>
        <?php
            $j++;
        endwhile;
        wp_reset_postdata();
        ?>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true">
            <i class="fa-solid fa-angle-left"></i>
        </span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true">
            <i class="fa-solid fa-angle-right"></i>
        </span>
        <span class="visually-hidden">Next</span>
    </button>
</div>