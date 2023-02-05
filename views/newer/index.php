<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>newer</title>
</head>
<body>
  <?php require 'views/header.php'; ?>
  <h1 class="contentPage">I am newer</h1>

  <div class="contentLine">
    <div class="line"></div> <!-- line -->
  </div>

    <div class="newSection">
      <h1>Register section</h1>

      <form action="<?php echo constant("URL"); ?>newer/studentRegister" method="post">
        <input type="text" name="matricula" placeholder="registration code">
        <input type="text" name="nombre" placeholder="name">
        <input type="text" name="apellido" placeholder="last name">
        <input type="submit" value="send">
      </form>

    </div>

    <div class="contentLine">
      <div class="line"></div> <!-- line -->
    </div>

  <style>
    .result {
      display: flex;
      justify-content: center;
    }

    .contentPage {
      display: flex;
      justify-content: center;
      margin-top: 50px;
    }

    .newSection {
      display: flex;
      flex-direction: column;
      margin-top: 5px;
      justify-content: center;
      align-items: center;
    }

    .contentLine {
      display: flex;
      justify-content: center;
    }

    .line {
      background-color: black;
      width: 80%;
      height: 2px;
      margin-bottom: 10px;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    form > input {
      margin: 10px;
    }
  </style>
</body>
</html>