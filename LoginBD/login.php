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

    $dbhost="localhost";
    $dbuser="root";
    $dbpassword="12345";
    $dbname="login";

    $conn=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
    if(!$conn)
    {
      die("Error, no hay conexión: ".mysqli_connect_error());
    }

    $usuario = $_POST['nombre'];
    $password = $_POST['password'];

    $query=mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$usuario."' and password = '".$password."'");
    $nr = mysqli_num_rows($query);

    if($nr==1)
    {
      header("Location: bienvenida.html");
    }
    elseif($nr==0)
    {
      echo "<h1 class='red-text'>Error usuario o contraseña incorrectos </h1>";
    }
?>

    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>
