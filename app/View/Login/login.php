<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Mahina Slim Framework">
    <meta name="author" content="João Carias de França">
    <meta name="email" content="joaocariasdefranca@gmail.com">

    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?= TITULO_SISTEMA_COMPLETO ?></title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1><?= TITULO_SISTEMA_COMPLETO ?></h1>
      </div>
      <div class="login-box">
          <form class="login-form" method="POST" action="login/logar">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Login</h3>
          <div class="form-group">
            <label class="control-label">CPF</label>
            <input class="form-control" name="loginInput" id="loginInput" type="text" placeholder="___.___.___-__" autofocus data-mask="999.999.999-99" required>
          </div>
          <div class="form-group">
            <label class="control-label">SENHA</label>
            <input class="form-control" name="senhaInput" id="senhaInput" type="password" placeholder="Password" required>
          </div>          
          <div class="form-group btn-container">
            <button name="btnAcessar" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>Entrar</button>
          </div>
        </form>
        
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mask.js">
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>