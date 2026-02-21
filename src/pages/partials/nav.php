  <header class="c-header  js-header">
    <nav class="c-nav o-row" role="navigation" aria-label="Main Navigation">

      <a href="<?php echo home_url(); ?>" class="c-nav__brand">
        <img src="<?php echo get_template_directory_uri(); ?>/src/img/ke_logo.png" alt="kerigma logo">
      </a>

      <div class="c-nav__list-container js-menu-container">
        <ul class="c-nav__list">
          <?php
          wp_nav_menu([
            'theme_location' => 'header-menu',
            'container'      => false,
            'items_wrap'     => '%3$s', // IMPORTANTE: evita que WP cree otro <ul>
            'walker'         => new Custom_Nav_Walker(),
            'fallback_cb'    => false,
          ]);
          ?>



        </ul>
      </div>

      <button class="c-nav__menu-btn js-menu-toggle" aria-label="Menu Button">
        <span class="material-icons-round text-3xl">menu</span>
      </button>
    </nav>
  </header>

  <main id="js-main">