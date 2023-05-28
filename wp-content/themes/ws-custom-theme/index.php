<?php get_header(); ?>


<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="post-meta">
                <span class="post-date"><?php the_date(); ?></span>
                <span class="post-author"><?php the_author(); ?></span>
            </div>
            <div class="post-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; else : ?>
        <p><?php _e('No posts found.', 'custom-theme'); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
