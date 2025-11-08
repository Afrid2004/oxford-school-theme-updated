<?php
get_header();
/**
 * Template Name: প্রকাশনা 
 */
?>

<div class="container bg-light pt-3">
    <?php get_template_part('/parts/breadcumbs'); ?>
    <div class="row pb-5">
        <div class="col-lg-8 mb-3">
            <div class="sec-title bg-info text-center py-1 text-light mb-3">
                <p class="mb-0">প্রকাশনা</p>
            </div>
            <!-- school megazine -->
            <div class="school-megazine">
                
                <div class="alert alert-success info-title py-2">
                    <h6 class="mb-0"><i class="fa-solid fa-book-open"></i> স্কুল ম্যাগাজিন</h6>
                </div>

                <div class="megazine-container row">

                    <?php 

                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        if (get_query_var('page')) {
                            $paged = get_query_var('page');
                        }

                        $megazin = new WP_Query(array(
                            'post_type'                    => 'megazine',
                            'posts_per_page'               => 6,
                            'order'                        => 'DESC',
                            'update_post_meta_cache'       => false,
                            'update_post_term_cache'       => false,
                        ));

                        $totalPosts = $megazin->found_posts;
                        $counter = $totalPosts - (($paged - 1) * 6);

                        if ( $megazin->have_posts() ):  // ✅ যদি পোস্ট থাকে
                                while ( $megazin->have_posts() ): $megazin->the_post();
                                    $authorName = get_field('author_name');
                    ?>


                        <div class="col-12 col-md-6 col-lg-4 mb-3">
                            <div class="bg-white p-2 mg-shadow rounded-3">
                                <div class="card-head rounded-3 overflow-hidden">
                                    <?php 
                                        if(has_post_thumbnail()){
                                            the_post_thumbnail('teacher-photo-image-290x350',array(
                                                'class'     => 'img-fluid megzine-img'
                                            ));
                                        }else{?>
                                            <img src="<?php echo get_template_directory_uri().'/assets/images/banner-demo-image-856x460.jpg'; ?>" class="img-fluid megzine-img">
                                        <?php }
                                    ?>
                                </div>
                                <div class="card-content pt-2">
                                    <a href="<?php echo esc_url(the_permalink()); ?>" class=" text-dark">
                                        <h5 class="mb-2"><?php echo esc_html(the_title()); ?></h5>
                                    </a>
                                    <?php  
                                        if(!empty($authorName)){
                                        echo '<p class="mb-2">প্রকাশ করছেঃ '.$authorName.'</p>';
                                        }
                                    ?>
                                    <small> প্রকাশিতঃ 
                                        <?php echo convert_to_bangla(get_the_time('j F Y')); ?>
                                    </small>
                                    <div class="mt-2 ">
                                        <a href="<?php echo esc_url(the_permalink()); ?>" class="btn btn-info text-white w-100">বিস্তারিত</a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <?php 
                            endwhile;
                            else:  // ❌ যদি কোনো পোস্ট না থাকে
                        ?>
                        <div class="col-12">
                            <div class="alert alert-secondary text-center">
                                <i class="fa-solid fa-book-open"></i> বর্তমানে কোনো স্কুল ম্যাগাজিন পাওয়া যায়নি।
                            </div>
                        </div>
                        <?php 
                            endif; 
                            wp_reset_postdata();
                        ?>
                </div>
                

                <!-- ? Bootstrap Pagination -->
                <?php
                $big = 999999999;
                $pagination_links = paginate_links(array(
                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format' => '?paged=%#%',
                    'current' => max(1, $paged),
                    'total' => $megazin->max_num_pages,
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

        </div>

        <div class="col-lg-4">
            <div class="position-sticky" style="top:1rem;">
                <!-- নিউজ ও ইভেন্ট -->
                <?php get_template_part('parts/notice'); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>