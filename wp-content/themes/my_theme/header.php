<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo("template_directory");?>/css/utils.css">
    <link rel="stylesheet" href="<?php bloginfo("template_directory");?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo("template_directory");?>/css/mobile.css">
    <link rel="stylesheet" href="<?php bloginfo("template_directory");?>/css/contact.css">
    <link rel="stylesheet" href="<?php bloginfo("template_directory");?>/css/blogpost.css">
    <title>iBlog - Heaven for bloggers</title>
    <style>
        /* page.php */
        .box img{
            border-radius: 50px 0 50px 0;
            margin-left:10%;
        }
        /* header.php */
        .nav-left img{
            border-radius:50px 0 50px 0;
        }
        /* page-category.php */
        /* .flexbox {
            display: inline-flex;
            align-item:center;
            width: 100%;
            justify-content:center;
            padding-top:50px;
            padding-bottom: 50px;
            flex-wrap: wrap;
        }
        .flexbox .boxx {
            text-align:center;
            width: 15%;
            height: 10%;
            margin-top:10px;
            padding: 50px;
            color: white;
            font-size : 20px;
            font-weight: 800;
            border: 3px solid orange;
            background-color: orange;
        }
        .flexbox .boxx < a{
            text-transform:none;
        }*/
        .flexbox{
            height:40%;
            width:10%;
            padding:20px;
            margin:20px;
            margin-top:3%;
            margin-bottom:3%;
            margin-left:8%;
            background-color: #F5783A;
            text-align:center;
            border:1px solid black;
            border-radius:20px;
            display:inline-block;
        }
        .flexbox a{
            text-decoration:none;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <nav class="navigation max-width-1 m-auto">
        <div class="nav-left">
            <a href="/">
                <span><img src="<?php echo get_header_image(); ?>" width="94px" alt=""></span>
            </a>
            <ul>
                <!-- <li><a href="/">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="/contact.html">Contact</a></li> -->

                <?php
                   wp_nav_menu(
                    array(
                        'theme_location' => 'header-menu',
                        'menu_id' => 'header-menu',
                        'menu_class' => 'header-menu-class'
                    )
                    );
                ?>
            </ul>
        </div>
        <?php get_search_form(); ?>
        <!-- <div class="nav-right">
            <form action="/search.html" method="get">
                <input class="form-input" type="text" name="query" placeholder="Article Search">
                <button class="btn">Search</button>
            </form>

        </div> -->

    </nav>