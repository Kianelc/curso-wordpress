<?php get_header(); ?>
    <div class="content-area">
        <main>
            <section class="slide">
                <div class="container">
                    <div class="row">
                        Slide
                    </div>
                </div>
            </section>
            <section class="services">
                <div class="container">
                    <h1>Our Services</h1>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="services-item">
                                <?php
                                    if(is_active_sidebar( 'services-1' )) {
                                        dynamic_sidebar( 'services-1' );
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="services-item">
                                <?php
                                    if(is_active_sidebar( 'services-2' )) {
                                        dynamic_sidebar( 'services-2' );
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="services-item">
                                <?php
                                    if(is_active_sidebar( 'services-3' )) {
                                        dynamic_sidebar( 'services-3' );
                                    }
                                ?>
                            </div>
                        </div>
                    </div>    
                </div>
            </section>
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                        <?php get_sidebar( 'home' )?>
                        <div class="news col-md-8">
                            <div class="container">
                                <h1>Latest News</h1>
                                <div class="row">
                                    <?php
                                    $feature = new WP_Query( 'post_type=post&posts_per_page=1&cat=4,8' );
                                    if( $feature->have_posts() ):
                                        while( $feature->have_posts() ): $feature->the_post();
                                    ?>
                                    <div class="col-12">
                                        <?php get_template_part( 'template-parts/content', 'featured' ); ?>
                                    </div>
                                    <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    endif;

                                    $args = array(
                                        'post_type' => 'post',
                                        'posts_per_page' => 2,
                                        'catgory__not_in' => array(5),
                                        'category__in' => array(4,8),
                                        'offset' => 1
                                    );

                                    $secondary = new WP_Query( $args );
                                    if( $secondary->have_posts() ):
                                        while( $secondary->have_posts() ): $secondary->the_post();
                                    ?>
                                    <div class="col-sm-6">
                                        <?php get_template_part( 'template-parts/content', 'secondary' ); ?>
                                    </div>
                                    <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="map">
                <div class="container">
                    <div class="row">
                        Mapa
                    </div>
                </div>
            </section>
        </main>
    </div>
<?php get_footer(); ?>