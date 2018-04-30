<?php get_header(); ?>
<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
 $ancestorsID = get_ancestors(get_the_ID(), 'page');
 $ancestorsID = $ancestorsID[0];
?>
<div class="section-title section-bg">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="section__inner">
					<h1 class="ui-title-page"><?php the_title(); ?></h1>
			          <ol class="breadcrumb">
			            <li><a href="<?php echo site_url(); ?>">Home</a></li>
			            <li class="active"><?php echo get_the_title($ancestorsID); ?></li>
			          </ol>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="section_mod-a">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<section class="section_mod-h">
					<h2 class="ui-title-inner ui-title-inner_small text-uppercase"><?php echo __('Onde Estamos', 'ccci'); ?></h2>
					<div class="border-decor border-decor_mod-b border-decor_mod-e"></div>
					<ul class="list-contacts list-contacts_mod-a">
						<li class="list-contacts__item"><i class="icon icon_pin"></i><?php echo the_field('endereco', 'option') ?></li>
						<li class="list-contacts__item"><i class="icon icon_phone"></i><?php echo the_field('telefone', 'option') ?></li>
						<li class="list-contacts__item"><i class="icon icon_mail"></i><a class="list-contacts__link" href="mailto:<?php echo the_field('email', 'option') ?>"><?php echo the_field('email', 'option') ?></a></li>
						<li class="list-contacts__item"><i class="icon icon_clock"></i><?php echo the_field('horario', 'option') ?></li>
					</ul>
				</section>
			</div>
			<div class="col-md-9">
				<section class="section_mod-h">
					<h2 class="ui-title-inner ui-title-inner_small text-uppercase"><?php echo __('Envie uma mensagem', 'ccci') ?></h2>
					<div class="border-decor border-decor_mod-b border-decor_mod-e"></div>
					<form id="form-contato" class="form-contact ui-form" action="<?php echo admin_url('admin-ajax.php'); ?>" method="post">
						<div class="row">
							<div class="col-md-5">
								<input class="form-control" type="text" name="name" placeholder="Nome" required>
								<input class="form-control" type="email" name="email" placeholder="Email" required>
								<input class="form-control" type="tel" name="phone" placeholder="Telefone">
							</div>
							<div class="col-md-7">
								<textarea class="form-control" name="message" placeholder="Mensagem" rows="11" required></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-9">
								<div class="form-contact__info text-success hide"><?php echo __('Sua mensagem foi enviada com sucesso. Em breve retornaremos o contato.', 'ccci') ?></div>
								<div class="form-contact__info text-danger hide"><?php __('Aconteceu algum problema, por favor tente mais tarde.', 'ccci'); ?></div>
							</div>
							<div class="col-sm-3">
								<button class="btn btn-primary btn-effect pull-right"><?php echo __('ENVIAR', 'ccci'); ?></button>
							</div>
						</div>
					</form>
				</section>
			</div>
		</div>
	</div>
</div>
<?php endwhile;endif; ?>
<?php get_footer(); ?>