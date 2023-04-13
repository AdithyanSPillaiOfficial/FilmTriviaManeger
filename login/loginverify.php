<?php

require_once('../cred.php');
session_start();
$username = $_POST['username'];
$password = $_POST['pass'];
// Prepare the SQL statement to select the user with the given username and password
   $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");

   // Bind the parameters
   $stmt->bind_param("ss", $username, $password);

   // Execute the statement
   $stmt->execute();

   // Get the result
   $result = $stmt->get_result();

   if($result->num_rows == 1){
     $_SESSION['username']=$username;
     $_SESSION['status']=true;
     while ($row = mysqli_fetch_assoc($result)) {
       $_SESSION['role']=$row['Role'];
     }
     echo "<h1>LOGIN SUCESS</h1>";

     //echo $_SESSION['role'];
     header('Location: ../');
     exit();
   }
   else {
     echo "<h1>LOGIN FAILED</h1>";

   }

 ?>
