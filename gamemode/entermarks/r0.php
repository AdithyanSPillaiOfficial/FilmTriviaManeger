<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Team View</title>
  <style media="screen">
  h1{
font-size: 30px;
color: #fff;
text-transform: uppercase;
font-weight: 300;
text-align: center;
margin-bottom: 15px;
}
table{
width:100%;
table-layout: fixed;
}
.tbl-header{
background-color: rgba(255,255,255,0.3);
}
.tbl-content{
height:500px;
overflow-x:auto;
margin-top: 0px;
border: 1px solid rgba(255,255,255,0.3);
}
th{
padding: 20px 15px;
text-align: left;
font-weight: 500;
font-size: 12px;
color: #fff;
text-transform: uppercase;
}
td{
padding: 15px;
text-align: left;
vertical-align:middle;
font-weight: 300;
font-size: 12px;
color: #fff;
border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
/*background: -webkit-linear-gradient(left, #25c481, #25b7c4);
background: linear-gradient(to right, #25c481, #25b7c4);*/
background:  url('/filmtrivia/login/images/bg-01.jpg') no-repeat center center fixed;
background-size: cover;
font-family: 'Roboto', sans-serif;
}
section{
  background-color:rgba(0, 0, 0, 0.4);

margin: 50px;
}

@media only screen and (max-width: 480px) {
  /* CSS styles for mobile devices go here */
  section{
    background-color:rgba(0, 0, 0, 0.4);

  margin: 10px;
  }
  table {
  table-layout: auto;
  max-width: 100%;
}

}


/* follow me template */
.made-with-love {
margin-top: 40px;
padding: 10px;
clear: left;
text-align: center;
font-size: 10px;
font-family: arial;
color: #fff;
}
.made-with-love i {
font-style: normal;
color: #F50057;
font-size: 14px;
position: relative;
top: 2px;
}
.made-with-love a {
color: #fff;
text-decoration: none;
}
.made-with-love a:hover {
text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
  width: 6px;
}
::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
::-webkit-scrollbar-thumb {
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
  </style>
  <script>
  // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
$('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
  </script>
</head>

<section>
  <!--for demo wrap-->
  <h1>Teams On Round 0</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Team ID</th>


          <th>Enter Marks</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <form  action="process.php" method="post">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <input type="text" name="round" value="r0" hidden>

        <?php

        session_start();
        if(!isset($_SESSION['username'])||!isset($_SESSION['status'])){
          header('Location: ../../login/');
          exit();
        }

        require_once('../../cred.php');

        // Prepare the SQL statement to select the user with the given username and password
           $stmt = $conn->prepare("SELECT * FROM registration WHERE Status = 'ONGAME' AND Next = 'r0' ORDER BY TeamID");

           // Bind the parameters
           //$stmt->bind_param("ss", $username, $password);

           // Execute the statement
           $stmt->execute();

           // Get the result
           $result = $stmt->get_result();

           while ($row = mysqli_fetch_assoc($result)) {
             /*echo"<tr>
               <td>".$row['TeamID']."</td>


               <td><button type='button' value='pass' onclick = 'statusHandler(this)' name=".$row['TeamID'].">Pass ".$row['TeamID']."</button></td>
               <td><button type='button' value='failed' onclick = 'statusHandler(this)' name=".$row['TeamID'].">Failed ".$row['TeamID']."</button></td>
             </tr>";*/
             echo"<tr>
               <td>".$row['TeamID']."</td>
               <td><input type='text' name='".$row['TeamID']."' value=''></td>


             </tr>";
           }

         ?>

         <tr>
           <td colspan="2">
             <input type="submit" name="submit" value="SUBMIT">

           </td>
         </tr>


      </tbody>
    </table>

  </div>
</section>
<script type="text/javascript">
function statusHandler(button){
  if(button.value=='pass'){
    alert(button.name + " Passed");
  }
  else {
    alert(button.name + " failed")
  }
}

</script>
