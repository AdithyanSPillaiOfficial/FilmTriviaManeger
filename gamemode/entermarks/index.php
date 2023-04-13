<?php
session_start();
require_once('../functiondef.php');
if(!isset($_SESSION['username'])||!isset($_SESSION['status'])){
  header('Location: /filmtrivia/login/');
  exit();
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>WELCOME</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="/filmtrivia/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/filmtrivia/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/filmtrivia/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/filmtrivia/login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/filmtrivia/login/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/filmtrivia/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/filmtrivia/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/filmtrivia/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/filmtrivia/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/filmtrivia/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="/filmtrivia/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('/filmtrivia//login/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">

					<span class="login100-form-title p-b-49">
            Game Mode
					</span>

          <!--div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" onclick="redirectTo('./finalsubmit.php')">
								<?php //echo retrieve("round"); ?>
							</button>
						</div>
					</div-->


          <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" onclick="redirectTo('./r0.php')">
								Round 0
							</button>
						</div>
					</div>

          <br><br>

          <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" onclick="redirectTo('./r1.php')">
								Round 1
							</button>
						</div>
					</div>

          <br><br>

          <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" onclick="redirectTo('./r2.php')">
								Round 2
							</button>
						</div>
					</div>

          <br><br>

          <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" onclick="redirectTo('./r3.php')">
								Round 3
							</button>
						</div>
					</div>

          <br><br>


          <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" onclick="redirectTo('./r4.php')">
								Round 4
							</button>
						</div>
					</div>

          <br><br>


          <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" onclick="redirectTo('./r5.php')">
								Round 5
							</button>
						</div>
					</div>

          <br><br>

          <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" onclick="redirectTo('./r6.php')">
								Round 6
							</button>
						</div>
					</div>

          <br><br>

          <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" onclick="redirectTo('./r7.php')">
								Round 7
							</button>
						</div>
					</div>

          <br><br>

          <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" onclick="redirectTo('../')">
								BACK
							</button>
						</div>
					</div>




			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

  <script>
  function redirectTo(url) {
      window.location.href = url;
  }
  </script>
<!--===============================================================================================-->
	<script src="/filmtrivia/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/filmtrivia/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/filmtrivia/login/vendor/bootstrap/js/popper.js"></script>
	<script src="/filmtrivia/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/filmtrivia/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/filmtrivia/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="/filmtrivia/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/filmtrivia/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/filmtrivia/login/js/main.js"></script>

</body>
</html>
