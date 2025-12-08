            </main>
            <?php //get_sidebar(); ?>
            <?php get_template_part( 'template-parts/home-navigation' ); ?>
        </div>
        <footer id="footer" role="contentinfo">
            <div id="copyright">
                &copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
            </div>
        </footer>
    </div>
<?php wp_footer(); ?>
</body>
</html>