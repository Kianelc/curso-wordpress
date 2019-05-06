<article <?php post_class(); ?>>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_post_thumbnail( array(275, 275) ); ?>
    <div class="meta-info">
        <p>Publicado em <?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?></p>
        <p>Categorias: <?php the_category( ' ' ); ?></p>
        <p><?php the_tags('Tags: ', ', ') ?></p>
    </div>
    <?php the_content(); ?>
</article>