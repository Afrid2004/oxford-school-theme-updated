<?php
$businessPost = new WP_Query([
    "post_type" => "our_business",
    "order" => "DESC",
    "posts_per_page" => 4,
]);

while ($businessPost->have_posts()):
    $businessPost->the_post(); ?>

<?php
    $imgCaption = get_field("image_caption"); // ACF field
    if ($imgCaption) { ?>
<p class="caption fs-6"><?php echo $imgCaption; ?></p>
<?php }
    ?>

<?php
endwhile;
wp_reset_postdata();
?>