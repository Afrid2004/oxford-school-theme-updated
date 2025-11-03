<div class="container bg-light">
    <!-- history start -->
    <section class="second-section">
        <div class="row py-2">

            <!-- প্রতিষ্ঠাতা -->
            <div class="col-md-3 col-12 mb-3">
                <div class="second-topper mb-3">
                    <div class="sec-title bg-info text-center py-1 text-light mb-2">
                        <p class="mb-0">প্রতিষ্ঠাতা</p>
                    </div>

                    <?php
                    $founderStory = new WP_Query(array(
                        'post_type' => 'founder_story',
                        'order' => 'DESC',
                        'posts_per_page' => 1
                    ));
                    while ($founderStory->have_posts()):
                        $founderStory->the_post();
                        ?>

                        <div class="sec-img-content position-relative">
                            <a href="<?php the_permalink(163); ?>">
                                <?php the_post_thumbnail('large', array('class' => 'img-fluid w-100')); ?>
                            </a>
                            <a href="<?php the_permalink(163); ?>"
                                class="sec-text-content position-absolute bottom-0 z-1 w-100 p-2 start-0">
                                <p class="mb-0 text-light text-center"><?php the_title(); ?></p>
                            </a>
                        </div>

                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>

                </div>
                <div class="second-bottom">
                    <ul class="list-group list-group-two list-group-three">
                        <?php
                        $moreLink = new WP_Query(
                            array(
                                'post_type' => 'more_link',
                                'order' => 'DESC'
                            )
                        );
                        while ($moreLink->have_posts()):
                            $moreLink->the_post();
                            ?>
                            <li>
                                <a href="<?php the_permalink(); ?>"
                                    class="list-group-item bg-info text-light"><?php the_title(); ?></a>
                            </li>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </ul>
                </div>
            </div>

            <!-- প্রতিষ্ঠানের ইতিহাস -->
            <div class="col-md-5 col-12">
                <div class="school-content">
                    <div class="sec-title bg-info text-center py-1 text-light mb-2">
                        <p class="mb-0">প্রতিষ্ঠানের ইতিহাস</p>
                    </div>
                    <div class="school-deatils">
                        <?php
                        $history = new WP_Query(array(
                            'post_type' => 'institute_history',
                            'posts_per_page' => 1,
                            'order' => 'DESC'
                        ));
                        while ($history->have_posts()):
                            $history->the_post();
                            ?>
                            <div class="school-img mb-3">
                                <?php the_post_thumbnail('large', array('class' => 'img-fluid w-100')); ?>
                            </div>
                            <p class="more-info">
                                <?php
                                $contentText = get_the_content();
                                $trimingWords = WP_trim_words($contentText, 50, '...');
                                echo $trimingWords;
                                ?>
                                <a href="<?php the_permalink(); ?>" class="text-danger">বিস্তারিত</a>
                            </p>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>

            <!-- নিউজ ও ইভেন্ট -->
            <div class="col-md-4 col-12">
                <?php get_template_part('parts/news-and-events'); ?>
            </div>
        </div>
    </section>
    <!-- history end -->
</div>