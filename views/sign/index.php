<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>views/public/css/style-form-placeholder.css" />
<link rel="stylesheet" href="<?php echo constant('URL'); ?>views/public/css/color.css">
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>views/sign/style.css">
  <title>Document</title>
</head>
<body>
<div class="background"><div></div></div>
<div class="content-form">
<div class="diagonal"></div>

  <form action="<?php echo constant('URL'); ?>./sign/login" method="post">
    <input value="<?php echo $_SESSION["token"]; ?>" name="csrf" id="csrf" style="display: none;" >

  <!-- part 1 logo and title -->
  <img class="logo" src="<?php echo constant('URL'); ?>views/public/img/logo.png" alt="100%-San-Agustin" />
  <h1 class="title">Login rama MVC</h1>

  <!-- part 2 input - username -->
  <div class="form-label-group">
    <input 
      name="username"
      id="inputUser"
      type="text"
      class="form-control username"
      placeholder="Username"
      minlength="4"
      maxlength="20"
      required
    />
    <!-- required autofocus="false" -->
    <label for="inputUser">Username</label>
  </div>

  <!-- part 3 input - password -->
  <div class="form-label-group">
    <input
      name="password"
      id="inputPassword"
      type="password"
      class="form-control password"
      placeholder="Password"
      minlength="4"
      maxlength="20"
      required
    />
    <!-- required autofocus="false" -->
    <label for="inputPassword">Password</label>
  </div>

  <!-- part 4 input checkbox -->
  <div class="checkbox" role="button">
    <label class="labelCheckbox">
      <input class="inputCheckbox" type="checkbox" value="remember-me" />
      remember me
    </label>
  </div>
  
  <!-- part 5 input - button -->
  <div class="content-inputSign">
    <input type="submit" value="sign in" class="inputSign" />
  </div>
  
  <a class="linkSignup" href="signup.php">Do not you have any account?</a>
  
  <!-- part 6 footer-->
  <p class="text-muted textFooter">&copy; 2022-2023</p>
</form>
</div>

<script type="module" src="<?php echo constant('URL'); ?>views/sign/app.js"></script>
  
</body>
</html>
