<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container">
            
  <header>
    <h1><?php the_title(); ?></h1>
  </header>

  <div class="row">
    <div class="col">      
      <?php the_content(); ?>
      <?php endwhile; else: ?>
        <p><?php _e('Sorry, this page does not exist.'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</div>       
<?php get_footer(); ?>