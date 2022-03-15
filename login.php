<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>

<body>
	<div class="container mt-5" style="background-color: blueviolet; ">
		<div class="row ">
			<div class="col-md-6" style="background-color: red; height: 80vh">
				
			</div>
			<div class="col-md-6 d-flex align-items-center " style="background-color: antiquewhite; height: 80vh" >
				<form class="ms-5" method="post" name="loginForm" onsubmit="return validateLoginForm()">
					<h1>Log in</h1>
					<div class="mb-3 mt-4">
						<label for="email" class="form-label">Email address</label>
						<input type="email" class="form-control" id="emailInput" placeholder="name@example.com">
					</div>
					<div class="mb-3">
						<label for="password" class="form-label">Password</label>
						<input type="password" class="form-control" name="passwordInput" id="passwordInput" placeholder="p1@#*.A" required>
					</div>
					<div class="mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="rememberme" name="rememberme">
                        <label class="form-check-label" for="flexCheckChecked">
                        Remember Me
                        </label>
					</div>
					<div class="mb-3 mt-4">
						<button type="submit" class="btn login-btn-color" name="login" value="login">Login</button>
                        <button class="forgetbtn btn btn-outline-warning">Forgot Your Password ?</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>