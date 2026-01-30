<?php
// add_action('wp_enqueue_scripts', function () {

//   wp_enqueue_script(
//     'vite-client',
//     'http://localhost:5173/@vite/client',
//     [],
//     null,
//     false
//   );

//   wp_enqueue_script(
//     'kerigma-main',
//     'http://localhost:5173/js/main.js',
//     [],
//     null,
//     true
//   );
// });

// add_filter('script_loader_tag', function ($tag, $handle) {
//   if (in_array($handle, ['vite-client', 'kerigma-main'])) {
//     return str_replace('<script ', '<script type="module" ', $tag);
//   }
//   return $tag;
// }, 10, 2);




add_action('wp_enqueue_scripts', function () {

  $theme_path = get_stylesheet_directory();
  $theme_uri  = get_stylesheet_directory_uri();
  $manifest_path = $theme_path . '/dist/manifest.json';

  // 🔵 PRODUCCIÓN
  if (file_exists($manifest_path)) {

    $manifest = json_decode(file_get_contents($manifest_path), true);

    // 🎨 CSS (style.scss)
    if (isset($manifest['src/scss/style.scss']['file'])) {
      wp_enqueue_style(
        'kerigma-style',
        $theme_uri . '/dist/' . $manifest['src/scss/style.scss']['file'],
        [],
        null
      );
    }

    // ⚡ JS (main.js)
    if (isset($manifest['src/js/main.js']['file'])) {
      wp_enqueue_script(
        'kerigma-main',
        $theme_uri . '/dist/' . $manifest['src/js/main.js']['file'],
        [],
        null,
        true
      );
    }
  }
  // 🟢 DESARROLLO (Vite activo)
  else {

    wp_enqueue_script(
      'vite-client',
      'http://localhost:5173/@vite/client',
      [],
      null,
      false
    );

    wp_enqueue_script(
      'kerigma-main',
      'http://localhost:5173/src/js/main.js',
      [],
      null,
      true
    );

    // wp_enqueue_style(
    //   'kerigma-style',
    //   'http://localhost:5173/src/scss/style.scss',
    //   [],
    //   null
    // );
  }
});

add_filter('script_loader_tag', function ($tag, $handle) {
  if (in_array($handle, ['vite-client', 'kerigma-main'])) {
    return str_replace('<script ', '<script type="module" ', $tag);
  }
  return $tag;
}, 10, 2);
