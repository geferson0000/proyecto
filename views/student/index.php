<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>views/student/style.css">
  <title>Document</title>
</head>

<body>
<?php require "views/header.php"; ?>
<div class='content'>
  <!-- <div class="modals">
    <div class="modal-add">
      <form action="#" method="post">
        <input type="number" placeholder="cedula" name="cedula">
        <input type="text" placeholder="first name" name="first name">
        <input type="text" placeholder="second name" name="second name">
        <input type="text" placeholder="first surname" name="first surname">
        <input type="text" placeholder="second surname" name="second surname">
        <input type="checkbox" placeholder="gender" name="gender">
        <input type="tel" placeholder="phone" name="phone">
        <input type="date" placeholder="birhdate" name="birhdate">
        <input type="" placeholder="adress" name="adress">
        <!-- We add the role="listbox" attribute to our top element -->
        <!-- <div class="select" role="listbox">
          <span class="value">Cherry</span>
          <!-- We also add the role="presentation" to the ul element -->
          <!-- <ul class="optList" role="presentation"> -->
            <!-- And we add the role="option" attribute to all the li elements -->
            <!-- <li role="option" class="option">Cherry</li>
            <li role="option" class="option">Lemon</li>
            <li role="option" class="option">Banana</li>
            <li role="option" class="option">Strawberry</li>
            <li role="option" class="option">Apple</li> -->
          <!-- </ul>
        </div> -->
<!-- 
  </form>
    </div> --> 




    
    
    
    
    
    <!-- <div class="modal-seeMore"></div>
    <div class="modal-edit"></div>
  </div> -->




























  <div>
    <div class="control">
      <div class="control-buttons">
        <button class="controlAdd" value="add">
          <img src="<?php echo constant("URL") ?>views/public/img/add.svg" alt="add">
        </button>
        <button class="controlSeeMore" value="see more">
          <img src="<?php echo constant("URL") ?>views/public/img/editAnotherUser.svg" alt="seeMore">
        </button>
        <button  class="controlEdit" value="edit">
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
      <div class='table-header'>ID</div>
      <div class='table-header'>cedula</div>
      <div class='table-header'>1st name</div>
      <div class='table-header'>2nd name</div>
      <div class='table-header'>1st surname</div>
      <div class='table-header'>2nd surname</div>
      <div class='table-header'>gender</div>
      <div class='table-header'>birthdate</div>
      <div class='table-header'>adress</div>
      <div class='table-header'>phone</div>
      <?php
      $id = 0;
      foreach ($this->message as $student) {

        if ($student->gender == 1){
          $gender = "M";
        } else {
          $gender = "F";
        }

        $id += 1;
        $color = $id % 2;

        if ($color == 0) {
          $colorRow = "dark";
        } else {
          $colorRow = "light";
        }

        echo "<div class='table-item $colorRow'> $id </div>";
        echo "<div class='table-item $colorRow'> $student->cedula </div>";
        echo "<div class='table-item $colorRow'> $student->firstName </div>";
        echo "<div class='table-item $colorRow'> $student->SecondName </div>";
        echo "<div class='table-item $colorRow'> $student->firstSurname </div>";
        echo "<div class='table-item $colorRow'> $student->secondSurname </div>";
        echo "<div class='table-item $colorRow'> $gender </div>";
        echo "<div class='table-item $colorRow'> $student->birthdate </div>";
        echo "<div class='table-item $colorRow'> $student->adress </div>";
        echo "<div class='table-item $colorRow'> $student->phone </div>";
      }
      ?>
    </div>
    <div class="table-number">1</div>
  </div>






  
  <div class="wave"></div>
</div>















<!-- <form action="<?php 
// echo constant('URL'); 
?>student/insert" method="POST">
<input type="number" placeholder="DNI">
<input type="text" placeholder="first name">
<input type="text" placeholder="second name">
<input type="text" placeholder="first surname">
<input type="text" placeholder="second surname">
<input type="text" placeholder="gender">
<input type="text" placeholder="birthdate">
<input type="text" placeholder="adress">
<input type="number" placeholder="phne">
<input type="submit" value="send">
</form> -->

<?php
// echo "<div>";
// var_dump($this->message); 
// echo "</div>";
?>

<script src="<?php echo constant('URL'); ?>views/student/app.js"></script>
</body>

</html>