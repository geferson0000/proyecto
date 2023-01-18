<link rel="stylesheet" href="CSS/style-form.css" />
<link rel="stylesheet" href="CSS/logi.css" />
<link rel="stylesheet" href="CSS/style-form-placeholder.css" />
<form action="validateLogin.php" method="POST">
  <input value="<?php echo $_SESSION["token"]; ?>" name="csrf" id="csrf"
  style="display: none;" >

  <!-- part 1 logo and title -->
  <img class="logo" src="Img/logo.png" alt="100%-San-Agustin" />
  <h1 class="title">Login rama master</h1>

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
  <input type="submit" value="sign in" class="inputSign" />

  <a class="linkSignup" href="signup.php">Do not you have any account?</a>

  <!-- part 6 footer-->
  <p class="text-muted textFooter">&copy; 2022-2023</p>
</form>
<script type="module" src="Javascript/validateLogin.js"></script>
