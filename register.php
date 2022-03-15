<?php
session_start();
include("dbconnect.php");

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirmPassword = $_POST["confirmPassword"];
$status = "active";
$otp = "0";
// $otp = rand(1000, 9999);
$credit = "0";

if (isset($_POST['signup'])) {
    if($password != $confirmPassword){
            //this is javascript - message box and bring u to another page
            echo "<script type='text/javascript'>alert('Password Not match!');window.location.assign('register_user.php');</script>'";
    }else{
        $sqlregister = "INSERT INTO `tbl_user`(`user_name`, `user_email`, `password`, `otp`, `credit`, `status`) VALUES ('$name','$email','$password','$otp','$credit','$status')";
        try {
            $con->exec($sqlregister);
            echo "<script>alert('Registration successful')</script>";
            echo "<script>window.location.replace('../php/login.php')</script>";
        } catch (PDOException $e) {
            echo "<script>alert('Registration failed')</script>";
            echo "<script>window.location.replace('../php/register_user.php')</script>";
        }
    }
}
    
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="script.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>

<body>
	<div class="container mt-5">
		<div class="row" method="post" enctype="multipart/form-data">
			<div class="col-md-12 mb-3">
				<h3>Sign Up</h3>
			</div>
			<div class="col-md-2">
				<input class="studentInput" name="inlineRadioOptions" type="radio" id="student">
				<label class="studentLabel" for="student">Student</label>
			</div>
			<div class="col-md-10">
				<input class="instructorInput" name="inlineRadioOptions" type="radio" id="instructor">
				<label class="instructorLabel" for="instructor">Instructor</label>
			</div>
			<div class="col-md-5 mt-3">
				<label for="name" class="form-label">Name</label>
				<input type="name" class="form-control" id="nameInput" placeholder="Full Name" required="true" disabled="disabled"/>
			</div>
			<div class="col-md-6 mt-3"></div>
			<div class="col-md-5 mt-3">
				<label for="email" class="form-label">Email address</label>
				<input type="email" class="form-control" id="emailInput" placeholder="name@example.com" disabled="disabled"/>
			</div>
			<div class="col-md-6 mt-3"></div>
			<div class="col-md-4 mt-3">
				<label for="password" class="form-label">Password</label>
				<input type="password" class="form-control" name="passwordInput" id="passwordInput" placeholder="p1@#*.A" required disabled="disabled"/>
			</div>
			<div class="col-md-4 mt-3">
				<label for="re-enter password" class="form-label">Re-enter password</label>
				<input type="password" class="form-control" name="re_enter_passwordInput" id="re_enter_passwordInput" placeholder="re-enter password" required disabled="disabled"/>
			</div>
			<div class="col-md-3 mt-5">
				<span id='message' style='font-size: 25px'></span>
			</div>
			<div class="col-md-6 mt-3">
				<label for="mobile number" class="form-label">Mobile Number</label>
				<input type="mobile number" class="form-control" id="mobileNumberInput" placeholder="012-3456789" disabled="disabled"/>
			</div>
			<div class="col-md-8 mt-3">
				<label for="address line 1" class="form-label">Address Line 1</label>
				<input type="address line 1" class="form-control" id="address_line_1Input" placeholder="address line 1" disabled="disabled"/>
			</div>
			<div class="col-md-8 mt-3">
				<label for="address line 2" class="form-label">Address Line 2</label>
				<input type="address line 2" class="form-control" id="address_line_2Input" placeholder="address line 2" disabled="disabled"/>
			</div>
			<div class="col-md-2 mt-3">
				<label for="postcode" class="form-label">Postcode</label>
				<input type="postcode" class="form-control" id="postcodeInput" placeholder="postcode" disabled="disabled"/>
			</div>
			<div class="col-md-5 mt-3">
				<label for="state" class="form-label">State</label>
				<input type="state" class="form-control" id="stateInput" placeholder="state" disabled="disabled"/>
			</div>
			<div class="col-md-5 mt-3">
				<label for="country" class="form-label">Country</label>
				<input type="country" class="form-control" id="countryInput" placeholder="country" disabled="disabled"/>
			</div>
			<div class="col-md-5 mt-3">
				<label for="image" class="form-label">Upload a personal image</label>
			</div>
			<div class="input-group">
				<input type="file" class="form-control" id="inputGroupFile" accept="image/*" disabled="disabled"/>
			</div>
			<div class="col-12 mt-4 mb-5">
				<button class="btn btn-primary" type="submit" onclick="loading();">Submit form</button>
			</div>
		</div>
	</div>
	<script>
		$('#passwordInput, #re_enter_passwordInput').on('keyup', function () {
		  if ($('#passwordInput').val() == $('#re_enter_passwordInput').val()) {
			$('#message').html('Matching').css('color', 'green');
		  } else 
			$('#message').html('Not Matching').css('color', 'red');
		});
	</script>
</body>
</html>