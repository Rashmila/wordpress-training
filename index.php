<?php get_header(); ?>

<?php
echo do_shortcode('[smartslider3 slider="2"]');
?> 

<div class="container">
    <div class="home-intro">
    <?php while (have_posts()) : the_post(); ?>
        <h1><?php the_title()?></h1>
        <p><?php the_content();?></p>
        <a href='#'>View more</a>
        <?php  endwhile;?>
    </div>

    <div class="blogSection marginBottom">
    <h1>Latest Blogs</h1>
        <?php echo do_shortcode('[bdp_post grid="3" show_tags="false" show_comments="false" show_category="false" media_size="medium"]');?>
    </div>

    <div class="marginBottom">
        <h1>Photo Gallery</h1>
        <?php if( function_exists('photo_gallery') ) { photo_gallery(2); } ?>
    </div>
</div>
<?php get_footer(); ?>