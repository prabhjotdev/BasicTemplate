<?php get_header(); ?>

<div style="max-width: 1200px; margin: 0 auto; padding: 2rem;">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            ?>
            <article style="background: #fff; padding: 2rem; margin-bottom: 2rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                <h2 style="font-size: 2rem; margin-bottom: 1rem;">
                    <a href="<?php the_permalink(); ?>" style="text-decoration: none; color: #333;">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <div><?php the_excerpt(); ?></div>
                <a href="<?php the_permalink(); ?>" style="color: #0066cc;">Read More &rarr;</a>
            </article>
            <?php
        endwhile;
    else :
        ?>
        <p>No posts found.</p>
        <?php
    endif;
    ?>
</div>

<?php get_footer(); ?>
