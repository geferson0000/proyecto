<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2? family= Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700; 1900 & mostrar=intercambiar"> <!--Esto es el link de Google Fonts por el tipo de letra-->
    <link rel="stylesheet" href="<?php echo constant("URL"); ?>/views/sign/style.css"> <!--Aquí va el link del Css-->
</head>
<body>
<?php
$url = constant("URL");
echo "<div class='url' style='display: none;'>$url</div>";
?>
  <main>
    <!--Aquí esta contenido el login el nombre que tenga es el que va a ir en el ccs para personalizarlo.-->
    <div class="contenedor__todo">
      <div class="caja__trasera">
        <div class="caja__trasera-login">
          <h3>¿Ya Tienes Cuenta?</h3>
          <p>Inicia sesión para entrar en la página</p>
          <button id="btn__inicar-sesion">Iniciar Sesión</button>
        </div>
        <div class="caja__trasera-register">
          <h3>¿Aún no tienes Cuenta?</h3>
          <p>Regístrate para poder entrar en la página</p>
          <button id="btn__registrarse">Registrarse</button>
        </div>
    </div>
    <!--Formulario de Login y Registro-->
    <div class="contenedor__login-register">
        <!--Login-->
        <div class="form formulario__login">
          <h2>Iniciar Sesión</h2>
          <input id="inputUser" type="text" placeholder="Nombre de Usuario" name="Usuario">
          <input id="inputPassword" type="password" placeholder="Contraseña" name="Contrasena">
          <button class="inputSign">Entrar</button>
        </div>
          <!--Registro-->
        <div class="form formulario__register" action="php/registro_usuario_backend.php" method="POST">
          <h2>Registrarse</h2> <!--Aquí estoy diciendo que cuando se pulso el botón registarse haga referencia al archivo registro-->
          <input type="text" placeholder="Nombres" name = "Nombres"> <!--Esto ultimo son los nombres exactos que estan el la BD-->
          <input type="text" placeholder="Apellidos" name = "Apellidos">
          <input type="text" placeholder="Nombre de Usuario" name = "Usuario">
          <input type="password" placeholder="Contraseña" name = "Contrasena">
          <button>Registrarse</button>
        </div>
      </div>
    </div>   
  </main>
  <script src="<?php echo constant("URL"); ?>views/sign/script.js"></script> <!--Esto es la vinculación con en archivo de Java-->
  <script src="<?php echo constant("URL"); ?>views/sign/app.js"></script>
</body>
</html>