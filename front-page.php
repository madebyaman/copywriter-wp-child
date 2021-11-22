<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php if ( is_active_sidebar( 'front-widget' )) : ?>
			<?php dynamic_sidebar( 'front-widget' ); ?>
		<?php endif; ?>
	</main>
</div>

<?php get_footer(); ?>