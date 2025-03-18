<footer class="text-white pt-4 mt-auto bg-dark-custom">
  <div class="container">
    <div class="row">
      <!-- Contatti -->
      <div class="col-md-4">
        <h4>Contatti</h4>
        <ul class="list-unstyled">
          <li>Telefono: +39 123 456 7890</li>
          <li>Email: info@hotelazienda.com</li>
          <li>Indirizzo: Via Roma 123, Palermo, Italia</li>
        </ul>
      </div>
      <!-- Social Media -->
      <div class="col-md-4">
        <h4>Seguici</h4>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white"><img class="svg m-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/github.svg" alt="GitHub">Facebook</a></li>
          <li><a href="#" class="text-white"><img class="svg m-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt="GitHub">Instagram</a></li>
          <li><a href="#" class="text-white"><img class="svg m-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/github.svg" alt="GitHub">Twitter</a></li>
          <li><a href="#" class="text-white"><img class="svg m-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin.svg" alt="GitHub">LinkedIn</a></li>
        </ul>
      </div>
      <!-- Informazioni -->
      <div class="col-md-4">
        <h4>Informazioni</h4>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white">Chi siamo</a></li>
          <li><a href="#" class="text-white">Servizi</a></li>
          <li><a href="#" class="text-white">Privacy Policy</a></li>
          <li><a href="#" class="text-white">Termini e Condizioni</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="text-center text-white py-3">
    &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
