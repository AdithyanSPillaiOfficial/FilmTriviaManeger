<?php

require_once('../../cred.php');
session_start();
if(!isset($_SESSION['username'])||!isset($_SESSION['status'])){
  header('Location: ../login/');
  exit();
}
//require_once('../functiondef.php');
//FILTERING START

$limit = $_POST['limit'];
$round = $_POST['round'];

echo "Round : $round";



  $stmt = $conn->prepare("SELECT * FROM registration WHERE Status = 'ONGAME' ORDER BY ".$round." DESC");


  // Bind the parameters
  //$stmt->bind_param("ss", $username, $password);

  // Execute the statement
  $stmt->execute();



  $count =0;
  $prevmark=-1;
  $limitover = false;
  // Get the result
  $result = $stmt->get_result();


  while ($row = mysqli_fetch_assoc($result)) {
    $count++;
    /*echo"<tr>
      <td>".$row['TeamID']."</td>


      <td><button type='button' value='pass' onclick = 'statusHandler(this)' name=".$row['TeamID'].">Pass ".$row['TeamID']."</button></td>
      <td><button type='button' value='failed' onclick = 'statusHandler(this)' name=".$row['TeamID'].">Failed ".$row['TeamID']."</button></td>

    </tr>";*/
    if($limitover==false){

      if($row['TeamID']==$limit){
        $limitover=true;
      }


      if($round=="r0"){
      $sql = "UPDATE registration SET Next = 'r1' WHERE registration.TeamID = ".$row['TeamID'];
    }
    else if($round=='r1'){
      $sql = "UPDATE registration SET Next = 'r2' WHERE registration.TeamID = ".$row['TeamID'];
    }
    else if($round=='r2'){
      $sql = "UPDATE registration SET Next = 'r3' WHERE registration.TeamID = ".$row['TeamID'];
    }
    else if($round=='r3'){
      $sql = "UPDATE registration SET Next = 'r4' WHERE registration.TeamID = ".$row['TeamID'];
    }
    else if($round=='r4'){
      $sql = "UPDATE registration SET Next = 'r5' WHERE registration.TeamID = ".$row['TeamID'];
    }
    else if($round=='r5'){
      $sql = "UPDATE registration SET Next = 'r6' WHERE registration.TeamID = ".$row['TeamID'];
    }
    else if($round=='r6'){
      $sql = "UPDATE registration SET Next = 'r7' WHERE registration.TeamID = ".$row['TeamID'];
    }



    }
    else{
      $sql = "UPDATE registration SET Status = 'ELIMINATED' WHERE registration.TeamID = ".$row['TeamID'];
    }



    $nstmt = $conn->prepare($sql);
    $nstmt->execute();
    $nresult = $nstmt->get_result();



  }

  header('Location: ../');


 ?>
