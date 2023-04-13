<?php
session_start();
if(!isset($_SESSION['username'])||!isset($_SESSION['status'])){
  header('Location: ../login/');
  exit();
}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>TEAM REGISTRATION</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login/css/util.css">
	<link rel="stylesheet" type="text/css" href="../login/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('../login/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" method="post" action="registermngr.php" id="registerform">
					<span class="login100-form-title p-b-49">
						Register
					</span>
					<center>
					<div>
						<p class="label-input100" name="message" id="message" >
               <?php if( isset($_SESSION['sucessflag']) ){
                 if ($_SESSION['sucessflag']) echo "Registration Sucess";
                  else echo "Please Click Register";

                }
                else echo "Please Click Register";
                unset($_SESSION['sucessflag']);
                ?></p>
					</div></center><br>

					<!--div class="wrap-input100 validate-input m-b-23" data-validate = "Team Name is reauired">
						<span class="label-input100">Team Name</span>
						<input class="input100" type="text" name="TeamName" placeholder="Type your Team Name">
						<span class="focus-input100" data-symbol="&#xf209;"></span>
					</div-->

          <div class="wrap-input100 validate-input m-b-23" data-validate = "Participant 1 is reauired">
						<span class="label-input100">Participant 1 Name</span>
						<input class="input100" type="text" name="P1" placeholder="Participant 1" id="P1">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

          <div class="wrap-input100 m-b-23" >
						<span class="label-input100">Participant 2 Name</span>
						<input class="input100" type="text" name="P2" placeholder="Participant 2" id="P2">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

          <div class="wrap-input100 validate-input m-b-23" data-validate = "Phone Number is reauired">
						<span class="label-input100">Phone Number</span>
						<input class="input100" type="text" name="phno" placeholder="Phone Number" id="phno">
						<span class="focus-input100" data-symbol="&#xf202;"></span>
					</div>



<br><br>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Register
							</button>
						</div>
					</div>

          <br><br>

          <a href="../">Back</a>
<!--
					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

						<a href="#" class="txt2">
							Sign Up
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

  <!--script src="./requestscript.js"></script-->

<!--===============================================================================================-->
	<script src="../login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../login/vendor/bootstrap/js/popper.js"></script>
	<script src="../login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../login/vendor/daterangepicker/moment.min.js"></script>
	<script src="../login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../login/js/main.js"></script>

</body>
</html>
