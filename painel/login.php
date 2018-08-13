<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title text-center"><a href="#" style="height:auto;padding: 5px 15px;"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logotipo.png" style="height: 70px;margin-bottom: 15px;"></a></h3>
        </div>
        <div class="panel-body">
          <form id="login" action="<?php echo admin_url('admin-ajax.php'); ?>" method="post">
            <fieldset>
              <div class="form-group">
                <input class="form-control" placeholder="E-mail" id="username" name="username" autofocus="" type="email">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Senha" id="password" name="password" value="" type="password">
              </div>
              <a href="<?php echo wp_lostpassword_url(); ?>">Lost your password?</a>
              <button type="submit"  class="btn btn-lg btn-success btn-block">Entrar</button>
              <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>