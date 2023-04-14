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
          <a href="<?php echo constant('URL'); ?>student">
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

</nav>


<script src="<?php echo constant('URL') ?>views/public/javascript/navbar.js"></script>
<script src="<?php echo constant('URL') ?>views/public/javascript/linkListNavbar.js"></script>
<script src="<?php echo constant('URL') ?>views/public/bootstrap/JS/bootstrap.bundle.js"></script>
<!-- end navbar -->