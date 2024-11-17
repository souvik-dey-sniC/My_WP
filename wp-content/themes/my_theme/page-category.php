<?php
   get_header();
?>
<div>
    <h1 style="text-align: center; margin-top: 30px:">All Categories</h1>
</div>
<?php
//    echo '<pre>';
//    print_r(get_categories());
?>
<?php
$categories = get_categories();
foreach($categories as $category) {
    $category_link = get_category_link($category -> term_id);

?>
<div class="flexbox">
    <div class="box1"><a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($category -> name); ?></a></div>
</div>
<?php } ?>
<?php
   get_footer();
?>