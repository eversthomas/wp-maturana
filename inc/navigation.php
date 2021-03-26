<nav role="navigation" id="site-navigation" class="main-navigation">
  <button class="menu-toggle hamburger hamburger--spin" aria-label="main menu" aria-controls="primary-menu" aria-expanded="false">
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
  </button>
  <div class="wrapper">
    <?php
        wp_nav_menu(
          array(
            'theme_location' => 'primary',
            'container_class' => 'my_extra_menu_class'
          )
        );
    ?>
  </div>
</nav><!-- #site-navigation -->
