<?php get_header(); ?>

	<div class="section-title section-bg">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="section__inner">
						<h1 class="ui-title-page"><?php echo __('Ferramentas de Autopesquisa', 'ccci'); ?></h1>
						<ol class="breadcrumb">
							<li><a href="<?php echo site_url(); ?>">Home</a></li>
							<li class="active"><?php echo __('Ferramentas de Autopesquisa', 'ccci'); ?></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>

<div class="container">
	<div class="row">
		<div class="col-md-12 block-conteudo-principal">
			<section class="section-default wow">
				<?php 
				$projetos = new WP_Query(array('post_type' => 'projetos', 'posts_per_page'=> -1, 'orderby' => 'rand', 'order' => 'ASC'));

				if ( $projetos->have_posts() ) : while ( $projetos->have_posts() ) : $projetos->the_post(); 
					$thumb = get_the_post_thumbnail_url(get_the_ID(), 'bg-projetos');
					$link  = (get_field('projetos_link_externo')) ? get_field('projetos_link_externo') : get_permalink();
					$blank = (get_field('projetos_link_externo')) ? '_blank' : '';
					?>
					<div class="col-md-4 col-sm-6">
						<article class="post post_mod-f clearfix wow">
							<div class="entry-main">
								
								<div class="entry-media">
									<a href="services-details.html">
										<img class="img-responsive" src="<?php echo $thumb; ?>">
									</a>
								</div>
								<div class="entry-header clearfix">
									<h3 class="entry-title ui-title-inner"><a href="<?php echo $link ?>" target="<?php echo $blank; ?>"><?php the_title(); ?></a></h3>
									<div class="border-decor border-decor_mod-b"></div>
								</div>
								<a class="link" href="<?php echo $link; ?>" target="<?php echo $blank ?>">Saiba mais</a>
							</div>
						</article>
					</div>
				<?php endwhile;endif;?>
			</section>
		</div>
	</div>
</div>

<?php get_footer(); ?>
