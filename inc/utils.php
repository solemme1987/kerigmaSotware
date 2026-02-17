<?php

/*
|--------------------------------------------------------------------
| Utility Functions
|--------------------------------------------------------------------
*/

/**
 * Get a template component
 *
 * @param string $component_slug The template name
 */
function get_theme_component($component_slug)
{
  if ($component_slug !== "") {
    global $base;
    get_template_part("$base/pages/components/$component_slug");
  }
}
