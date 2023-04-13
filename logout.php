<?php
session_start();
if(!isset($_SESSION['username'])||!isset($_SESSION['status'])){
  header('Location: ./login/');
  exit();
}
unset($_SESSION['username']);
unset($_SESSION['status']);
header('Location: ./login/');
exit();
 ?>
