<?php

add_action('wp_enqueue_scripts', function () {

  // Vite client
  wp_enqueue_script(
    'vite-client',
    'http://localhost:5173/@vite/client',
    [],
    null,
    false
  );

  // Main module
  wp_enqueue_script(
    'kerigma-main',
    'http://localhost:5173/js/main.js',
    [],
    null,
    true
  );
});

// function enqueue_tailwind()
// {
//   wp_enqueue_style(
//     'tailwind',
//     get_stylesheet_directory_uri() . '/dist/output.css',
//     [],
//     '1.0'
//   );
// }
// add_action('wp_enqueue_scripts', 'enqueue_tailwind', 100);


// Fuerza type="module"
// add_filter('script_loader_tag', function ($tag, $handle) {
//   if (in_array($handle, ['vite-client', 'kerigma-main'])) {
//     return str_replace('<script ', '<script type="module" ', $tag);
//   }
//   return $tag;
// }, 10, 2);



// <?php
/*
|--------------------------------------------------------------------
| Includes
|--------------------------------------------------------------------
*/

/** Include ACF */
// require 'inc/acf/index.php';

/** Include API */
// require 'inc/api/index.php';

/** Assemble template function */
require 'inc/assemble.php';

/** Custom Functions */
// require 'inc/custom.php';

/** Enqueue scripts */
// require 'inc/emEvents.php';

/** Enqueue scripts */
// require 'inc/enqueue.php';

/** Footnotes */
// require 'inc/footnotes.php';

/** Images */
// require 'inc/images.php';

/** Init */
require 'inc/init.php';

/** Utils */
// require 'inc/utils.php';

/** Modify WP defaults */
// require 'inc/modify.php';

/** Search Results */
// require 'inc/search.php';

/** WPML functions */
// require 'inc/wpml.php';

/*
|--------------------------------------------------------------------
| Do not write to this file. Use /inc/custom.php to add custom functions
|--------------------------------------------------------------------
*/

/** Enqueue scripts */
require 'inc/enqueue.php';
