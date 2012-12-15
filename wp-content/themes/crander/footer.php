      <footer>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?>
        <?php endif; ?>
        <?php do_action('wp_footer'); ?>
      </footer>
    </section> <!-- end of #container -->
  </body>
</html>