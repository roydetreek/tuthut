<?php
  $file = explode(".",basename (__FILE__));
  $file = $file[0];
  require_once('inc/header.php');
  
  require_once('inc/pre-form.php');
  require_once('inc/record-story.php');
  require_once('inc/post-form.php');
  
  require_once('inc/footer.php');
?>