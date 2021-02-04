<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

  </head>

  <nav class="navbar navbar-expand-md navbar-light bg-light mb-4" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <a class="navbar-brand" href="<?php echo site_url() ?>"><?php echo get_bloginfo( 'name' ); ?></a>   
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'vcwp' ); ?>">
          <span class="navbar-toggler-icon"></span>
      </button>
          <?php
          wp_nav_menu( array(
              'theme_location'    => 'primary',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'bs-example-navbar-collapse-1',
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker(),
          ) );
          ?>
    </div>
</nav>