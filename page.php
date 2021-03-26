<?php get_header(); ?>
    
    <div id="content" class="wrapper with-sidebar">
      
      <!-- main -->
      <main role="main"><h1>page template</h1>
        <article>
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
                <?php the_title( '<h2>', '</h2>' ); ?>
                <?php the_content(); ?>
                        
            <?php endwhile; else :  _e( 'Sorry, no posts matched your criteria.', 'wp_maturana' ); endif; ?>

        </article>
      </main>
      <!-- /main -->
      
      <!-- sidebar -->
      <?php get_sidebar(); ?>
      <!-- /sidebar -->
      
    </div><!-- content -->
    
<?php get_footer(); ?>
