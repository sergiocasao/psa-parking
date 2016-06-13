<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login | Parque San Antonio Carparking Map</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!--background-image: url('img/Blur-3.png');background-size:cover;background-repear:no-repeat; -->
  <body style="background-color:white;">
    <div class="container-fluid" style="margin-bottom:40px;">
      <div class="row" style="padding:1em;font-weight:300;">
        <div class="col-md-12 col-sm-12 col-xs-12 text-left">
          <a href="http://www.joffyholdings.com"><i class="fa fa-angle-left"></i> Volver a Joffy Holdings</a>
        </div>
        
      </div>
      <div class="row" style="padding:0px 0 10px 0;">
        <div class="col-md-4 col-md-offset-4 text-center col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
          <img src="img/logobenusta2.png" width="300px" class="img-responsive" style="margin: 0 auto;" />
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12">
          <form role="form" method="post" action="iniciarSesion.php">
            <div class="form-group">
              <!--<label for="ejemplo_email_1">Direccion de correo</label>-->
              <div class="input-group">
                <span class="input-group-addon" style="border-bottom: 1px solid #0082C8;color:#0082C8;"><i class="fa fa-envelope-o"></i></span>
                <input type="email" class="form-control" name="email" placeholder="Correo electronico" style="border-bottom: 1px solid #0082C8;box-shadow:none;font-size:13px;">
              </div>
            </div>
            <div class="form-group">
              <!--<label for="ejemplo_password_1">Contraseña</label>-->
              <div class="input-group">
                <span class="input-group-addon" style="border-bottom: 1px solid #0082C8;color:#0082C8;"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" placeholder="Contraseña" style="border-bottom: 1px solid #0082C8;box-shadow:none;font-size:13px;">
              </div>
            </div>
            <button type="submit" class="btn  btn-block btn-lg" name="password" style="text-transform:none;font-size:14px;background-color:#0082C8;color:white;">Iniciar sesión</button>
          </form>
        </div>
      </div>
      <div class="row" style="margin:2em 0 0 0;">
        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
          <a href="#">Sobre los desarrolladores</a> | <a href="#" >Aviso de privacidad</a>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>