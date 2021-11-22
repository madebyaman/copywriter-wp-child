<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="highlight-wrapper">

  <div class="section-inner">

  <?php if ( has_post_thumbnail() ) : ?>
        <div class="post-thumbnail">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php endif; ?>
        
    <header class="entry-header">

      <div class="entry-categories">

      <?php the_category(' ', ''); ?>
      </div>


      <?php the_title('<h1 class="entry-title">', '</h1>'); ?>

      <div class="entry-meta">

      <div>
        <?php the_author(); ?>
      </div>

      <div>
        <?php the_date(); ?>
      </div>
      </div>


    </header>

    </div>
    
    </div>

      <div class="main-content">

        <div class="entry-content">
          <?php the_content(); ?>
        </div>

        <?php if (comments_open()): ?>

        <?php comments_template(); ?>

        <?php endif; ?>

        <div class="blog-navigation content-inner">
          <div><?php previous_post_link( '<div class="pagination-label">PREVIOUS</div><h2>%link</h2>' ); ?> </div>
          <div><?php next_post_link( '<div class="pagination-label">NEXT</div><h2 class="text-right">%link</h2>' ); ?> </div>
        </div> <!-- end navigation -->

      </div> <!-- .main-content -->
    
</article>