<?php


/*--------------------------------------------------------------------
*This is the oficial layout for the navigation menu.
*--------------------------------------------------------------------
// <li class="c-nav__item">
//   <a href="#" class="c-nav__link ">inicio</a>
// </li>
// <li class="c-nav__item">
//   <a href="#" class="c-nav__link ">servicios</a>
// </li>
// <li class="c-nav__item">
//   <a href="#" class="c-nav__link">expertise</a>
// </li>
// <li class="c-nav__item">
//   <a href="#" class="c-nav__link">casos de éxito</a>
// </li>
// <li class="c-nav__item">
//   <a href="#" class="c-btn c-btn--small-primary">contactar</a>
// </li>
// --------------------------------------------------------------------|*/

class Custom_Nav_Walker extends Walker_Nav_Menu
{

  // open the  <li>
  public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {

    // class for the <a> element
    $link_classes = 'c-nav__link';

    // We add an "active" class to the current menu item
    if (in_array('current-menu-item', $item->classes)) {
      $link_classes .= ' active';
    }

    // we change the class for the "Contactar" menu item to make it look like a button
    if (strtolower($item->title) === 'contactar' || strtolower($item->title) === 'contact') {
      $link_classes = 'c-btn c-btn--small-primary';
    }

    $output .= '<li class="c-nav__item">';
    $output .= '<a href="' . esc_url($item->url) . '" class="' . esc_attr($link_classes) . '">';
    $output .= esc_html($item->title);
    $output .= '</a>';
    // $output .= '</li>'; this is comented because WP will add it automatically, and if we add it here, we will have double </li> tags in the HTML output, which can cause issues with styling and layout.
  }
}
