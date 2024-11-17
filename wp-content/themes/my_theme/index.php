<?php get_header();?>
    </div>
    <div class="m-auto content max-width-1 my-2">
        <div class="content-left">
            <h1>The heaven for bloggers</h1>
            <p>iBlog is a website which lets you submit an article which upon approval will be up on our website and you
                can get a good amount of reach from here!</p>
            <p>My Halloween decorations are staying in the box this year. To be honest, they didn’t make it out of the
                box last year either. My Halloween spirit has officially been bludgeoned to death by teenagers who no
                longer care and a persistent October fear of the Northern California wildfires. And speaking of fear,
                isn’t there more than enough of that going around? Maybe all of us can pretend that Halloween isn’t even
                happening this year?</p>
        </div>
        <div class="content-right">
            <img src="<?php bloginfo('template_directory')?>/img/home.svg" alt="iBlog">
        </div>
    </div>

    <div class="max-width-1 m-auto">
        <hr>
    </div>
    <div class="home-articles max-width-1 m-auto font2">
        <h2>Featured Articles</h2>
        <!--
            <div class="year-box adjust-year">
                <div>
                    <h3>Year </h3>
                </div>
                <div>
                    <input type="radio" name="year" id=""> 2020
                </div>
                <div>
                    <input type="radio" name="year" id=""> 2021
                </div>
            </div>
        -->
        <?php 
            while (have_posts()) {
                the_post();
        ?>
        <?php
            $img_path = wp_get_attachment_image_src(get_post_thumbnail_id(),'thumbnail');
            // print_r( $img_path);
        ?>
        <div class="home-article">
            <div class="home-article-img">
                <a href="<?php echo get_the_permalink();?>">
                <img src="<?php echo $img_path[0]; ?>" width="<?php echo $img_path[1]; ?>" height="<?php echo $img_path[3]; ?>">
                </a>
            </div>
            <div class="home-article-content font1">
                <a href="<?php echo get_the_permalink();?>">
                    <h3><?php echo get_the_title(); ?></h3>
                </a>
                <p><?php echo get_the_excerpt(); ?></p>

                <div>Published by - <?php echo get_the_author(); ?></div>
                <span><?php echo(get_the_date()." ".get_the_time()); ?> | 6 min read</span>
            </div>
        </div>
        <?php } ?>
    </div>

    <?php get_footer()?>
</body>

</html>