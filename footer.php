    <footer class="footer wow">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <section class="footer__section">
              <h3 class="footer__title"><?php the_field('informacoes_de_contato','option') ?></h3>
              <div class="row">
                <div class="col-sm-12">
                  <ul class="list-contacts">
                    <li class="list-contacts__item"><i class="icon icon_pin"></i><?php the_field('endereco', 'option'); ?></li>
                    <li class="list-contacts__item"><i class="icon icon_phone"></i><?php the_field('telefone', 'option'); ?></li>
                    <li class="list-contacts__item"><i class="icon icon_mail"></i><a class="list-contacts__link" href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></li>
                  </ul>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <?php
                  $facebook = get_field('facebook', 'option');
                  $twitter = get_field('twitter', 'option');
                  $gplus = get_field('google_plus', 'option');
                  $youtube = get_field('youtube', 'option');
                  $instagram = get_field('instagram', 'option');
                  ?>
                  <?php if ($facebook!=""): ?>
                    <a target="_blank" href="<?php echo $facebook; ?>"><i class="icon social_facebook"></i></a> 
                  <?php endif ?>
                  <?php if ($twitter!=""): ?>
                    <a target="_blank" href="<?php echo $twitter; ?>"><i class="icon social_twitter"></i></a> 
                  <?php endif ?>
                  <?php if ($gplus!=""): ?>
                    <a target="_blank" href="<?php echo $gplus; ?>"><i class="icon social_googleplus"></i></a> 
                  <?php endif ?>
                  <?php if ($youtube!=""): ?>
                    <a target="_blank" href="<?php echo $youtube; ?>"><i class="icon social_youtube"></i></a> 
                  <?php endif ?>
                  <?php if ($instagram!=""): ?>
                    <a target="_blank" href="<?php echo $instagram; ?>"><i class="icon social_instagram"></i></a> 
                  <?php endif ?>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="copyright">© <?php echo date('Y').' '.get_field('todos_os_direitos_reservados', 'option'); ?>.</div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <?php if (is_home()): ?>
      <div class="modal fade" id="modalNoticias" tabindex="-1" role="dialog" style="z-index: 99999">
        <style>
        .modal-backdrop {z-index: 11040!important}
        #modalNoticias .nav-tabs {
          width: 100%;
          margin: 0;
          display: inline-block;
          text-align: center;
        }
        #modalNoticias .nav-tabs li {
          float: none;
          display: inline-block;
          width: auto;
        }
        #modalNoticias .nav-tabs li.active a {
          color: #262d79;
        }
        #modalNoticias .nav-tabs li a {
          margin: 0 15px 10px;
          padding-bottom: 0;
          border-bottom: 0;
        }
        #modalNoticias .nav-tabs li:before {
          display: none
        }

        .loading-tab {
          width:0%;
          height: 5px;
          display: inline-block;
          background: #ddd; 
        }
        </style>
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header" style="border: 0">
            <button style="font-size: 28px;" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body" style="width:100%;display: inline-block;">
            <ul class="nav nav-tabs" role="tablist">
              <li class="active"><a href="#notice1" data-toggle="tab"><i class="fa fa-bookmark fa-2x"></i></a></li>
              <li class=""><a href="#notice2" data-toggle="tab"><i class="fa fa-bookmark fa-2x"></i></a></li>
            </ul>
            <div class="loading-tab"></div>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="notice1">
                <p class="text-center">
                  <img src="http://unicin.org/wp-content/uploads/2018/11/congracamento-ccci-2018.jpeg" style="width:100%;">
                </p>
                <h2 style="text-align: center;padding: 10px;font-weight: bold;background: #77be06;color: #fff;margin-bottom: 50px;">
                  30º Congraçamento da CCCI 2018
                </h2>
                <div class="row">
                  <div class="col-xs-12">
                    <p>Nos dias 8 e 9 de Dezembro de 2018 ocorrerá em Foz do Iguaçu/PR no CEAEC o 30º Congraçamento da CCCI 2018.</p>
                    <p>Venha integrar para expandir.</p>
                  </div>
                </div>
              </div>

              <div role="tabpanel" class="tab-pane" id="notice2">
                <p class="text-center">
                  <iframe style="width: 100%" height="315" src="https://www.youtube.com/embed/6QW3yitofrQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </p>
                <h2 style="text-align: center;padding: 10px;font-weight: bold;background: #77be06;color: #fff;margin-bottom: 50px;">
                  Conselho de EPICONS
                </h2>
                <div class="row">
                  <div class="col-xs-12">
                    <p>O Conselho de EPICONS está abrindo um provo processo de seleção para novos EPICONS até o dia <strong>30/11/2018.</strong></p>
                    <p>A pessoa que se considerar apta à função do epicentrismo consciencial deverá preencher e encaminhar o currículo pessoal da Conscienciologia através do link:<br><a class="btn btn-primary btn-effect" target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSeKpyythp_g8rCpWhVQbLPIonji4TO1VaNVkA4qr_X9pItaUw/viewform">Formulário de Inscrição</a></p>
                  </div>
                </div>
              </div>

              
            
            </div>
            <div class="modal-footer">
              <button type="button" class="btn" data-dismiss="modal">Fechar</button>
            </div>
          </div>
        </div>
      </div>
    <?php endif ?>
  </div>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/jquery/jquery-1.11.3.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-migrate-1.2.1.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/waypoints.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/cssua.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/slider-pro/dist/js/jquery.sliderPro.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/owl-carousel/owl.carousel.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/isotope/isotope.pkgd.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/scrollreveal/dist/scrollreveal.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/jflickrfeed/jflickrfeed.min.js" ></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/doubletaptogo.js" ></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
  <script>jQuery(document).ready(function($) {
    var modalNoticias = jQuery('#modalNoticias');
    var timeNoticia = 5000;
    var currentTime = 0;
    if (modalNoticias.length>0) {
      var loadingTab = jQuery("#modalNoticias .loading-tab");
      modalNoticias.modal('show');
      
      function loadingNoticia(){
        loadingTab.animate({
          'width': '100%'
        }, 
        {
          duration: timeNoticia,
          step: function(now, fx) {
            currentTime = Math.round(5000-(now*5000/100));
          },
          easing:'linear',
          complete: function(){
            timeNoticia = 5000;
            jQuery("#modalNoticias .nav-tabs li:not('.active') a").click();
          }
        });
      }

      loadingNoticia();

      jQuery("#modalNoticias .tab-content").on('mouseenter', function(event) {
        mouseIN = true;
        loadingTab.stop();
      });

      jQuery("#modalNoticias .tab-content").on('mouseleave', function(){
        timeNoticia = currentTime;
        loadingNoticia();
      });

      jQuery("#modalNoticias .nav-tabs a").on('click', function(event) {
        timeNoticia = 5000;
        loadingTab.stop().css('width', 0);
        loadingNoticia();
      });
    }
    
  });</script>
</body>
</html>