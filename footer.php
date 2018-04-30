	<footer class="footer wow">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<section class="footer__section">
						<h3 class="footer__title"><?php echo __('Informações de Contato', 'ccci') ?></h3>
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
						<div class="copyright">© <?php echo date('Y').' '.__('Todos os direitos reservados', 'ccci'); ?>.</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
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
</body>
</html>