<?php

/*
   Plugin Name: Hello World
   Plugin URI: https://helloworld.com/
   Description: This is Hello World
   Version: 1.0.0
   Requires at Least: 5.2
   Requires PHP: 7.2
   Author: Souvik
   Text Domain: hello-world
*/

function plug_hello_world() {
    echo "Hello World";
}
add_action('the_content','plug_hello_world');

?>