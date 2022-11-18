<?php include("includes/headerlogin.php")?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="asset_login/login.css" />
    <script
      src="https://kit.fontawesome.com/99eab41a45.js"
      crossorigin="anonymous"
    ></script>
    <title>Login | DevComercial</title>
    <script src="login.js" ></script>   
      <script>

      </script>
  </head>
  <body>
    <div class="form-wrap">

      <div class="tabs">
        <h3 class="signup-tab">

          <a class="active" href="register.php">Registrate</a>
        </h3>
        <h3 class="login-tab"><a href="login.php">Acceder</a></h3>
      </div>
      <!--.tabs-->

      <div class="tabs-content">
        <div id="signup-tab-content" class="active">
          <form class="signup-form" action="controller/registerControl.php" method="POST">
            <input
              type="email"
              name="email"
              class="input"
              placeholder="Correo"
              required
            />
            <input
              type="text"
              class="input"
              name="name"
              placeholder="Nombre de usuario"
              required
            />
            <input
              type="password"
              class="input"
              name="password"
              placeholder="Contraseña"
              required
            />
            <input type="submit" class="button" name="register_user" value="register" />
            <p class="warning" id="warning"></p>
          </form>
          <!--.login-form-->
          <div class="help-text"></div>
          <p><center><h5>Desarrollado Por Angel Quezada</h5></center></p>
        </div>
        <!--.signup-tab-content-->

        <div id="login-tab-content">
          <form class="login-form" action="" method="post">
            <input
              type="text"
              class="input"
              id="user_login"
              autocomplete="off"
              placeholder="Usuario o Email"
            />
            <input
              type="Contraseña"
              class="input"
              id="user_pass"
              autocomplete="off"
              placeholder="Password"
            />
            
            <input type="submit" class="button" value="Entrar" />
          </form>
         
          <div class="help-text">
           
          </div>
          <!--.help-text-->
        </div>
        <!--.login-tab-content-->
      </div>
      <!--.tabs-content-->
    </div>
    <!--.form-wrap-->

    <script src="asset_login/login.js"></script>

    <script></script>
  </body>
</html>
