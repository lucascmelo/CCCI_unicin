<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-user fa-fw"></i> Minha Conta</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="panel panel-default">
          <div class="panel-body">
          	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          		<?php
              $field = get_field('areas_de_acesso', false);
              // var_dump(api_acf_load_field($field, 'field_5b6ef41a952d1'));
              var_dump($field);
              // var_dump(get_field_choices('areas_de_acesso'));
              ?>
          	<?php endwhile;endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>