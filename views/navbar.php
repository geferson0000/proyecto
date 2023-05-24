<!-- navbar -->

<nav>
  <!-- NAV TOP -->
  <div class="nav-top">
    <a class="nav-icon" href="<?php echo constant("URL"); ?>">
      <img src="<?php echo constant('URL'); ?>views/public/img/logo.png" class="logo" alt="100%SanAgustin"></img>
    </a>
  </div>
  <!-- NAV TOP -->

  <!-- NAV LINKS -->
  <div class="nav-links">
    <ul>
      <li>
        <div class="links-title">
          <img src="<?php echo constant('URL'); ?>views/public/img/dashboard.svg" alt="dashboard">
          <span>Tablero</span>
        </div>
        <div class="links-list links-list-desactive">
          <a href="<?php echo constant("URL"); ?>statistic">
            <img src="<?php echo constant('URL'); ?>views/public/img/resume.svg" alt="resumen">
            <span>Estadistica</span>
          </a>
          <a href='<?php echo constant("URL"); ?>history'>
            <img src="<?php echo constant('URL'); ?>views/public/img/history.svg" alt="history">
            <span>Historial</span>
          </a>
          <a href='<?php echo constant("URL"); ?>payment'>
            <img src="<?php echo constant('URL'); ?>views/public/img/statistics.svg" alt="statistics">
            <span>Control de pagos</span>
          </a>
        </div>
      </li>
      <li>
        <div class="links-title">
          <img src="<?php echo constant('URL'); ?>views/public/img/register.svg" alt="register">
          <span>Registro</span>
        </div>
        <div class="links-list">
          <a href="<?php echo constant('URL'); ?>student">
            <img src="<?php echo constant('URL'); ?>views/public/img/student.svg" alt="student">
            <span>Estudiante</span>
          </a>
          <a href='<?php echo constant('URL'); ?>teacher'>
            <img src="<?php echo constant('URL'); ?>views/public/img/teacher.svg" alt="teachers">
            <span>Profesor</span>
          </a>
          <a href='<?php echo constant('URL'); ?>course'>
            <img src="<?php echo constant('URL'); ?>views/public/img/course.svg" alt="course">
            <span>Taller</span>
          </a>
        </div>
      </li>
      <!-- <a href='#'>calendar</a> -->
      <!-- <a href='#'>balance</a> -->
      <li>
        <div class="links-title">
          <img src="<?php echo constant('URL'); ?>views/public/img/settings.svg" alt="settings">
          <span>Configuraciones</span>
        </div>
        <div class="links-list links-list-desactive">
          <a href="">
            <img src="<?php echo constant('URL'); ?>views/public/img/editMyUser.svg" alt="editMyUser">
            <span>Editar mi usuario</span>
          </a>
          <a href='#'>
            <img src="<?php echo constant('URL'); ?>views/public/img/editAnotherUser.svg" alt="editAnotherUser">
            <span>Editar otro usuario</span>
          </a>
        </div>
      </li>
    </ul>
  </div>
  <!-- NAV LINKS -->

</nav>


<script src="<?php echo constant('URL') ?>views/public/javascript/navbar.js"></script>
<script src="<?php echo constant('URL') ?>views/public/javascript/linkListNavbar.js"></script>
<script src="<?php echo constant('URL') ?>views/public/bootstrap/JS/bootstrap.bundle.js"></script>
<!-- end navbar -->