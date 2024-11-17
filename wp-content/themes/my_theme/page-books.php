<?php
   get_header();
?>

<h1 style="text-align: center; color: blue">All Books</h1>

<?php
   $query = new WP_Query(
      array(
         'post_type' => 'book',
         'posts_per_page' => -1,
         'orderby' => 'date',
         'order' => 'DESC',
      ));

      if($query -> have_posts()) {
         while($query->have_posts()) {
            $query->the_post();
            ?>
               <div>
                  Title :- <?php echo get_the_title(); ?><br>
                  Author :- <?php echo get_post_meta(get_the_id(), '_book_author', true); ?><br>
                  Price :- <?php echo get_post_meta(get_the_id(), '_book_price', true); ?><br>
                  Published Date :- <?php echo get_post_meta(get_the_id(), '_book_published_date', true); ?><br>
                  Image :- <?php  ?><br><br>
                  </div>
            <?php
         }
      }
?>

<?php
   get_footer();
?>
