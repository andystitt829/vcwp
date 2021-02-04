<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <small class="">Date Posted:<em>&nbsp;<?php the_time('l, F jS, Y'); ?></em></small>
            <?php the_excerpt(); ?>
            <?php endwhile;
            else : ?>
            <p><?php _e('Sorry, this page does not exist.'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>