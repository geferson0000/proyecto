<!-- css links -->

<link rel="stylesheet" href="<?php echo constant('URL'); ?>views/public/bootstrap/CSS/bootstrap.css">
<link rel="stylesheet" href="<?php echo constant('URL'); ?>views/public/css/color.css">
<link rel="stylesheet" href="<?php echo constant('URL'); ?>views/public/css/header.css">

<!-- navbar -->
<div class="navbar">
  <!-- NAV TOP -->
  <div class="nav-top">
    <a class="nav-icon" href="<?php echo constant("URL"); ?>">
      <img src="<?php echo constant('URL'); ?>views/public/img/logo.png" class="logo" alt="100%SanAgustin"></img>
    </a>
  </div>
  <!-- NAV TOP -->
  
  <!-- NAV USER -->
  <div class="nav-user">
    <div class="nav-iconUser">
      <img src="<?php echo constant('URL'); ?>views/public/img/user.svg" />
      <span class="nav-nameUser"><?php echo $_SESSION["username"]; ?>sdkjasdsa</span>
    </div>
    <div class="settings">
      <img class="settingsIcon" src="<?php echo constant('URL'); ?>views/public/img/arrowDown.png" alt="arrow">
      <ul class='settings-list'>
        <li class="itemOne">
          <a href="#">
            Configuración
          </a>
        </li>
        <li class="itemTwo">
          <form action="<?php echo constant('URL'); ?>sign/logout" method="POST">
            <input
              value="<?php echo $_SESSION["token"]; ?>" 
              name="token" 
              id="token"
              style="display: none;"
            >
            <input class="itemTwo-input" type="submit" value="Logout">
          </form>
        </li>
      </ul>
    </div>
  </div>
  <!-- NAV USER -->


  <!-- NAV LINKS -->
  <div class="nav-links">
    <ul>
      <li>
        <div class="links-title">
          <img src="<?php echo constant('URL'); ?>views/public/img/dashboard.svg" alt="dashboard">
          <span>Dashboard</span>
        </div>
        <div class="links-list links-list-desactive">
          <a href="">
            <img src="<?php echo constant('URL'); ?>views/public/img/resume.svg" alt="resumen">
            <span>Resumen</span>
          </a> 
          <a href='#'>
            <img src="<?php echo constant('URL'); ?>views/public/img/history.svg" alt="history">
            <span>History</span>
          </a>
          <a href='#'>
            <img src="<?php echo constant('URL'); ?>views/public/img/statistics.svg" alt="statistics">
            <span>Statistics</span>
          </a>
        </div>
      </li>
      <li>
        <div class="links-title">
          <img src="<?php echo constant('URL'); ?>views/public/img/register.svg" alt="register">
          <span>Register</span>
        </div>
        <div class="links-list">
          <a  href="<?php echo constant('URL'); ?>student">
            <img src="<?php echo constant('URL'); ?>views/public/img/student.svg" alt="student">
            <span>Students</span> 
          </a> 
          <a href='#'>
            <img src="<?php echo constant('URL'); ?>views/public/img/teacher.svg" alt="teachers">
            <span>Teachers</span>
          </a>
          <a href='<?php echo constant('URL'); ?>course'>
            <img src="<?php echo constant('URL'); ?>views/public/img/course.svg" alt="course">
            <span>Course</span>
          </a>
        </div>
      </li>      
      <!-- <a href='#'>calendar</a> -->
      <!-- <a href='#'>balance</a> -->
      <li>
        <div class="links-title">
          <img src="<?php echo constant('URL'); ?>views/public/img/settings.svg" alt="settings">
          <span>Settings</span>
        </div>
        <div class="links-list links-list-desactive">
          <a href="">
            <img src="<?php echo constant('URL'); ?>views/public/img/editMyUser.svg" alt="editMyUser">
            <span>Edit my user</span>
          </a> 
          <a href='#'>
            <img src="<?php echo constant('URL'); ?>views/public/img/editAnotherUser.svg" alt="editAnotherUser">
            <span>Edit another user</span>
          </a>
        </div>
      </li>
    </ul>
  </div>
  <!-- NAV LINKS -->

</div>
<!-- end navbar -->

<span class="headerTitle">Title</span>


<script src="<?php echo constant('URL') ?>views/public/Javascript/linkListHeader.js"></script>
<script src="<?php echo constant('URL') ?>views/public/Javascript/settingsIconHeader.js"></script>
<script src="<?php echo constant('URL') ?>views/public/bootstrap/JS/bootstrap.bundle.js"></script>