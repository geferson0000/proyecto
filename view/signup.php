<?php
include_once('./module/html.php');

$content = function(){
  include_once('./module/signupHtml.php');
};

template($content, 'Sign up');
?>