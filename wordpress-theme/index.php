<?php
/**
 * The main template file
 */

get_header();
?>

<section class="section">
    <div class="container">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1><?php the_title(); ?></h1>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php
            endwhile;
        else :
            ?>
            <p>No content found</p>
            <?php
        endif;
        ?>
    </div>
</section>

<?php
get_footer();
?>
