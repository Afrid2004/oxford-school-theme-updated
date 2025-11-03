<div class="top-title mb-2">
    <p class="mb-0">
        <a href="<?php echo the_permalink(252); ?>" class="bg-info text-center text-light py-1 d-block">নোটিশ</a>
    </p>
</div>
<ul class="list-group list-group-two list-group-three">
    <?php
    $notices = get_posts(
        array(
            'post_type' => 'notice',
            'order' => 'DESC',
            'posts_per_page' => 10,
            'fields' => 'ids',
            'no_found_rows' => true,
            'update_post_meta_cache' => false,
            'update_post_term_cache' => false,
        )
    );

    if ($notices) {
        foreach ($notices as $notice) { ?>

            <li class="list-group-item d-flex flex-column">
                <h5>
                    <a href="<?php echo esc_url(get_permalink($notice)); ?>" class="text-dark">
                        <?php echo esc_html(get_the_title($notice)); ?>
                    </a>
                </h5>
                <small class="text-secondary"><?php echo convert_to_bangla(get_the_time('g:i a, j F Y', $notice)); ?></small>
            </li>
        <?php }
    }
    ?>
    <li class="list-group-item position-sticky border" style="bottom : 0px;">
        <h5 class="mb-0">
            <a href="<?php echo the_permalink(252); ?>"
                class="d-flex justify-content-between align-items-center text-info">সব নোটিশ দেখুন <i
                    class="fa-solid fa-arrow-right notice-arrow"></i></a>
        </h5>
    </li>
</ul>