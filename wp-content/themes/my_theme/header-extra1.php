<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo("template_directory");?>/css/utils.css">
    <link rel="stylesheet" href="<?php bloginfo("template_directory");?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo("template_directory");?>/css/mobile.css">
    <title>iBlog - Heaven for bloggers</title>
</head>

<body>
    <nav class="navigation max-width-1 m-auto">
        <div class="nav-left">
            <a href="/">
                <span><img src="<?php bloginfo("template_directory");?>/img/logo.png" width="94px" alt=""></span>
            </a>
            <ul>
                <!-- <li><a href="/">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="/contact.html">Contact</a></li> -->

                <?php
                   wp_nav_menu(
                    array(
                        'theme_location' => 'extra-menu-1',
                        'menu_id' => 'extra-menu-1',
                        'menu_class' => 'extra-menu-1-class'
                    )
                    );
                ?>
            </ul>
        </div>
        <div class="nav-right">
            <form action="/search.html" method="get">
                <input class="form-input" type="text" name="query" placeholder="Article Search">
                <button class="btn">Search</button>
            </form>

        </div>

    </nav>