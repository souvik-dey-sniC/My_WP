<?php
  get_header();
?>

<?php
  if(have_posts()) {
    the_post();
  }
?>

<h1 style="text-align:center"><?php echo get_the_title();?></h1>
<p><?php echo get_the_content();?></p><br>
<p>Author Name:- <?php echo get_post_meta(get_the_id(), '_book_author', true);?></p><br>
<p>Price :- <?php echo get_post_meta(get_the_id(), '_book_price', true);?>/-</p><br>
<p>Published Date :- <?php echo get_post_meta(get_the_id(), '_book_published_date', true);?></p><br>



<?php
  get_footer();
?>