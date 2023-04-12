<!-- header -->
<?php
$url = constant("URL");
echo "<div class='url'>$url</div>";
?>
<header>
    <div class="nav-iconUser">
      <img src="<?php echo constant('URL'); ?>views/public/img/user.svg" />
      <span class="nav-nameUser"><?php echo $_SESSION["username"]; ?> moreno</span>
    </div>
    <h2 class="header-title-page"></h2>
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
            <input value="<?php echo $_SESSION["token"]; ?>" name="token" id="token" style="display: none;">
            <input class="itemTwo-input" type="submit" value="Logout">
          </form>
        </li>
      </ul>
    </div>
</header>

<script src="<?php echo constant('URL') ?>views/public/javascript/header.js"></script>
<script src="<?php echo constant('URL') ?>views/public/javascript/settingsIconHeader.js"></script>
<!-- end header -->