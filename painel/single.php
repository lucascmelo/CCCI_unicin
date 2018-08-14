<?php
$taxPermited = get_field('areas_de_acesso', 'user_'.get_current_user_id());
$cats        = wp_get_post_terms(get_the_ID(),'arquivos');
$blocked     = 1;
foreach ($cats as $cat) {
  $catSingle[] = $cat->term_id;
  if(in_array($cat->term_id, $taxPermited)){
    $blocked = 0;
    break;    
  }
}
?>
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header"><?php echo ($blocked) ? 'Conteúdo bloqueado.' : get_the_title(); ?></h1>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="panel panel-default">
          <div class="panel-body">
          	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          		<?php 
              if ($blocked) {
                echo 'Conteúdo bloqueado.';
              }else{
                the_content();
              }
              ?>
          	<?php endwhile;endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>