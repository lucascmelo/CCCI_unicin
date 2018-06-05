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
					<h2 class="ui-title-inner ui-title-inner_small text-uppercase"><?php the_field('onde_estamos', 'option'); ?></h2>
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
					<h2 class="ui-title-inner ui-title-inner_small text-uppercase"><?php the_field('envie_uma_mensagem', 'option') ?></h2>
					<div class="border-decor border-decor_mod-b border-decor_mod-e"></div>
					<form id="form-contato" class="form-contact ui-form" action="<?php echo admin_url('admin-ajax.php'); ?>" method="post">
						<div class="row">
							<div class="col-md-5">
								<input class="form-control" type="text" name="name" placeholder="<?php the_field('nome_translate', 'option') ?>" required>
								<input class="form-control" type="email" name="email" placeholder="Email" required>
								<input class="form-control" type="tel" name="phone" placeholder="<?php the_field('telefone', 'option') ?>">
							</div>
							<div class="col-md-7">
								<textarea class="form-control" name="message" placeholder="<?php the_field('mensagem_translate', 'option') ?>" rows="11" required></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-9">
								<div class="form-contact__info text-success hide"><?php the_field('sua_mensagem_foi_enviada_com_sucesso_em_breve_retornaremos_o_contato', 'option');?></div>
								<div class="form-contact__info text-danger hide"><?php the_field('aconteceu_algum_problema_por_favor_tente_mais_tarde', 'option') ?></div>
							</div>
							<div class="col-sm-3">
								<button class="btn btn-primary btn-effect pull-right"><?php the_field('enviar'); ?></button>
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