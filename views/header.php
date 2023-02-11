<!-- css links -->

<link rel="stylesheet" href="<?php echo constant('URL'); ?>views/public/bootstrap/CSS/bootstrap.css">
<link rel="stylesheet" href="<?php echo constant('URL'); ?>views/public/css/header.css">

<!-- navbar -->
<div class="navbar activeNavbar">
  
  <!-- NAV TOP -->
  <!-- button -->
  
  
  <div class="nav-top">
    <a class="nav-icon" href="index.php">
      <img src="<?php echo constant('URL'); ?>views/public/img/logo.png" class="logo" alt="100%SanAgustin"></img>
    </a>
    <button class='sideButton activeSideButton'>
      <div class="one activeOne"></div>
      <div class="two activeTwo"></div>
      <div class="three activeThree"></div>
    </button>
  </div>
  <!-- NAV TOP -->
  
  <!-- NAV HEADER -->
  <div class="nav-user">
    <div class="nav-iconUser">
      <img src="<?php echo constant('URL'); ?>views/public/img/user.svg" />
      <span class="nav-nameUser"><?php echo $_SESSION["username"]; ?>sdkjasdsa</span>
    </div>
    <div class="settings">
      <img class="settingsIcon" src="<?php echo constant('URL'); ?>views/public/img/arrowDown.png" alt="arrow">
      <ul class='settings-list desactiveSettings'>
        <li class="itemOne">
          <a href="#">
            Configuración
          </a>
        </li>
        <li class="itemTwo">
          <form action="logout.php" method="POST">
            <input
              value="<?php echo $_SESSION["token"]; ?>" 
              name="csrf" 
              id="csrf"
              style="display: none;"
            >
            <input class="itemTwo" type="submit" value="Logout">
          </form>
        </li>
      </ul>
    </div>

  </div>
  <!-- NAV HEADER -->


  <!-- NAV LINKS -->
  <div class="nav-links">
    <ul>
      <li>
        <div>
          <span>Dashboard</span>
          <a href="">Resumen</a> 
          <a href='#'>History</a>
          <a href='#'>Statistics</a>
        </div>
      </li>
      <li>
        <div>
          <span>Register</span>
          <a href="">Students</a> 
          <a href='#'>Teachers</a>
          <a href='#'>Course</a>
        </div>
      </li>      
      <li>
        <!-- <a href='#'>calendar</a> -->
        <a href="<?php echo constant('URL'); ?>help">help</a>
      </li>
      <li>
        <!-- <a href='#'>balance</a> -->
        <a href="<?php echo constant('URL'); ?>newer">newer</a>
      </li>
      <li>
        <div>
          <span>Settings</span>
          <a href="">Edit my user</a> 
          <a href='#'>Edit another user</a>
        </div>
      </li>
    </ul>
  </div>
  <!-- NAV LINKS -->

</div>
<!-- end navbar -->
<script src="<?php echo constant('URL') ?>views/public/Javascript/header.js"></script>