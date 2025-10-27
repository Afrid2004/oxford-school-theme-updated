<?php 
get_header();
/**
 * Template Name: অর্জন ও সাফল্য
 */
?>

<div class="container bg-light pt-3">
    <?php get_template_part('/parts/breadcumbs'); ?>
    <div class="row pb-5">
        <div class="col-lg-8 mb-3">
            <div class="sec-title bg-info text-center py-1 text-light mb-2">
                <p class="mb-0">প্রতিষ্ঠানের অর্জন ও সাফল্য</p>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-bordered table-white">
                    <thead>
                        <tr>
                            <th>ক্রমিক নং</th>
                            <th>সাফল্যের বিষয়</th>
                            <th>ক্ষেত্র</th>
                            <th>শিক্ষার্থীর নাম/দল</th>
                            <th>অর্জনের তারিখ</th>
                            <th>স্তর/পর্যায়</th>
                            <th>ফলাফল/পুরস্কার</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php 
                    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                    if ( get_query_var('page') ) {
                        $paged = get_query_var('page');
                    }

                    $dynamicTable = new WP_Query(array(
                        'post_type'      => 'achieve_and_success',
                        'posts_per_page' => 5,
                        'order'          => 'DESC',
                        'paged'          => $paged
                    ));
                    
                    $totalPosts = $dynamicTable->found_posts;
                    $counter = $totalPosts - ( ($paged - 1) * 5 );

                    if ( $dynamicTable->have_posts() ) :
                        while( $dynamicTable->have_posts() ) : $dynamicTable->the_post();

                            $achieve_and_success_field   = get_field('achieve_and_success_field');
                            $student_name_team           = get_field('student_name_team');
                            $achieve_date                = get_field('achieve_date');
                            $level_stage                 = get_field('level_stage');
                            $result_award                = get_field('result_award');
                    ?>
                        <tr>
                            <td><?php echo $counter; ?></td>
                            <td><?php the_title(); ?></td>
                            <td><?php echo !empty($achieve_and_success_field) ? $achieve_and_success_field : '-'; ?></td>
                            <td><?php echo !empty($student_name_team) ? $student_name_team : '-'; ?></td>
                            <td><?php echo !empty($achieve_date) ? $achieve_date : '-'; ?></td>
                            <td><?php echo !empty($level_stage) ? $level_stage : '-'; ?></td>
                            <td><?php echo !empty($result_award) ? $result_award : '-'; ?></td>
                        </tr>
                    <?php 
                        $counter--;
                        endwhile;
                    else:
                        echo '<tr><td colspan="7" class="text-center">???? ???? ????? ?????</td></tr>';
                    endif;
                    ?>
                    </tbody>
                </table>
            </div>

            <!-- ? Bootstrap Pagination -->
            <?php
            $big = 999999999; 
            $pagination_links = paginate_links( array(
                'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format'    => '?paged=%#%',
                'current'   => max( 1, $paged ),
                'total'     => $dynamicTable->max_num_pages,
                'type'      => 'array',
                'prev_text' => '&laquo;',
                'next_text' => '&raquo;',
            ) );

            if ( is_array( $pagination_links ) ) :
            ?>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mt-4">
                        <?php foreach ( $pagination_links as $link ) : ?>
                            <li class="page-item <?php echo strpos( $link, 'current' ) !== false ? 'active' : ''; ?>">
                                <?php echo str_replace('page-numbers', 'page-link', $link); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            <?php endif; ?>

            <?php wp_reset_postdata(); ?>
        </div>

        <div class="col-lg-4">
            <div class="top-content">
                <?php get_template_part('parts/notice'); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
