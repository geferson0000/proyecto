<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>views/newer/style.css">
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>views/public/css/style-form.css" />
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>views/public/css/signup.css" />
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>views/public/css/style-form-placeholder.css" />
  <title>newer</title>
</head>
<body>
<?php require 'views/header.php'; ?>
<h1 class="contentPage">I am newer</h1>
<div class="contentLine">
  <div class="line"></div> <!-- line -->
</div>
<form class="" action="validateRegister.php" method="POST">
  <!-- part 1 logo and title -->
  <img class="logo" src="Img/logo.png" alt="100%-San-Agustin" />
  <h1 class="title">Register</h1>

  <!-- part 2 input - First Name -->
  <div class="form-label-group">
    <input
      name="Name"
      id="inputName"
      type="text"
      class="form-control"
      placeholder="First Name"
      minlength="4"
      maxlength="20"
    />
    <!-- required autofocus="false" -->
    <label for="inputUser">First Name</label>
  </div>

  <!-- part 3 input - Last Name -->
  <div class="form-label-group">
    <input
      name="LastName"
      id="inputLastName"
      type="text"
      class="form-control"
      placeholder="Last Name"
      minlength="4"
      maxlength="20"
      />
      <!-- required autofocus="false" -->
    <label for="inputLastName">Last Name</label>
  </div>

  <!-- part 4 input - Username -->
  <div class="form-label-group">
    <input
    name="username"
    id="inputUsername"
    type="text"
      class="form-control"
      placeholder="Username"
      minlength="4"
      maxlength="20"
    />
    <!-- required autofocus="false" -->
    <label for="inputUsername">Username or email</label>
  </div>
  
  <!-- part 5 input - Password -->
  <div class="form-label-group">
    <input
      name="password"
      id="inputPassword"
      type="password"
      class="form-control"
      placeholder="Password"
      minlength="4"
      maxlength="20"
    />
    <!-- required autofocus="false" -->
    <label for="inputPassword">Password</label>
  </div>

  <!-- part 6 input - password -->
  <div class="form-label-group">
    <input
      name="password"
      id="inputPassword"
      type="password"
      class="form-control"
      placeholder="Password"
      minlength="4"
      maxlength="20"
    />
    <!-- required autofocus="false" -->
    <label for="inputPassword">Confirm Password</label>
  </div>
  
  <!-- part 7 input - button -->
  <input type="submit" value="sign up" class="inputSign" />
</form>
<div class="contentLine">
  <div class="line"></div> <!-- line -->
</div>
<script type="module" src="./Javascript/validateSignup.js"></script>
    <header>
        <img class="activator-user" id="activator-user" src="/images/users/<?php echo $_SESSION['image']; ?>">
        <nav>
            <ul>
                <li class="first-item">
                    <a class="<?php if ($output[1] == 'user') {
                                    echo 'active-user';
                                } ?>" href="/user"><span class="icon">settings</span><span class="text">Configuración</span></a>
                </li>
                <li>
                    <a href="/modules/logout"><span class="icon">logout</span><span class="text">Cerrar sesión</span></a>
                </li>
            </ul>
        </nav>
    </header>
</div>
</body>
</html>