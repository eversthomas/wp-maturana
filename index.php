<?php get_header(); ?>
    
    <div id="content" class="wrapper with-sidebar">
      
      <!-- main -->
      <main role="main"><h1>index template</h1>
        <article>
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
                <a href="<?php the_permalink(); ?>"><?php the_title( '<h2>', '</h2>' ); ?></a>
                <?php the_excerpt(); ?>
                <p><a href="<?php the_permalink(); ?>">weiter lesen</a></p>
                        
            <?php endwhile; else :  _e( 'Sorry, no posts matched your criteria.', 'wp_maturana' ); endif; ?>
            
            <hr>
            
            <p><?php posts_nav_link(); ?></p>

        </article>
      </main>
      <!-- /main -->
      
      <!-- sidebar -->
      <?php get_sidebar(); ?>
      <!-- /sidebar -->
      
    </div><!-- content -->
    
<?php get_footer(); ?>
