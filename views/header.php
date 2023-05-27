<!-- header -->
<?php
$url = constant("URL");
?>
<div id='url' ><?php print($url); ?></div>
<link rel="stylesheet" href="<?php echo constant('URL') ?>views/public/bootstrap/CSS/bootstrap.css">
<header class="row">

  <div class="col-15">
    <div class="content navbar-expand sticky-top px-4 py-0">


        <!-- BROWSER -->
        <form class="header-search d-none d-md-flex ms-4">
          <input id="header-search-input1" class="form-control bg-dark border-0" type="search" placeholder="Buscar">
          <input id="header-search-input2" type="submit" value="Buscar">
        </form>
        

        <!-- ZONE BUTTONS -->
        <div class="buttons navbar-nav align-items-center ms-auto">

          <!-- NOTIFICATIONS -->
          <div class="ring nav-item dropdown">
            
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="rounded-circle me-lg-1" src="<?php echo constant('URL') ?>views/public/img/notification-color.png" alt="">
              <span class="d-none d-lg-inline-flex">Notificaciones</span>
            </a>

            <div class=" dropdown-menu dropdown-menu-end border-0 rounded-0 rounded-bottom m-0">
              <a href="historial.html" class="dropdown-item">
                <img src="<?php echo constant('URL') ?>views/public/img/notification.PNG" alt="notification.icon" class="bx bx-user me-2">
                <h6 class="fw-normal mb-0">Nuevo Alumno Agregado</h6>
                <small>Hace 5 minutos</small>
              </a>
              <hr class="dropdown-divider">
              <a href="historial.html" class="dropdown-item">
                <img src="<?php echo constant('URL') ?>views/public/img/notification.PNG" alt="notification.icon" class="bx bx-user me-2">
                <h6 class="fw-normal mb-0">Nuevo Usuario Agregado</h6>
                <small>Hace 10 minutos</small>
              </a>
              <hr class="dropdown-divider">
              <a href="historial.html" class="dropdown-item">
                <img src="<?php echo constant('URL') ?>views/public/img/notification.PNG" alt="notification.icon" class="bx bx-user me-2">
                <h6 class="fw-normal mb-0">Cambio de Contraseña</h6>
                <small>Hace 15 minutos</small>
              </a>
              <hr class="dropdown-divider">
              <a href="historial.html" class="dropdown-item text-center">Ver todas las notificaciones</a>
            </div>
          </div>

          <!-- USER ICON -->
          <div class="userIcon nav-item dropdown">
            <a href="#" class="link nav-link dropdown-toggle" data-bs-toggle="dropdown">
              <img class="rounded-circle me-lg-2" src="<?php echo constant('URL') ?>views/public/img/user.png" alt="usuario">
              <span class="d-none d-lg-inline-flex">Usuario</span>
            </a>
            <div class="list dropdown-menu dropdown-menu-end border-0 rounded-0 rounded-bottom m-0">
              <a href="my-perfil.html" class="dropdown-item">
                <img src="<?php echo constant('URL') ?>views/public/img/img-user.PNG" alt="user.icon" class="bx bx-user me-2">
                        Mi Perfil
              </a>
              <a href="edit-user.html" class="dropdown-item">
                <img src="<?php echo constant('URL') ?>views/public/img/setting.PNG" alt="setting.icon" class="bx bx-user me-2">
                        Editar Usuarios
              </a>
              <hr class="dropdown-divider">
              <a href="index.html" class="dropdown-item">
                <img src="<?php echo constant('URL') ?>views/public/img/log-out.PNG" alt="log-out.icon" class="bx bx-user me-2">
                        Cerrar Sesion
              </a>
            </div>
          </div>
        </div>

    </div>
  </div>
</header>
<script src="<?php echo constant('URL') ?>views/public/bootstrap/JS/bootstrap.bundle.js"></script>
<script src="<?php echo constant('URL') ?>views/public/javascript/header.js"></script>
<!-- <script src="<?php echo constant('URL') ?>views/public/javascript/settingsIconHeader.js"></script> -->
<!-- end header -->