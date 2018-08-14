<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title text-center"><a href="#" style="height:auto;padding: 5px 15px;"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logotipo.png" style="height: 70px;margin-bottom: 15px;"></a></h3>
        </div>
        <div class="panel-body">
          <?php
          $loading = 0;
          if (isset($_POST['username'])) {
            if ( !is_user_logged_in() ){
            ?>
            <div class="alert alert-danger">
                Nome de usuário ou senha inválido. <br>
                <a href="<?php echo wp_lostpassword_url( get_permalink() ); ?>" class="alert-link">Perdeu a senha?</a>
            </div>
            <?php
            } else {
              $loading = 1;
            }
          }
          ?>
          <?php if (!$loading): ?>
          <form id="login" method="post">
            <input type="hidden" name="loginVerify" value="1">
            <fieldset>
              <div class="form-group">
                <input class="form-control" placeholder="E-mail" id="username" name="username" autofocus="" type="text">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Senha" id="password" name="password" value="" type="password">
              </div>
              <a href="<?php echo wp_lostpassword_url( get_permalink() ); ?>" class="alert-link">Perdeu a senha?</a>
              <hr>
              <button type="submit"  class="btn btn-lg btn-success btn-block">Entrar</button>
              <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
            </fieldset>
          </form>
          <?php else: ?>
            <p class="text-center"><i class="fas fa-circle-notch fa fa-circle-o-notch fa-spin fa-2x"></i></p>
            <script>window.location.href = "<?php echo site_url('painel/dashboard') ?>"</script>
          <?php endif ?>
        </div>
      </div>
    </div>
  </div>
</div>