<?php
/**
 * The template for displaying footer
 *
 * Contains closing of #content div and content after
 */
?>

    </div> <!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">

    <?php if (is_active_sidebar('footer-widget')) : ?>    
      <?php dynamic_sidebar('footer-widget'); ?>
    <?php endif; ?>

    </footer>
  </div> <!-- #page -->
  <?php wp_footer(); ?>
</body>
</html>