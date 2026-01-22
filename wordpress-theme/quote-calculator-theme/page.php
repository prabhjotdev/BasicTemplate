<?php get_header(); ?>

<div style="max-width: 1200px; margin: 0 auto; padding: 2rem;">
    <?php
    while ( have_posts() ) :
        the_post();
        ?>
        <article style="background: #fff; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
            <h1 style="font-size: 2.5rem; margin-bottom: 1.5rem;"><?php the_title(); ?></h1>
            <div><?php the_content(); ?></div>
        </article>
        <?php
    endwhile;
    ?>
</div>

<?php get_footer(); ?>
