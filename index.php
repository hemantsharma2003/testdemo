<?php include ('./conn/conn.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration and Login System</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="./assets/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/bootstrap.min.css">
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="./assets/validation.js"></script>
</head>
<body>
    
    <div class="main">

        <!-- Login Area -->
        <div class="login" id="loginForm">
            <h1 class="text-center">Login Form</h1>
            <div class="login-form">
                <form action="./endpoint/login.php" id="form" method="POST">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" required id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" required id="password" name="password">
                    </div>
                    <p class="registrationForm" onclick="showRegistrationForm()">No Account? Register Here.</p>
                    <button type="submit" class="btn btn-dark login-btn form-control">Login</button>
                </form>
            </div>
        </div>


        <!-- Registration Area -->
        <div class="registration" id="registrationForm">
            <h1 class="text-center">Registration Form</h1>
            <div class="registration-form">
            <form action="./endpoint/add-user.php" method="POST">
                <div class="form-group row">
                    <div class="col-6">
                        <label for="firstName">First Name:</label>
                        <input type="text" class="form-control" required id="firstName" name="first_name">
                    </div>
                    
                    <div class="col-6">
                        <label for="lastName">Last Name:</label>
                        <input type="text" class="form-control" required id="lastName" name="last_name">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-5">
                        <label for="contactNumber">Contact Number:</label>
                        <input type="number" class="form-control" id="contactNumber" required name="contact_number" maxlength="11">
                    </div>
                    <div class="col-7">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" required id="email" name="email">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="address">Address:</label>
                   <textarea class="form-control" id="address" name="address"></textarea>
                </div>
                 <div class="form-group">
                    <label for="registerUsername">State:</label>

		<select class="form-control" name="state">
			<option value="AP">Andhra Pradesh</option>
			<option value="AR">Arunachal Pradesh</option>
			<option value="AS">Assam</option>
			<option value="BR">Bihar</option>
			<option value="CT">Chhattisgarh</option>
			<option value="GA">Gujarat</option>
			<option value="HR">Haryana</option>
			<option value="HP">Himachal Pradesh</option>
			<option value="JK">Jammu and Kashmir</option>
			<option value="GA">Goa</option>
			<option value="JH">Jharkhand</option>
			<option value="KA">Karnataka</option>
			<option value="KL">Kerala</option>
			<option value="MP">Madhya Pradesh</option>
			<option value="MH">Maharashtra</option>
			<option value="MN">Manipur</option>
			<option value="ML">Meghalaya</option>
			<option value="MZ">Mizoram</option>
			<option value="NL">Nagaland</option>
			<option value="OR">Odisha</option>
			<option value="PB">Punjab</option>
			<option value="RJ">Rajasthan</option>
			<option value="SK">Sikkim</option>
			<option value="TN">Tamil Nadu</option>
			<option value="TG">Telangana</option>
			<option value="TR">Tripura</option>
			<option value="UT">Uttarakhand</option>
			<option value="UP">Uttar Pradesh</option>
			<option value="WB">West Bengal</option>
			<option value="AN">Andaman and Nicobar Islands</option>
			<option value="CH">Chandigarh</option>
			<option value="DN">Dadra and Nagar Haveli</option>
			<option value="DD">Daman and Diu</option>
			<option value="DL">Delhi</option>
			<option value="LD">Lakshadweep</option>
			<option value="PY">Puducherry</option>
		</select>
                </div>
                <div class="form-group">
                    <label for="registerUsername">Username:</label>
                    <input type="text" class="form-control" required id="registerUsername" name="username">
                </div>
                <div class="form-group">
                    <label for="registerPassword">Password:</label>
                    <input type="password" class="form-control" required id="registerPassword" name="password">
                </div>
                <p class="registrationForm" onclick="showLoginForm()"><- Back</p>
                <button type="submit" class="btn btn-dark login-register form-control">Register</button>
            </form>

            </div>

        </div>

    </div>

    <script>
        // Constant variables
        const loginForm = document.getElementById('loginForm');
        const registrationForm = document.getElementById('registrationForm');

        // Hide registration form
        registrationForm.style.display = "none";


        function showRegistrationForm() {
            registrationForm.style.display = "";
            loginForm.style.display = "none";
        }

        function showLoginForm() {
            registrationForm.style.display = "none";
            loginForm.style.display = "";
        }

    </script>

    <!-- Bootstrap Js -->
    <script src="./assets/jquery.slim.min.js"></script>
    <script src="./assets/popper.min.js"></script>
    <script src="./assets/bootstrap.min.js"></script>

</body>
</html>
