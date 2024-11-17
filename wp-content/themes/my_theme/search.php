<?php
   get_header();
?>

<?php

if(have_posts()) {
    printf ('Search Results For: %s', get_search_query());

    while(have_posts()) {
      the_post();
      ?>
      <div style="margin: 30px">
         <h1>Title :- <a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h1>
         <h3>Description :- <?php echo get_the_content(); ?></h3>
      </div>
      <?php
    }
}
else {
   echo "No Post Found";
}

?>

<?php
   get_footer();
?>
