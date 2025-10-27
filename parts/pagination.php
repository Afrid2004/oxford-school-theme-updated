<?php
$big = 999999999; // ???? ??? ?????? ????? base ?? ????

$pages = paginate_links(array(
    'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
    'format'    => '?paged=%#%',
    'current'   => max(1, get_query_var('paged')),
    'total'     => $wp_query->max_num_pages,
    'prev_text' => __('« ????'),
    'next_text' => __('???? »'),
    'type'      => 'array'
));

if (is_array($pages)) : ?>
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <?php foreach ($pages as $page) : ?>
                <li class="page-item <?php echo (strpos($page, 'current') !== false) ? 'active' : ''; ?>">
                    <?php
                    // <a> ?? ????? page-link class ????? ???
                    $page = preg_replace(
                        '/<a\s+([^>]*)class="([^"]*)"/',
                        '<a $1class="page-link text-dark $2"',
                        $page
                    );

                    // <span> (active item) ?? ????? page-link class ????? ???
                    $page = preg_replace(
                        '/<span\s+([^>]*)class="([^"]*)"/',
                        '<span $1class="page-link active text-white bg-dark $2"',
                        $page
                    );

                    echo $page;
                    ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
<?php endif; ?>