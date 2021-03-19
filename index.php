<?php get_header(); ?>
    
    <div id="content" class="wrapper with-sidebar">
      
      <!-- main -->
      <main role="main">
        <article>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
        </article>
      </main>
      <!-- /main -->
      
      <!-- sidebar -->
      <?php get_sidebar(); ?>
      <!-- /sidebar -->
      
    </div><!-- content -->
    
<?php get_footer(); ?>
