<?php get_header(); ?>
<div id="readSpeak_test">
<br />

<div class="container" id="main_header">
  <header>
    <h1><?php the_title(); ?></h1>
    <p class="postmetadata"><em><?php the_time('F jS, Y') ?></em> <strong>|</strong> Posted in <?php the_category(', ') ?></p>
  </header>

  <div id="main_content">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php
        // Check if the post has a Post Thumbnail assigned to it.
        if ( has_post_thumbnail() ) {
        the_post_thumbnail('medium', array('class' => 'center-block'));
        } 
      ?>
      <?php the_content(); ?>
          <?php endwhile; else: ?>
              <p><?php _e('Sorry, this page does not exist.'); ?></p>
          <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>