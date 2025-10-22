<?php
get_header();
?>

<div class="container bg-white pb-md-5 pb-2">
   <div class="row text-center">
      <div class="col-md-8 col-12 mx-auto not-found-h5">
         <div class="not-found-font-size fw-bold lh-sm"> 404 </div>
         <h1 class="text-secondary"> কিছুই পাওয়া যায়নি </h1>
         <h5 class="lh-base my-md-5 my-3"> দুঃখিত, এই মুহূর্তে আপনার চাওয়া তথ্যটি পাওয়া যায়নি। এটি
            <?php echo esc_html(bloginfo('name')) . '-এর'; ?> আওতায় নাও আসতে পারে, অথবা অনুসন্ধানটি সঠিক হয়নি।
            দয়া করে পুনরায় যাচাই করুন </h5>

         <?php get_template_part('parts/search-form'); ?>

         <div class="not-found-home-page">
            <a href="<?php echo esc_url(home_url()) ?>"
               class="text-decoration-none text-white d-inline border rounded-2 bg-dark p-md-3 p-2 mt-md-4 mt-3 d-inline-block">
               হোম পেইজ
            </a>
         </div>
      </div>
   </div>
</div>

<?php get_footer();
