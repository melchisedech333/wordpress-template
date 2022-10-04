
<?php get_header(); ?>

<main class="wrap">

    <section class="content-area content-thin">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="article-loop">
                <header>
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    By: <?php the_author(); ?>
                </header>
                <?php the_excerpt(); ?>
            </article>
        <?php endwhile; else : ?>
        
        <article>
            <p>Sorry, no posts were found!</p>
        </article>
        <?php endif; ?>
    </section>
    
    <?php the_posts_pagination(array(
        'mid_size'  => 2,
        'prev_text' => __( 'Prev', 'textdomain' ),
        'next_text' => __( 'Next', 'textdomain' ),
    )); ?>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>


