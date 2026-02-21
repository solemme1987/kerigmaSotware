<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><?php echo wp_get_document_title(); ?></title>

  <?php
  wp_head();
  ?>

</head>

<body id="<?php echo $pagename; ?>" <?php body_class(); ?>>