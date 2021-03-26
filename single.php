
<?php get_header(); ?>
    
    <div id="content" class="wrapper with-sidebar">
      
      <!-- main -->
      <main role="main"><h1>single template</h1>
        <article>
        
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <h3><?php the_title(); ?></h3>
                <p><?php echo get_the_content('disable_auto_formatting'); ?></p>
                <div class="metadata">
                    posted in <?php the_category( ', ' ); ?> | on <?php the_date(); ?>
                </div>
                <hr>
                <?php previous_post_link(); ?> | <?php next_post_link(); ?>
                
            <?php endwhile; else :  _e( 'Sorry, no posts matched your criteria.', 'wp_maturana' ); endif; ?>

        </article>
      </main>
      <!-- /main -->
      
      <!-- sidebar -->
      <?php get_sidebar(); ?>
      <!-- /sidebar -->
      
    </div><!-- content -->
    
<?php get_footer(); ?>
