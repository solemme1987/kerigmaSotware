<?php
add_action('wp_enqueue_scripts', function () {

  wp_enqueue_script(
    'vite-client',
    'http://localhost:5173/@vite/client',
    [],
    null,
    false
  );

  wp_enqueue_script(
    'kerigma-main',
    'http://localhost:5173/js/main.js',
    [],
    null,
    true
  );
});

add_filter('script_loader_tag', function ($tag, $handle) {
  if (in_array($handle, ['vite-client', 'kerigma-main'])) {
    return str_replace('<script ', '<script type="module" ', $tag);
  }
  return $tag;
}, 10, 2);


// add_action('wp_enqueue_scripts', function () {

//   $is_dev = defined('WP_DEBUG') && WP_DEBUG;

//   if ($is_dev) {
//     // 🔥 DESARROLLO (Vite server)
//     wp_enqueue_script('vite-client', 'http://localhost:5173/@vite/client', [], null, false);
//     wp_enqueue_script('kerigma-main', 'http://localhost:5173/js/main.js', [], null, true);

//     add_filter('script_loader_tag', function ($tag, $handle) {
//       if (in_array($handle, ['vite-client', 'kerigma-main'])) {
//         return str_replace('<script ', '<script type="module" ', $tag);
//       }
//       return $tag;
//     }, 10, 2);
//   } else {
//     // 🚀 PRODUCCIÓN (archivos compilados)
//     $manifest = json_decode(file_get_contents(get_template_directory() . '/dist/manifest.json'), true);

//     if (isset($manifest['js/main.js'])) {
//       wp_enqueue_script(
//         'kerigma-main',
//         get_template_directory_uri() . '/dist/' . $manifest['js/main.js']['file'],
//         [],
//         null,
//         true
//       );
//     }

//     if (isset($manifest['scss/style.scss'])) {
//       wp_enqueue_style(
//         'kerigma-style',
//         get_template_directory_uri() . '/dist/' . $manifest['scss/style.scss']['file'],
//         [],
//         null
//       );
//     }
//   }
// });


// $manifest_path = get_template_directory() . '/dist/manifest.json';

// if (file_exists($manifest_path)) {
//   $manifest = json_decode(file_get_contents($manifest_path), true);

//   if (isset($manifest['js/main.js'])) {
//     wp_enqueue_script(
//       'kerigma-main',
//       get_template_directory_uri() . '/dist/' . $manifest['js/main.js']['file'],
//       [],
//       null,
//       true
//     );
//   }

//   if (isset($manifest['scss/style.scss'])) {
//     wp_enqueue_style(
//       'kerigma-style',
//       get_template_directory_uri() . '/dist/' . $manifest['scss/style.scss']['file'],
//       [],
//       null
//     );
//   }
// }
