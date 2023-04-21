<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>error view</title>
</head>
<body>
<?php 
include_once "views/navbar.php";
include_once 'views/header.php'; 
?>
<main></main>
<style>

.contentPage {
  display: flex;
  justify-content: center;
  translate: 0px 50px;
  color: red;
}

.errorMessage {
  display: flex;
}

</style>

<script>

const $main = document.querySelector("main");
const $error = document.querySelector(".error");
let error = JSON.parse($error.textContent);
console.log(error)
$main.textContent = error.message + error.code;

</script>
</body>
</html>