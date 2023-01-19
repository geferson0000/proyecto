<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="views/public/css/index.css">
  <link rel="stylesheet" href="views/public/css/header.css">
  <link rel="stylesheet" href="views/public/css/carrousel.css" />
  <link rel="stylesheet" href="views/public/bootstrap/CSS/bootstrap.css">
</head>
<body>

<!-- header -->
<div class="header">

  <!-- part 1 -->
  <a href="index.php">
    <img src="views/public/img/logo.png" class="logo" alt="100%SanAgustin"></img>
  </a>

  <!-- part 2 -->
  <ul>

    <!-- button Inicio -->
    <li class='headerCard' role="button">
      <a href="index.php" class="">Inicio</a>
    </li>

    <!-- button Alumnos -->
    <li class="headerCard">
      <a
      class="dropdown-toggle"
      data-bs-toggle="dropdown"
      role="button"
      >Alumnos</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Acción</a></li>
        <li><a class="dropdown-item" href="#">Otra acción</a></li>
        <li><a class="dropdown-item" href="#">Algo más aquí</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Enlace separado</a></li>
      </ul>
    </li>
    
    <!-- button Profesores -->
    <li class="headerCard">
        <a 
        class="dropdown-toggle" 
        data-bs-toggle="dropdown" 
        role="button">Profesores</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Acción</a></li>
          <li><a class="dropdown-item" href="#">Otra acción</a></li>
          <li><a class="dropdown-item" href="#">Algo más aquí</a></li>
        </ul>
    </li>
    <p class="hola"></p>


    <!-- button Talleres -->
    <li class="headerCard">
      <a 
        class="dropdown-toggle" 
        data-bs-toggle="dropdown" 
        role="button" 
      >Talleres</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Acción</a></li>
        <li><a class="dropdown-item" href="#">Otra acción</a></li>
        <li><a class="dropdown-item" href="#">Algo más aquí</a></li>
      </ul>
    </li>

  </ul> 
  <!-- end part 2 -->

  <!-- part 3 -->
  <div class="dropdown loginIcon">
    <div class='circle'>
      <?php
        echo "<p class='username'>". $_SESSION["username"]. "</p>";
      ?>

      <a 
      class="dropdown-toggle" 
      href="#" 
      data-bs-toggle="dropdown">
        <img src="views/public/img/user.PNG" alt="user">
      </a>

      <ul class="dropdown-menu">
        <form action="logout.php" method="POST">
          <li class="dropdown-item">
            <input 
            value="<?php echo $_SESSION["token"]; ?>" 
            name="csrf" 
            id="csrf"
            style="display: none;"
            >
            <input type="submit" value="Log out">
          </li>
        </form>
      </ul>
    </div>
  </div>
</div>
<!-- end header -->
  <!--EL CARROUSEL -->
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <!-- carousel-indicators -->
  <div class="carousel-indicators">
    <!-- 1 -->
    <button
      type="button"
      data-bs-target="#myCarousel"
      data-bs-slide-to="0"
      class="active line1"
    ></button>

    <!-- 2 -->
    <button
      type="button"
      data-bs-target="#myCarousel"
      data-bs-slide-to="1"
      class="line2"
    ></button>

    <!-- 3 -->
    <button
      type="button"
      data-bs-target="#myCarousel"
      data-bs-slide-to="2"
      class="line3"
    ></button>
  </div>

  <!-- carousel-inner -->
  <div class="carousel-inner">
    <!-- 1 -->
    <div class="carousel-item active">
      <img class="bd-placeholder-img" src="views/public/img/T-A.jpg" alt="Teatro-A" />
      <div class="container">
        <div class="carousel-caption text-start title1">
          <h1>El Teatro Alameda.</h1>
          <p>Fue inaugurado el 12 de noviembre de 1943.</p>
        </div>
      </div>
    </div>

    <!-- 2 -->
    <div class="carousel-item">
      <img class="bd-placeholder-img" src="views/public/img/T-A1.jpg" alt="Teatro-A1" />
      <div class="container">
        <div class="carousel-caption title2">
          <h1>Salas.</h1>
          <p>
            Posee una Sala Principal y Secundaria, una Sala de Exposiciones, una
            Sala de Estar, Taquillas y es sede de una radio que sirve a la
            comunidad.
          </p>
        </div>
      </div>
    </div>

    <!-- 3 -->
    <div class="carousel-item">
      <img class="bd-placeholder-img" src="views/public/img/T-A2.jpg" alt="Teatro-A2" />
      <div class="container">
        <div class="carousel-caption title3">
          <h1>Uno de los lugares turísticos más...</h1>
          <p>
            conocidos en San Agustín es el teatro Alameda, ubicado en la avenida
            principal.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- carousel-control -->

  <!-- PREV -->
  <button
    class="carousel-control-prev carousel-control"
    type="button"
    data-bs-target="#myCarousel"
    data-bs-slide="prev"
  >
    <span class="carousel-control-prev-icon"></span>
  </button>

  <!-- NEXT -->
  <button
    class="carousel-control-next carousel-control"
    type="button"
    data-bs-target="#myCarousel"
    data-bs-slide="next"
  >
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<!-- end carousel -->
<script src="views/public/bootstrap/JS/bootstrap.bundle.js"></script> 

</body>
</html>


