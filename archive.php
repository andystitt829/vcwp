<?php get_header(); ?>
    <a class="rsbtn_play" accesskey="L" title="Listen to this page using ReadSpeaker" href="//app-na.readspeaker.com/cgi-bin/rsent?customerid=7262&lang=en_us&readid=readSpeak_test&url=<?php echo get_permalink(); ?>"><span class="wave_text">Listen to this page using ReadSpeaker</span></a>


    <div class="container">
      <div data-swiftype-index='true'>
        <div id="main_content">
        <br />
            <div class="alert alert-info text-center">
                <strong><i class="fa fa-tag"></i>&nbsp;Pages Archive With: "<?php single_cat_title(); ?>"</strong>
            </div>
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
            <br /><br /><hr class="clf">
                <?php endwhile; else: ?>
                 <p><?php _e('Sorry, this page does not exist.'); ?></p>
            <?php endif; ?>
            <br />
            <?php echo gic_pagination(); ?>
        </div>
      </div>
    </div>
<?php get_footer(); ?>