<?php
session_start();
echo "UNAME : ".$_SESSION['username'];
echo "<br>STATUS : ".$_SESSION['status'];

if(isset($_SESSION['username'])&&isset($_SESSION['status'])) {
  echo "Logged IN";
}
else {
  echo "Not Logged IN";
}



 ?>
