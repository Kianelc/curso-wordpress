        <footer class="footer mt-auto py-3">
            <div class="container">
                <div class="row">
                    <div class="copyright col-sm-7 col-4 d-flex align-items-center">
                        <div>
                            <p class="m-0">© Copyright 2018</p>
                        </div>
                    </div>
                    <nav class="footer-menu col-sm-5 col-8 text-right">
                        <?php wp_nav_menu( array( 'theme_location' => 'my_bottom_menu') ) ?>
                    </nav>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>