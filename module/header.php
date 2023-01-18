<link rel="stylesheet" href="CSS/header.css">

<!-- header -->
<div class="header">

  <!-- part 1 -->
  <a href="index.php">
    <img src="Img/logo.png" class="logo" alt="100%SanAgustin"></img>
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
        <img src="Img/user.PNG" alt="user">
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