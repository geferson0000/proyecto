<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student</title>
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>views/student/style.css">
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>views/student/modal.css">
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>views/student/modalAdd.css">
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>views/student/modalSeeMore.css">
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>views/student/modalEditUser.css">
</head>

<body>
<?php 
  include_once "views/navbar.php";
  include_once "views/header.php"; 
?>
<main>
  <div>
    <div class="control">
      <div class="control-buttons">
        <button class="controlAdd" value="add">
          <img src="<?php echo constant("URL") ?>views/public/img/add.svg" alt="add">
        </button>
        <button class="controlSeeMore" value="see more">
          <img src="<?php echo constant("URL") ?>views/public/img/editAnotherUser.svg" alt="seeMore">
        </button>
        <button class="controlEdit" value="edit">
          <img src="<?php echo constant("URL") ?>views/public/img/edit.svg" alt="edit">
        </button>
        <button class="controlDelete" value="delete">
          <img src="<?php echo constant("URL") ?>views/public/img/delete.svg" alt="">
        </button>
      </div>
      <form class="control-search" action="#" method=post>
        <input class="searchText" type="search" name="search" placeholder="write student's name">
        <input class="searchSubmit" type="submit" value="search">
      </form>
    </div>
  </div>
  <div class="table-circle">
    <div class="table-student">
      <div class='table-header'><b>ID</b></div>
      <div class='table-header'><b>cedula</b></div>
      <div class='table-header'><b>Nombre</b></div>
      <div class='table-header'><b>Apellido</b></div>
      <div class='table-header'><b>Genero</b></div>
      <div class='table-header'><b>Fecha de nacimiento</b></div>
    </div>
    <div class="table-number">1</div>
  </div>
</div>
<div class="modals">
  <div class="modal-add">
    <button class="modal-add-close">
      <img src="<?php echo constant("URL") ?>views/public/img/close.svg" alt="close">
    </button>
    <h2>Ingresar la information del estudiante</h2>
    <form class="modal-add-form" action="<?php echo constant("URL"); ?>student/api" method="post">
      <input class="modal-add-form-input" id="modal-add-cedula" type="number" placeholder="cedula" name="cedula" minlength="4" maxlength="20" required>
      <input class="modal-add-form-input" type="text" placeholder="Primer nombre" name="firstName" minlength="4" maxlength="20" required>
      <input class="modal-add-form-input" type="text" placeholder="Segundo nombre" name="secondName" minlength="4" maxlength="20" required>
      <input class="modal-add-form-input" type="text" placeholder="Primer apellido" name="firstSurname" minlength="4" maxlength="20" required>
      <input class="modal-add-form-input" type="text" placeholder="Segundo apellido" name="secondSurname" minlength="4" maxlength="20" required>
      <div>
        <input type="radio" id="html" name="gender" value="1" minlength="4" maxlength="20" required>
        <label for="html">Masculino</label>
        <input type="radio" id="css" name="gender" value="0" minlength="4" maxlength="20" required>
        <label for="css">Femenina</label>
      </div>
      <input class="modal-add-form-input" type="phone" placeholder="Telefono" name="phone" minlength="4" maxlength="20" required>
      <input class="modal-add-form-input" type="date" placeholder="Fecha de nacimiento" name="birthdate" minlength="4" maxlength="20" required>
      <input class="modal-add-form-input" type="" placeholder="Dirección" name="adress" minlength="4" maxlength="20" required>
      <button id="modal-add-submit" type="submit">Guardar</button>
    </form>
  </div>
  <div class="modal-seeMore">
    <button class="modal-seeMore-close">
      <img src="<?php echo constant("URL") ?>views/public/img/close.svg" alt="close">
    </button>
    <h2>Enter student information</h2>
    <div class="information">
      <div>
        <label for="names">Nombres:</label>
        <span id="names">geferson leonaiker</span>
      </div>
      <div>
        <label for="lastNames">Apellidos:</label>
        <span id="lastNames">moreno palacios</span>
      </div>
      <div>
        <label for="cedula">Cedula:</label>
        <span id="cedula">28563229</span>
      </div>
      <div>
        <label for="birthdate">Fecha de nacimiento:</label>
        <span id="birthdate"><span>04/04/2001</span> 
        <span>22</span>
        <span>years</span>
      </div>
      <div>
        <label for="names">Direccion:</label>        
        <span id="adress">El Recreo</span>
      </div>
      <div>
        <label for="phone">Telefono:</label>
        <span id="phone">04129915401</span>
      </div>
      <div>
        <label for="gender">Genero:</label>
        <span id="gender">masculino</span>
      </div>
    </div>
    <div class="courses"></div>
    <div class="calendar"></div>
  </div>
  <div class="modal-edit"></div>
</div>
<div class="wave"></div>

</main>
<?php require_once('views/footer.php'); ?>
<script type="module" src="<?php echo constant('URL'); ?>views/student/app.js"></script>
<script type="module" src="<?php echo constant('URL'); ?>views/student/modalAdd.js"></script>
<script type="module" src="<?php echo constant('URL'); ?>views/student/modalSeeMore.js"></script>
<script type="module" src="<?php echo constant('URL'); ?>views/student/request.js"></script>
</body>

</html>