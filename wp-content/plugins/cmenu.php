<?php

/*
Plugin Name: School Details
Plugin URI: http://wordpress.org
Description: 
Author: Aditya kumar
Version: 1.7.2
Author URI: http://example.com
*/

define("student_path",plugin_dir_path(__FILE__));


//Add menue
function school_details(){
    add_menu_page("School_details_record","School Record","manage_options","school_plugin","details_handle","dashicons-admin-multisite",23);

//Sub Menue
add_submenu_page("school_plugin", "Add Student", "Add Student", "manage_options", "school_plugin", "details_handle" );

//sub Menue
add_submenu_page( "school_plugin", "Student_show", "student show", "manage_options", "school", "Show");

add_submenu_page( "school_plugin", "edit_student", "Edit student", "manage_options", "show","edit");

}
//calling action hook to add menue
add_action("_admin_menu","school_details");

//Menue Handle callback
function details_handle(){
   //include_once(student_path."pages/add-student.php");
   echo "<h2>Aditya kumar</h2>";
}

function Show(){
  //include_once(student_path."pages/show-student.php");
   echo "<h2>Aditya</h2>";
}

function edit(){
  echo "<h2>Aditya kumar</h2>";
}
?>


