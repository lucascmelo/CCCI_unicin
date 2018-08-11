<link href="<?php echo get_template_directory_uri(); ?>/assets/css/acesso-restrito.css" rel="stylesheet">
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#" style="padding: 5px 15px;"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logotipo.png" style="height: 50px"></a>
  </div>

  <ul class="nav navbar-top-links navbar-right">
    <li>
      <a href="#"><i class="fa fa-address-book"></i> Gerenciar Voluntários</a>
    </li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i> Minha Conta
      </a>
      <ul class="dropdown-menu dropdown-user">
        <li><a href="#"><i class="fa fa-user fa-fw"></i> Editar</a>
        </li>
        <li class="divider"></li>
        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
        </li>
      </ul>
    </li>
  </ul>

  <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
      <ul class="nav in" id="side-menu">
        <li>
          <a href="#"><i class="fa fa-desktop fa-fw"></i> Visitar Site</a>
        </li>
        <li>
          <a href="#" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
        </li>
        <li class="active">
          <a href="#"><i class="fa fa-file-text-o fa-fw"></i> Categorias<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level collapse in">
            <li>
              <a href="#">Pareceres</a>
            </li>
            <li>
              <a href="#">CIAJUC</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>