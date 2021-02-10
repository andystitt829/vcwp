<?php get_header(); ?>

<div class="container">
  <header>
    <h1><?php the_title(); ?></h1>
    <p><em><?php the_time('F jS, Y') ?></em> <strong>|</strong> Posted in <?php the_category(', ') ?></p>
  </header>

  <div class="row">
    <div class="col">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php
          // Check if the post has a Post Thumbnail assigned to it.
          if ( has_post_thumbnail() ) {
          the_post_thumbnail('medium', array('class' => 'center-block'));
          } 
        ?>
        <?php the_content(); ?>
        <p class="mt-4"><?php the_tags('Tags:&nbsp;&nbsp;'); ?></p><br />
        <?php endwhile; else: ?>
        <p><?php _e('Sorry, this page does not exist.'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>