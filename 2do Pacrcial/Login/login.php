

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <!--Import Google Icon Font-->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <!--Import materialize.css-->
    <link
      type="text/css"
      rel="stylesheet"
      href="css/materialize.min.css"
      media="screen,projection"
    />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
      body {
        background: url(./images/fondo.png);
        background-size: cover;
      }
      .login {
        margin-top: 200px;
        background-color: rgba(0, 0, 0, 0.5);
      }
    </style>
  </head>

  <body>
    <div class="container">
    
    <?php

    $usuario = $_POST['nombre'];
    $password = $_POST['password'];

    if($usuario == 'Fernando' & $password == '123')
    {
        echo "Bienvenido ".$usuario;
    }
    else
    {
        echo "<h2 class='red-text'>Usuario o contraseña incorrectas </h2>";
    }


?>

    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>
