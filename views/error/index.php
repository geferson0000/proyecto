<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>error view</title>
</head>
<body>
<?php require 'views/header.php'; ?>
  <h1 class="contentPage"><?php echo $this->message ?></h1>
  <style>
    .contentPage {
      display: flex;
      justify-content: center;
      translate: 0px 50px;
      color: red;
    }
  </style>
</body>
</html>