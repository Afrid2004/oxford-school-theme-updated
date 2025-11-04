<?php
/**
 * Template Name: ক্লাস রুটিন
 */
get_header();

?>

<!-- body start -->
<div class="container bg-light py-3 pb-3">
    <?php get_template_part('/parts/breadcumbs'); ?>
    <div class="row pb-5">
        <div class="col-md-8">
            <div class="sec-title bg-info text-center py-1 text-light mb-2">
                <p class="mb-0">সব রুটিন</p>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-bordered table-white notice-table">
                    <thead>
                        <tr>
                            <th>ক্রমিক নং</th>
                            <th>শ্রেণি</th>
                            <th>প্রকাশের তারিখ</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        if (get_query_var('page')) {
                            $paged = get_query_var('page');
                        }

                        $allRoutine = new WP_Query(array(
                            'post_type' => 'class_routine',
                            'posts_per_page' => 10,
                            'order' => 'DESC',
                            'update_post_meta_cache' => false,
                            'update_post_term_cache' => false,
                            'paged' => $paged
                        ));

                        $totalPosts = $allRoutine->found_posts;
                        $counter = $totalPosts - (($paged - 1) * 10);

                        if ($allRoutine->have_posts()):
                            while ($allRoutine->have_posts()):
                                $allRoutine->the_post();

                                $pdf_file = get_field('class_routine_pdf');

                                ?>
                                <tr>
                                    <td><?php echo convert_to_bangla($counter); ?></td>
                                    <td class="notice-table-title">
                                        <a href="<?php echo esc_url(the_permalink()); ?>" class="text-dark">
                                            <?php echo esc_html(the_title()); ?>
                                        </a>
                                    </td>
                                    <td>
                                        <p class="mb-0">
                                            <?php echo convert_to_bangla(get_the_time('j F Y')); ?>
                                        </p>
                                        <small class="mb-0">
                                            <?php echo convert_to_bangla(get_the_time('g:i a')); ?>
                                        </small>
                                    </td>
                                </tr>
                                <?php
                                $counter--;
                            endwhile;
                        else:
                            echo '<tr><td colspan="7" class="text-center">কোন তথ্য পাওয়া যায়নি।</td></tr>';
                        endif;
                        ?>
                    </tbody>
                </table>
            </div>

            <!-- ? Bootstrap Pagination -->
            <?php
            $big = 999999999;
            $pagination_links = paginate_links(array(
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format' => '?paged=%#%',
                'current' => max(1, $paged),
                'total' => $allRoutine->max_num_pages,
                'type' => 'array',
                'prev_text' => '&laquo;',
                'next_text' => '&raquo;',
            ));

            if (is_array($pagination_links)):
                ?>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mt-4">
                        <?php foreach ($pagination_links as $link): ?>
                            <li class="page-item <?php echo strpos($link, 'current') !== false ? 'active' : ''; ?>">
                                <?php echo str_replace('page-numbers', 'page-link', $link); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            <?php endif; ?>

            <?php wp_reset_postdata(); ?>
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