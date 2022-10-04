
<?php get_header(); ?>

<main class="wrap">
    <section class="content-area content-thin">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="article-full">
                <header>
                    <h2><?php the_title(); ?></h2>
                    By: <?php the_author(); ?>
                </header>
                <?php the_content(); ?>
            </article>
        <?php endwhile; else : ?>
            <article>
                <p>Nenhuma página existente!</p>
            </article>
        <?php endif; ?>
    </section>
    
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>


