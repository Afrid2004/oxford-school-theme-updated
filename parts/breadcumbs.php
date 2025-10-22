<div class="committee-banner mb-md-4 mb-2">
    <div class="text-center py-5 text-light banner-text">
        <h1>
            <?php
            if (is_page()) {
                the_title();
            } elseif (is_single()) {
                the_title();
            } elseif (is_home() || is_front_page()) {
                bloginfo('name');
            } elseif (is_category()) {
                single_cat_title();
            } elseif (is_tag()) {
                single_tag_title();
            } elseif (is_search()) {
                echo 'Search results for: ' . get_search_query();
            } elseif (is_404()) {
                echo 'Page Not Found';
            }
            ?>
        </h1>
    </div>
</div>