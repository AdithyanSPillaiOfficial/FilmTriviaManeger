<?php
session_start();
if(!isset($_SESSION['username'])||!isset($_SESSION['status'])){
  header('Location: ../login/');
  exit();
}
require_once('../cred.php');
//$teamname = $_POST['TeamName'];
$p1 = $_POST['P1'];
$p2 = $_POST['P2'];
$phone = $_POST['phno'];
// Prepare the SQL statement to select the user with the given username and password
   $stmt = "INSERT INTO `registration` ( `P1`, `P2`, `Status`,`Next`,`ContactNo`) VALUES ('".$p1."', '".$p2."','ONGAME','r0','".$phone."')";



   // Get the result
   if (mysqli_query($conn, $stmt)) {
    echo "Sucess";
    $_SESSION['sucessflag']=true;
    header('Location: ./');
} else {
    echo "Error: " . $stmt . "<br>" . mysqli_error($conn);
}

 ?>
