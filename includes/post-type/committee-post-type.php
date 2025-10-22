<div class="container bg-light">
    <!-- committee start -->
        <section class="bottom-section">
            <div class="row pb-3">
                <div class="col-lg-3 mb-3">
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
                <div class="col-lg-5">
                    <div class="sec-title bg-danger text-center py-1 text-light mb-3">
                        <p class="mb-0">বর্তমান কমিটি</p>
                    </div>
                    <div class="row">
                        <?php 
                            $committee = new WP_Query(array(
                                'post_type'         =>  'committee',
                                'posts_per_page'    => 1,
                                'order'             => 'ASC'
                            ));
                            while($committee->have_posts()):$committee->the_post();
                        ?>

                        <div class="col-lg-12 mb-2">
                            <div class="row border-bottom mx-1 pb-2 align-items-center">
                                <div class="col-4 col-lg-4 px-0">
                                    <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
                                </div>
                                <div class="col-8 col-lg-8 px-0 ps-3">
                                    <p class="mb-0 fw-bold"> <?php the_title(); ?> </p>
                                    <p class="mb-0"> <?php echo get_field('position'); ?> </p>
                                    <p class="mb-0"> মোবাইলঃ  <?php echo get_field('mobile_number'); ?> </p>
                                </div>
                            </div>
                        </div>

                        <?php   
                            endwhile; wp_reset_postdata();
                        ?>

                    </div>
                    <a href="<?php echo get_permalink(); ?>" class="text-secondary hover-underline">পূর্ণাঙ্গ কমিটি</a>
                    <div class="bottom-profile mt-3">
                        <div class="sec-title bg-danger text-center py-1 text-light mb-3">
                             <p class="mb-0">প্রধান শিক্ষকের বাণী</p>
                        </div>
                        <div class="row">
                            <?php
                                $spechOfHead = new WP_Query(array(
                                    'post_type'         =>  'speech_of_headmaster',
                                    'posts_per_page'    => 1,
                                    'order'             => 'DESC'
                                ));
                                while ($spechOfHead->have_posts()): $spechOfHead->the_post();
                            ?>
                                <div class="col-lg-12 mb-2">
                                    <div class="row mx-1 pb-2">
                                        <div class="col-4 col-lg-4 px-0">
                                            <?php the_post_thumbnail('large', array('class' => 'img-fluid w-100')); ?>
                                        </div>
                                        <div class="col-8 col-lg-8 px-0 ps-3">
                                            <p class="mb-0">
                                                <?php 
                                                    $headText = get_the_content();
                                                    $trimingHeadWords = WP_trim_words($headText, 60,'...');
                                                    echo $trimingHeadWords;
                                                ?>
                                                <a href="<?php  echo get_permalink(); ?>" class="text-danger">বিস্তারিত</a>
                                            </p>
                                    </div>
                                </div>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- committee end -->
</div>