<?php
$userID = get_current_user_id();
$user_info = get_userdata($userID);
if ($user_info->roles==NULL || is_single('login')):
  get_template_part('painel/login');
else:
?>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#" style="height:auto;padding: 5px 15px;"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logotipo.png" style="height: 50px"></a>
  </div>

  <div class="navbar-default sidebar" style="padding-top: 25px;" role="navigation">
    <div class="sidebar-nav navbar-collapse">
      <ul class="nav in" id="side-menu">
        <li>
          <a href="<?php echo site_url('/') ?>"><i class="fa fa-desktop fa-fw"></i> ACESSAR SITE</a>
        </li>
        <li>
          <a href="<?php echo site_url('/painel/minha-conta') ?>"><i class="fa fa-user fa-fw"></i> Minha Conta</a>
        </li>
        <?php
        if ($user_info->roles == "gestor" || $user_info->roles == "administrator"):
        ?>
        <li>
          <a href="<?php echo admin_url('users.php') ?>"><i class="fa fa-address-book"></i> Gerenciar Voluntários</a>
        </li>
        <?php endif; ?>

        <li>
          <a href="<?php echo site_url('/painel/dashboard') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
        </li>

        <li class="active">
          <a href="<?php echo site_url('/painel/arquivos') ?>"><i class="fa fa-file-text-o fa-fw"></i> Categorias<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level collapse in">
            <?php 
            $cats = wp_list_categories(array(
              'title_li' => "",
              'taxonomy' => 'arquivos',
            ));
            ?>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>  
<?php
endif; // login

if (is_single('dashboard') || ($user_info->roles!=NULL && is_post_type_archive( 'painel' ))) {
  get_template_part('painel/dashboard');
} else if (is_single('minha-conta')) {
  get_template_part('painel/minha-conta');
} else if (is_single('arquivos') || is_tax('arquivos') || is_post_type_archive('documentos') ) {
  get_template_part('painel/arquivos');
} else if (is_singular('documentos')) {
  get_template_part('painel/single');
}
?>
<?php get_template_part('painel/footer'); exit; ?>