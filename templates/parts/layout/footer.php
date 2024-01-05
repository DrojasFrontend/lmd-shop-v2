<footer class="footer">
  <div class="container">
    <div class="footer__grid">
      <div class="footer__location">
        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
          <img src="<?php echo esc_url(get_theme_mod('logo_secondary')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
        </a>
        <p>
          Localización <br>
          Bogotá Colombia, Zona franca
        </p>
        <div>
          <a href="https://www.facebook.com/LMD.com.co?_rdc=1&_rdr">
            <img src="<?= IMG_BASE  ?>/icons8-facebook.svg" alt="facebook.svg" width="40" height="40">
          </a>
          <a href="https://www.instagram.com/lmd.com.co/">
            <img src="<?= IMG_BASE  ?>/icons8-instagram.svg" alt="instagram.svg" width="40" height="40">
          </a>
          <a href="https://co.pinterest.com/LMD_com_co/">
            <img src="<?= IMG_BASE  ?>/icons8-pinterest.svg" alt="pinterest.svg" width="40" height="40">
          </a>
          <a href="https://twitter.com/lmdperfumes">
            <img src="<?= IMG_BASE  ?>/icons8-twitter.svg" alt="twitter.svg" width="40" height="40">
          </a>
        </div>
      </div>
      <div class="footer__menu">
        <h3>De interés</h3>
        <a href="/categoria-producto/estuches-de-perfumes/">Sets Perfumes Estuches</a>
        <a href="/tag/perfumes-al-por-mayor-en-bogota-y-colombia/">Precios mayoristas</a>
        <a href="/categoria-producto/belleza-y-cuidado-personal/perfumes-y-fragancias/perfumes-para-ninos-y-ninas/">Para Niñas y Niños</a>
        <a title="Para nuestros Abuelos" href="/categoria-producto/belleza-y-cuidado-personal/perfumes-y-fragancias/perfumes-para-nuestros-abuelos/">Para nuestros Abuelos</a>
        <a title="Política de devoluciones" href="/reembolso_devoluciones/">Política de devoluciones</a>
        <a title="Blog de Noticias" href="/category/blog-de-noticias/" target="_blank" rel="noopener">Blog de Noticias</a>
      </div>
      <div class="footer__menu">
        <h3>Pago contraentrega</h3>
        <p>
          Realiza el pago de tu perfume desde la comodidad de tu hogar
        </p>
        <div class="footer__contact">
          <figure>
            <img src="<?= IMG_BASE ?>/icon-soporte-las-24-horas.webp" alt="" width="50" height="50">
          </figure>
          <div>
            <p>Tienes preguntas? ¡Llámanos 24/7!</p>
            <a href="tel:+573043333333">304 333 33 33</a>
          </div>
        </div>  
      </div>
    </div>
  </div>
  <div class="container">
    <figure class="footer__payment">
      <img src="<?= IMG_BASE ?>/patment-icon.png.webp" alt="" width="324" height="38">
    </figure>
  </div>
  <div class="footer__bottom">
    <div class="container">
      <p>
        Perfumerías originales LMD Fragancias y Lociones - Todos los derechos reservados
      </p>
    </div>
  </div>
</footer>

<?php wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), 1.1, true); ?>


