<?php get_header();?>
    <div id="primary">
        <div id="main">
            <div class="container">
                <h2 class="search-text"><?php _e('Search results for: ', 'wpcurso'); ?><span class="search-result"><?php echo get_search_query(); ?></span></h2>
                <span class="text-right"><?php get_search_form(); ?></span>
                <?php 
                    while(have_posts()): the_post();
                        get_template_part( 'template-parts/content', 'search' );
                        if( comments_open() || get_comments_number()):
                            comments_template();
                        endif;
                    endwhile;

                    the_posts_pagination( 
                        array(
                            'prev_text' => __('Previous', 'wpcurso'),
                            'next_text'  => __('Next', 'wpcurso'),
                            'screen_reader_text' =>  __( ' ' )
                        ) 
                    )
                ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>