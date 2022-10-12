
<?php get_header(); ?>

<main class="wrap">
    <section class="content-area content-full-width">
    
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="article-full">
                <header>
                    <h2><?php the_title(); ?></h2>
                    By: <?php the_author(); ?>
                </header>
            <?php the_content(); ?>

            <?php the_tags(__('Tags: ', 'wp-blank' ), ', ', '<br>');?>
            <p><?php esc_html_e('Category: ', 'wp-blank'); the_category(', '); ?></p>
            <p><?php esc_html_e('Post written by ', 'wp-blank'); the_author(); ?></p>
            <?php comments_template(); ?>
            </article>
        <?php endwhile; else : ?>
            <article>
                <p>No posts found!</p>
            </article>
        <?php endif; ?>
        
    </section>
</main>

<?php get_footer(); ?>


