<?php get_header(); ?>

<!-- to call header-image  and redirect to site_url(); -->
<?php $logoimg=get_header_image(); ?>

<div class="menu-container">
    <a href="<?php echo site_url(); ?>"><img src="<?php echo $logoimg; ?>" class="logo"></a>

<div class="middle-container">
    <!-- left part of the middle portion starts here -->
    <div class="middle-left">
        <div class="menu-item-left"><a href="">Home</a></div>
        <div class="menu-item-left"><a href="">About</a></div>
        <div class="menu-item-left"><a href="">Gallery</a></div>
        <div class="menu-item-left"><a href="">Enquiry</a></div>
        <div class="menu-item-left"><a href="">Contact Us</a></div>
        <div class="menu-item-left"><a href="">Courses</a></div>
        <div class="middle-left-button">
            <div class="middle-left-button-news">
                News
            </div>
            <ul class="news-list">
                <li><img src="" alt=""> ipsum dolor sit amet,</li>
                <li><img src="" alt=""> ipsum dolor sit amet,</li>
                <li><img src="" alt=""> ipsum dolor sit amet,</li>
                <li><img src="" alt=""> ipsum dolor sit amet,</li>
                <li><img src="" alt=""> ipsum dolor sit amet,</li>
            </ul>
        </div>
    </div>
</div>
<!-- right part of the middle portion 
starts here-->
<div class="middle-right">
    <div class="page-status">
        <h1><?php the_title(); ?>:</h1>

        <h2><a href="<?php echo site_url(); ?>"><i>Home/</i></a>
    <?php the_title(); ?> :</h2>
    </div>
    <?php the_post_thumbnail('medium')?>

    <!-- to call content from admin panel About page using the_content(); -->
<div class="about-content">
<?php the_content(); ?>
</div>
</div>
</div>




<?php get_footer(); ?>