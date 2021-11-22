<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php if ( has_post_thumbnail() ) : ?>
        <div class="featured-image">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php endif; ?>

        
    <div class="featured-content">

    <header class="entry-header">

      <div class="byline meta">
        <?php the_author_posts_link(); ?>
      </div>

      <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>'); ?>
      </header>

      

    <div id="entry-content">
      <?php the_excerpt(); ?>
    </div>

</div>

</article>