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

          <a class="login-tab" href="register.php">Registrate</a>
        </h3>
        <h3 class="active"><a href="login.php">Acceder</a></h3>
      </div>
      <!--.tabs-->

      <div class="tabs-content">       
        <!--.signup-tab-content-->
        

        <div id="login-tab-content active">
          <form class="login-form" action="controller/loginControl.php" method="post">
            <input
              type="text"
              class="input"
              name="user"
              placeholder="Usuario"
              required
            />
            <input
              type="Contraseña"
              class="input"
              name="pass"
              autocomplete="off"
              placeholder="Password"
              required
            />
            
            <input type="submit" class="button" name="entrar" value="Entrar" />
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
