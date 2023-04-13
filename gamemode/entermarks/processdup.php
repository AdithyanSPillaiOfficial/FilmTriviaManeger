<?php
require_once('../../cred.php');
session_start();
if(!isset($_SESSION['username'])||!isset($_SESSION['status'])){
  header('Location: ../login/');
  exit();
}
$sql="";
$round="undefined";

foreach($_POST as $key => $value) {
    if(!empty($value)) {
      // perform the same operation for each non-empty input field
      if($key == 'round'){
        $round = $value;
      }
      else if($value!='SUBMIT' ){
      //echo "The value of ".$key." is ".$value."<br>";
      $sql = "UPDATE registration SET ".$round." = '".$value."' WHERE registration.TeamID = ".$key ;
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      // execute SQL command
      $result = mysqli_query($conn, $sql);

      // check for errors
      if (!$result) {
        die("Error executing query: " . mysqli_error($conn));
      }
    }

    }
  }

  

  /*

//FILTERING START

  $stmt = $conn->prepare("SELECT * FROM registration WHERE Status = 'ONGAME' ORDER BY ".$round." ASC");


  // Bind the parameters
  //$stmt->bind_param("ss", $username, $password);

  // Execute the statement
  $stmt->execute();


  $count =0;
  $prevmark=-1;

  // Get the result
  $result = $stmt->get_result();
  $rowcount = $result->num_rows;
  $limit = $rowcount/2;

  while ($row = mysqli_fetch_assoc($result)) {
    $count++;
    /* echo"<tr>
      <td>".$row['TeamID']."</td>


      <td><button type='button' value='pass' onclick = 'statusHandler(this)' name=".$row['TeamID'].">Pass ".$row['TeamID']."</button></td>
      <td><button type='button' value='failed' onclick = 'statusHandler(this)' name=".$row['TeamID'].">Failed ".$row['TeamID']."</button></td>

    </tr>";*/
    /*
    if($count>=$limit){
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

    $prevmark = $row[strtoupper($round)];



    }

    else if($prevmark==$row[strtoupper($round)]){

      if($round == 'r0'){
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

    $prevmark = $row[$round];
    }

    else {
      $sql = "UPDATE registration SET Status = 'ELIMINATED' WHERE registration.TeamID = ".$row['TeamID'];

    }

    $nstmt = $conn->prepare($sql);
    $nstmt->execute();
    $nresult = $nstmt->get_result();



  }

*/


// check connection



echo "Sucess";



 ?>
