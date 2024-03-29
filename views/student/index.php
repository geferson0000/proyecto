<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student</title>
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>views/student/style.css">
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>views/student/modal.css">
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
      <div class='table-header'><b>1st name</b></div>
      <div class='table-header'><b>1st surname</b></div>
      <div class='table-header'><b>gender</b></div>
      <div class='table-header'><b>birthdate</b></div>
    </div>
    <div class="table-number">1</div>
  </div>
  <div class="wave"></div>
</div>
<div class="modals">
  <div class="modal-add">
    <img class="modal-close" src="<?php echo constant("URL") ?>views/public/img/close.svg" alt="close">
    <h2>Enter student information</h2>
    <form class="modal-add-form" action="#" method="post">
      <input id="modal-add-cedula" type="number" placeholder="cedula" name="cedula" minlength="4" maxlength="20" required>
      <input type="text" placeholder="first name" name="first name" minlength="4" maxlength="20" required>
      <input type="text" placeholder="second name" name="second name" minlength="4" maxlength="20" required>
      <input type="text" placeholder="first surname" name="first surname" minlength="4" maxlength="20" required>
      <input type="text" placeholder="second surname" name="second surname" minlength="4" maxlength="20" required>
      <div>
        <input type="radio" id="html" name="fav_language" value="HTML" minlength="4" maxlength="20" required>
        <label for="html">male</label>
        <input type="radio" id="css" name="fav_language" value="CSS" minlength="4" maxlength="20" required>
        <label for="css">female</label>
      </div>
      <input type="tel" placeholder="phone" name="phone" minlength="4" maxlength="20" required>
      <input type="date" placeholder="birhdate" name="birhdate" minlength="4" maxlength="20" required>
      <input type="" placeholder="adress" name="adress" minlength="4" maxlength="20" required>
      <button id="modal-add-submit" type="submit">save</button>
    </form>
  </div>
  <div class="modal-seeMore"></div>
  <div class="modal-edit"></div>
</main>
<script type="module" src="<?php echo constant('URL'); ?>views/student/app.js"></script>
<script type="module" src="<?php echo constant('URL'); ?>views/student/request.js"></script>
</body>

</html>