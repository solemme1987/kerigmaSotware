</main>
<footer class="c-footer">

  <div class="c-footer__menu-wrapper">

    <nav class="c-footer__nav" role="navigation" aria-label="Footer Navigation">
      <ul class="c-footer__columns-wrapper ">

        <li class="c-footer__column-item">

          <div class="c-logo__brand-container">
            <a href="<?php echo home_url(); ?>" class="c-logo__brand">
              <span class="c-logo__icon c-logo__icon--small">k</span>
              <span class="c-logo__text">
                Kerigma<span class="c-logo__text-light">Software</span>
              </span>
            </a>
          </div>

          <p class="c-footer__column-description">
            Aliados tecnológicos comprometidos con la excelencia y la innovación. Transformamos negocios a través del software.
          </p>

          <div class="c-footer__social-links-container">
            <a class="u-color-soft-gray c-footer__social-link" href="#" aria-label="Facebook link icon">
              <span class="material-icons-round">facebook</span>
            </a>
            <a class="u-color-soft-gray c-footer__social-link" href="#">
              <span class="material-icons-round">smart_display</span>
            </a>
            <a class="u-color-soft-gray c-footer__social-link" href="#">
              <span class="material-icons-round">alternate_email</span>
            </a>
          </div>

        </li>

        <li class="c-footer__column-item">

          <h4 class="c-footer__column-title">compañía</h4>

          <ul class="c-footer__column-list-nav">
            <li class="c-footer__column-list-item">
              <a class="c-footer__column-link" href="#">sobre nosotros</a>
            </li>
            <li class="c-footer__column-list-item">
              <a class="c-footer__column-link" href="#">carreras</a>
            </li>
            <li class="c-footer__column-list-item">
              <a class="c-footer__column-link" href="#">blog</a>
            </li>
            <li class="c-footer__column-list-item">
              <a class="c-footer__column-link" href="#">contacto</a>
            </li>
          </ul>

        </li>

        <li class="c-footer__column-item">
          <h4 class="c-footer__column-title">servicios</h4>

          <ul class="c-footer__column-list-nav">
            <li class="c-footer__column-list-item">
              <a class="c-footer__column-link" href="#">staff augmentation</a>
            </li>
            <li class="c-footer__column-list-item">
              <a class="c-footer__column-link" href="#">desarrollo a medida</a>
            </li>
            <li class="c-footer__column-list-item">
              <a class="c-footer__column-link" href="#">equipos dedicados</a>
            </li>
            <li class="c-footer__column-list-item">
              <a class="c-footer__column-link" href="#">consultoria IT</a>
            </li>
          </ul>
        </li>

        <li class="c-footer__column-item">
          <h4 class="c-footer__column-title">contacto</h4>

          <ul class="c-footer__column-list-nav">

            <li class="c-footer__column-list-item">
              <a class="c-footer__column-link c-footer__column-link--contact" href="tel:+573185325773">
                <span class="material-icons-round u-color-primary c-footer__column-link-icon">phone</span>
                (+57) 318 5325773
              </a>
            </li>

            <li class="c-footer__column-list-item">
              <a class="c-footer__column-link c-footer__column-link--contact" href="mailto:info@kerigmasoftware.com">
                <span class="material-icons-round u-color-primary c-footer__column-link-icon">email</span>
                info@kerigmasoftware.com
              </a>
            </li>

            <li class="c-footer__column-list-item">
              <a class="c-footer__column-link c-footer__column-link--contact" href="https://www.kerigmasoftware.com">
                <span class="material-icons-round u-color-primary c-footer__column-link-icon">language</span>
                www.kerigmasoftware.com
              </a>
            </li>

          </ul>
        </li>
      </ul>
    </nav>

    <div class="c-footer__legal-wrapper">
      <p class="">
        © <?php echo date('Y'); ?> Kerigma Software. Todos los derechos reservados.
      </p>
      <div class="c-footer__legal-links">
        <a class="" href="#">Privacidad</a>
        <a class="" href="#">Términos</a>
      </div>
    </div>

  </div>

  <?php wp_footer(); ?>
</footer>