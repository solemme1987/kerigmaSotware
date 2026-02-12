<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <!-- <title>Servicios y Soluciones - Kerigma Software</title> -->
  <title><?php echo wp_get_document_title(); ?></title>

  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;family=Montserrat:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />



  <!-- 
    Esta funcion es necesaria para que WordPress cargue los estilos y scripts 
    que hemos registrado en el enqueue, si no no se cargan los estilos y scripts
    ademas carga otras cosas importantes que WordPress necesita como los meta tags
  -->
  <?php
  wp_head();
  ?>

</head>

<!-- 
    <nav class="c-nav">
      <button class="c-btn c-btn--small ">
        contactar
      </button>
      <br>
      <br>

      <button class="c-btn c-btn--light">
        agendar llamada
      </button>
      <br>
      <br>

      <button class="c-btn c-btn--small-primary ">
        contactar
      </button>
      <br>
      <br>
      <button class="c-btn c-btn--primary">
        Explorar soluciones
        <span class="material-icons-round c-btn__icon">arrow_downward</span>
      </button>
      <br>
      <br>
    </nav>

-->

<body id="<?php echo $pagename; ?>" <?php body_class(); ?>>

  <header class="c-header  js-header">
    <nav class="c-nav o-row" role="navigation" aria-label="Main Navigation">
      <div class="c-logo__brand-container">
        <a href="<?php echo home_url(); ?>" class="c-logo__brand">
          <span class="c-logo__icon">k</span>
          <span class="c-logo__text">
            Kerigma<span class="c-logo__text-light">Software</span>
          </span>
        </a>
      </div>

      <div class="c-nav__list-container js-menu-container">
        <ul class="c-nav__list">
          <li class="c-nav__item">
            <a href="<?php echo home_url(); ?>" class="c-nav__link ">inicio</a>
          </li>
          <li class="c-nav__item">
            <a href="#" class="c-nav__link active">servicios</a>
          </li>
          <li class="c-nav__item">
            <a href="#" class="c-nav__link">expertise</a>
          </li>
          <li class="c-nav__item">
            <a href="#" class="c-nav__link">casos de éxito</a>
          </li>
          <li class="c-nav__item">
            <a href="#" class="c-btn c-btn--small-primary">contactar</a>
          </li>
        </ul>

      </div>

      <button class="c-nav__menu-btn js-menu-toggle" aria-label="Menu Button">
        <span class="material-icons-round text-3xl">menu</span>
      </button>
    </nav>
  </header>

  <main id="main">