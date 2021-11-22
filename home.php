<?php
/**
 * The main template file
 *
 * This is catchall file in WP theme.
 * It is a required file
 *
 */
?>

<?php get_header(); ?>

<div id="primary" class="content-area">
  
  <main id="main" class="site-main" role="main">

  <div class="highlight-wrapper">
    <h1 class="section-inner text-center"><?php single_post_title(); ?></h1>
  </div>

    <div class="section-inner blog-home">

    <?php if (have_posts()):
    while (have_posts()):
            the_post(); ?>
      <?php get_template_part("template-parts/content", 'posts'); ?>
    <?php
        endwhile;
    endif; ?>
    </div>
    </main>
  </div>

  <?php get_footer(); ?>

