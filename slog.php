<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
@import url('https://fonts.googleapis.com/css?family=Raleway&display=swap');
* {
	box-sizing: border-box;
}
body {
	margin: 0;
	padding: 0;
	font-family: 'Raleway', sans-serif;
}
.box {
	display: flex;
	background-color: white;
	align-items: center;
	justify-content: center;
	background-color: #21D4FD;
	background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);
  	height: 100vh;
}
.login-form {
  	min-width: 250px;
  	max-width: 400px;
	border-radius: 24px;
	padding: 15px;
	background-color: white;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.login-form h1 {
	text-align: center;
	font-size: 2.5rem;
	margin-top: 35px;
}
.login-form input[type = "text"] {
	margin-top: 30px;
}
.login-form input[type = "password"] {
	margin-top: 10px;
}
input {
  outline: none;
 }
.links {
	margin-top: 10px;
	display: flex;
	flex-wrap: wrap;
	flex-direction: row;
}
.links > a:first-of-type {
	margin-right: 5px;
}
.links > a {	
	background-color: #E0E0E0;
	border-radius: 24px;
	font-weight: 400;
	color: black;
	line-height: 12px;
	flex: 1;
	text-align: center;
	padding: 10px;
	text-decoration: none;
  font-family: 'Raleway';
	transition: 0.25s;
}
.links > a:hover {	
	opacity: 0.6;
}
.login-form input[type = "submit"] {
	background-color:  #E0E0E0;
	background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);
	width: 100%;
	color: white;
  	border: none;
	margin-top: 35px;
  	cursor: pointer;
	padding: 10px;
  	font-family: 'Raleway', sans-seriff;
  	font-size: 1.3rem;
	font-weight: bold;
	border-radius: 24px;
	transition: 0.25s;
}
.login-form input[type = "submit"]:hover {
	opacity: 0.8;
}
.login-form input[type = "text"]:focus, .login-form input[type = "password"]:focus {
 	border: 2px #21D4FD solid;
 }
.login-form input[type = "text"], .login-form input[type = "password"] {
	width: 100%;
	border: none;
	border-radius: 24px;
  	font-size: 1rem;
  	font-family: 'Raleway', sans-seriff;
	background-color: gainsboro;
	padding: 15px;
} 

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="box">
		<form class="login-form" action="" method="post">
		<i class="fa fa-times-rectangle" style="font-size:24px; float:right;"onclick="history.back()"></i>
			<h1>Login</h1>
			<input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" name="email" placeholder="Username" required>
			<input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="password" placeholder="Password"  required>
			<input type="submit" name="Login" value="Login">
			<div class="links">
				<a href="sr.php">Sign Up</a>
			</div>
			</button>
			
<?php
if(isset($_POST['Login']))
{
	error_reporting(1);
	include("config.php");
	
	$email=$_POST['email'];
	$password=$_POST['password'];	 
	$sql = "select * from sturegister where email='$email' and password='$password'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);


	if($count>0)
	{
		session_start();
		$_SESSION['student']=$email;
		$id=$_SESSION['student'];
		echo "<script>
				alert('Login Successful $id');
			</script>";
		echo "<script> location.href='student/home.php'; </script>";
	}
	else
	{
		
		echo "<script>
				alert('Invalid Email or Password');
			</script>";
	}
}
?>
		</form>
		
	</div>
</body>
</html>