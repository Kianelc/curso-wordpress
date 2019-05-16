<?php get_header(); ?>
    <div class="content-area">
        <main>
            <section class="slide">
                <?php 
                $design = get_theme_mod( 'set_slider_option' );
                $limit = get_theme_mod( 'set_slider_limit' );
                echo do_shortcode( '[recent_post_slider design="design-'. $design .'" limit="'. $limit .'"]' ); 
                ?>
            </section>
            <section class="services">
                <div class="container">
                    <h1><?php _e('Our Services', 'wpcurso'); ?></h1>
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
                                <h1><?php _e('Latest News', 'wpcurso'); ?></h1>
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
                <img src="wp-content/uploads/2019/05/mapa.png" alt="Mapa do Google" height="350" width="100%">
                <?php 
                    /* $key = get_theme_mod( 'set_map_apikey' );
                    $address = urlencode( get_theme_mod( 'set_map_address' ) ); */
                ?>
                <!--iframe
                width="100%"
                height="350"
                frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?key=<?php// echo $key ?>
                &q=<?php //echo $address ?>&zoom=15" allowfullscreen>
                </iframe-->
            </section>
        </main>
    </div>
<?php get_footer(); ?>