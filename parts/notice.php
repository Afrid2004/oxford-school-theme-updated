<div class="top-title bg-info text-center text-light py-1 mb-2">
    <p class="mb-0">নোটিশ</p>
</div>
<ul class="list-group list-group-two list-group-three">
    <?php
    $notice = new WP_Query(
        array(
            'post_type' =>  'notice',
            'order'     => 'DESC'
        )
    );
    while ($notice->have_posts()): $notice->the_post();
    ?>
        <li class="list-group-item d-flex flex-column">
            <h5> <a href="<?php the_permalink(); ?>" class="text-dark"><?php the_title(); ?></a> </h5>
            <small class="text-secondary"><?php echo convert_to_bangla(get_the_time('g:i a, j F Y')); ?></small>
        </li>
    <?php
    endwhile;
    wp_reset_postdata();
    ?>
</ul>