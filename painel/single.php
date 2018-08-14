<?php
$userID      = get_current_user_id();
$user_info   = get_userdata($userID);
$taxPermited = get_field('areas_de_acesso', 'user_'.$userID);
$cats        = wp_get_post_terms(get_the_ID(),'arquivos');
$blocked     = 0;

if ($user_info->roles[0] != "administrator") {
  $blocked     = 1;
  foreach ($cats as $cat) {
    $catSingle[] = $cat->term_id;
    if(in_array($cat->term_id, $taxPermited)){
      $blocked = 0;
      break;    
    }
  }
}
?>
<div id="page-wrapper">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header"><?php echo ($blocked) ? 'Conteúdo bloqueado.' : get_the_title(); ?><small><?php echo ($blocked) ? '' : '<br>'.get_the_date('j \d\e F \d\e Y \à\s H:i') ; ?></small></h1>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <?php 
        if ($blocked) {
          echo 'Conteúdo bloqueado.';
        }else{
          the_content();
        }
        ?>
      </div>
    </div>
  </div>
  <?php endwhile;endif; ?>
</div>