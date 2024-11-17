<div class="nav-right">
    <form action="<?php echo home_url('index.php'); ?>" method="get" role="search">
        <input type="text" class="form-input" name="s" value="<?php echo get_search_query(); ?>" placeholder="Article Search">
        <button type="submit" class="btn">Search</button>
    </form>
</div>