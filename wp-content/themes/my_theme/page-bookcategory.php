<?php
   get_header();
?>
<h1 style="text-align: center; color: blue">All Books Categories</h1>

<?php
   $category = get_terms(
    array(
        'taxonomy' => 'BookCategory',
        'hde_empty' => false,
    )
    );
    
    if(!empty($category) && !is_wp_error($category)) {
      ?>

      <ul>
         <?php
            foreach($category as $item) {
               $book_count = $item->count;
               ?>
               <div class="flexbox">
                  <div class="box1"><a href="<?php echo get_term_link($item->term_id); ?>"> <?php echo esc_html($item->name); ?></a> &nbsp; => [<?php echo $book_count;?>]</div>
               </div>
               <?php
            }
         ?>
      </ul>
      <?php
    }
?>

<?php
   get_footer();
?>
