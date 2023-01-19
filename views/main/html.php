<?php
function template($content, $namePage) {
  ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
  include_once('./module/head.php');
  head($namePage);
  ?>
</head>
<body>
  <?php echo $content()?>
  <script src="bootstrap/JS/bootstrap.bundle.js"></script> 
</body>
</html>
  <?php
}
?>