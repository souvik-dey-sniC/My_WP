<?php
   session_start();
?>

<?php
   function custom_menus() {
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'extra-menu' => __('Extra Menu'),
            'extra-menu-1' => __('Extra Menu 1')
        )
        );
   }
   
   add_action('init', 'custom_menus');

    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');

    function contact_form() {
        if($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['name']) && !empty($_POST['contact']) && !empty($_POST['email']) && !empty($_POST['message'])) {
            $name = sanitize_text_field($_POST['name']);
            $contact = sanitize_text_field($_POST['contact']);
            $email = sanitize_text_field($_POST['email']);
            $message = sanitize_textarea_field($_POST['message']);

            global $wpdb;
            $table_name = $wpdb->prefix.'contact_page';

            if(!$name == '' || !$contact == '' || !$email == '' || !$message == '') {
                $wpdb -> insert (
                    $table_name, array(
                        'name' => $name,
                        'contact' => $contact,
                        'email' => $email,
                        'message' => $message,
                    )
                    );
            }
                $_SESSION['msg'] = "Thanks for Contacting Us, We will Get to Reach You Soon!..";
                wp_redirect('http://localhost/My_WP/contact/');
            //   exit();
        }
    }
    add_action('init', 'contact_form');

    // function custom_search_query($query) {
    //     if($query -> is_search && !is_admin()) {
    //         $query -> set('post-type', 'post');
    //     }
    //     return $query;
    // }

    // add_filter('pre_get_posts','custom_search_query');

    //Footer Customization
    function footer_customization($wp_customize) {
        $wp_customize -> add_setting(
            'footer_text_customize',
            array(
                "default" => 'Copyright © iBlog.com'
            )
            );
            $wp_customize -> add_control(
                'footer_text_customize',
                array(
                    "label" => __('Custom Footer'),
                    "section" => 'title_tagline',
                    "type" => 'text',
                )
                );
    }
    add_action('customize_register', 'footer_customization');
?>