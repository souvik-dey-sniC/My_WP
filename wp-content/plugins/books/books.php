<?php

/*
   Plugin Name: Books
   Plugin URI: https://helloworld.com/
   Description: This is Hello World
   Version: 1.0.0
   Requires at Least: 5.2
   Requires PHP: 7.2
   Author: Souvik
   Text Domain: hello-world
*/

// function plug_hello_world() {
//     echo "";
// }
//add_action('the_content','plug_hello_world');

function create_custom_post_type() {
    $labels = array(
        'name'                  => _x('Books', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Book', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Books', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Book', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Book', 'textdomain'),
        'new_item'              => __('New Book', 'textdomain'),
        'edit_item'             => __('Edit Book', 'textdomain'),
        'view_item'             => __('View Book', 'textdomain'),
        'all_items'             => __('All Books', 'textdomain'),
        'search_items'          => __('Search Books', 'textdomain'),
        'parent_item_colon'     => __('Parent Books:', 'textdomain'),
        'not_found'             => __('No books found.', 'textdomain'),
        'not_found_in_trash'    => __('No books found in Trash.', 'textdomain'),
        // 'featured_image'        => _x('Book Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
        // 'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        // 'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        // 'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        // 'archives'              => _x('Book archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
        // 'insert_into_item'      => _x('Insert into book', 'Overrides the “Insert into post” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
        // 'uploaded_to_this_item' => _x('Uploaded to this book', 'Overrides the “Uploaded to this post” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
        // 'filter_items_list'     => _x('Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
        // 'items_list_navigation' => _x('Books list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
        // 'items_list'            => _x('Books list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'book'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('book', $args);
}
add_action('init', 'create_custom_post_type');


function book_add_meta_boxes() {
    add_meta_box(
        'book_details',
        __('Book Details', 'textdomain'),
        'book_details_callback',
        'book',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'book_add_meta_boxes');

// call-back function
function book_details_callback($post) {
    wp_nonce_field('save_book_details', 'book_details_nonce');

    $author = get_post_meta($post->ID, '_book_author', true);
    $price = get_post_meta($post->ID, '_book_price', true);
    $published_date = get_post_meta($post->ID, '_book_published_date', true);
    ?>

    <?php
       if(!$author) {
        ?>
        <p>
        <label for="book_author"><?php _e('Author Name', 'textdomain'); ?></label>
        <input type="text" id="book_author" name="book_author" value="<?php echo esc_attr($author); ?>" class="widefat" >
        </p>
       <?php }
       else {
        ?>
        <p>
        <label for="book_author"><?php _e('Author Name', 'textdomain'); ?></label>
        <input type="text" id="book_author" name="book_author" value="<?php echo esc_attr($author); ?>" class="widefat" readonly>
        </p>
        <?php } ?>

    

    <p>
        <label for="book_price"><?php _e('Price', 'textdomain'); ?></label>
        <input type="text" id="book_price" name="book_price" value="<?php echo esc_attr($price); ?>" class="widefat">
    </p>

    <p>
        <label for="book_published_date"><?php _e('Published Date', 'textdomain'); ?></label>
        <input type="date" id="book_published_date" name="book_published_date" value="<?php echo esc_attr($published_date); ?>" class="widefat">
    </p>

    <?php
}

function save_book_details($post_id) {
    // if (!isset($_POST['book_details_nonce']) || !wp_verify_nonce($_POST['book_details_nonce'], 'save_book_details')) {
    //     return;
    // }

    // if (defined('DOING_AUTOSAVE')) {
    //     return;
    // }

    // if (!current_user_can('edit_post', $post_id)) {
    //     return;
    // }

    if (isset($_POST['book_author'])) {
        update_post_meta($post_id, '_book_author', sanitize_text_field($_POST['book_author']));
    }

    if (isset($_POST['book_price'])) {
        update_post_meta($post_id, '_book_price', sanitize_text_field($_POST['book_price']));
    }

    if (isset($_POST['book_published_date'])) {
        update_post_meta($post_id, '_book_published_date', sanitize_text_field($_POST['book_published_date']));
    }
}
add_action('save_post', 'save_book_details');






function create_custom_taxonomies() {
    $labels = array(
        'name'              => _x('BookCategories', 'taxonomy general name', 'textdomain'),
        'singular_name'     => _x('BookCategory', 'taxonomy singular name', 'textdomain'),
        'search_items'      => __('Search BookCategories', 'textdomain'),
        'all_items'         => __('All BookCategories', 'textdomain'),
        'parent_item'       => __('Parent BookCategory', 'textdomain'),
        'parent_item_colon' => __('Parent BookCategory:', 'textdomain'),
        'edit_item'         => __('Edit BookCategory', 'textdomain'),
        'update_item'       => __('Update BookCategory', 'textdomain'),
        'add_new_item'      => __('Add New BookCategory', 'textdomain'),
        'new_item_name'     => __('New BookCategory Name', 'textdomain'),
        'menu_name'         => __('BookCategories', 'textdomain'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'BookCategory'),
    );

    register_taxonomy('BookCategory', array('book'), $args);
}
add_action( 'init','create_custom_taxonomies');
?>