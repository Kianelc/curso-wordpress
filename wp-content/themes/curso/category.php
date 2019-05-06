<?php get_header(); ?>
    <img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
    <div class="content-area">
        <main>
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                        <div class="category col-md-8">
                            <?php
                                
                                the_archive_title( '<h1 class="category-title">', '</h1>' );
                                the_archive_description();

                                //Se houver algum post
                                if(have_posts()):
                                    //Enquanto houver posts, mostre-os
                                    while(have_posts()): the_post();

                                get_template_part( 'template-parts/content', 'category' );
                                    endwhile; 
                            ?>
                            <div class="row">
                                <div class="pages text-left col-6">
                                    <?php previous_posts_link( '<< Newer posts' ); ?>
                                </div>
                                <div class="pages text-right col-6">
                                    <?php next_posts_link( 'Older posts >>' ); ?>
                                </div>
                            </div>
                            <?php else: ?>
                                <p>Não há posts no momento.</p>
                            <?php endif; ?>
                        </div>
                        <?php get_sidebar( 'blog' )?>
                    </div>
                </div>
            </section>
        </main>
    </div>
<?php get_footer(); ?>