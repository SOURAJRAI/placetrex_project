<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>College Login</title>
    <link rel="stylesheet" href="style.css" />
	  <style>
  * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: sans-serif;
  width: 100%;
  height: 100vh;
  background: #f2f2f2;
}

.container {
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

.form {
  width: 400px;
  height: auto;
  padding: 50px;
  border-radius: 20px;
  box-shadow: 0px -6px 10px white, 0px 4px 15px rgba(0, 0, 0, 0.15);
}

.form h1 {
  text-align: center;
  margin-bottom: 40px;
  color: #868686;
  letter-spacing: 3px;
}

.form form label {
  margin: 10px 0 0 20px;
  font-weight: 300;
  color: #868686;
}

.form form label#forgotpwd {
  margin: 20px;
  display: block;
  text-align: center;
  font-size: 18px;
}

.form form label#forgotpwd a {
  font-weight: 600;
  color: #868686;
}

.form form input[type="text"],
.form form input[type="password"],
.form form input[type="submit "] {
  width: 100%;
  padding: 20px;
  margin: 20px 0;
  border-radius: 50px;
  border: none;
  outline: none;
  font-size: 18px;
  box-shadow: 0px -6px 10px white, 0px 4px 15px rgba(0, 0, 0, 0.15);
  background: transparent;
  color: #868686;
}

.form form input:focus {
  box-shadow: inset 0px -6px 10px white, inset 0px 4px 15px rgba(0, 0, 0, 0.15);
}

.form form input[type="submit"] {
  margin: 40px 0 0 0;
  font-size: 24px;
  font-weight: 400;
}

.form form input[type="submit"]:active {
  box-shadow: inset 0px -6px 10px white, inset 0px 4px 15px rgba(0, 0, 0, 0.15);
}

  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="container">
	
      <div class="form">
	  
        <form action="" method="post">
		<i class="fa fa-times-rectangle" style="font-size:24px; float:right; margin-top:-25px;"onclick="history.back()"></i>
          <h1>Login</h1>
		  
          <label>Username</label>
          <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" name="email" id="" placeholder="Username" />
          <label>Password</label>
          <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="pass" id="" placeholder="Password" />
          <!-- <input type="submit" value="Login" /> -->
          <input type="submit" name="Login" value="Login" />
          <label id="forgotpwd">Forgot Password? <a href="#">Click Here</a></label>
		  
		  			
<?php
if(isset($_POST['Login']))
{
	error_reporting(1);
	include("config.php");
	
	$email=$_POST['email'];
	$pass=$_POST['pass'];	
	$sql = "select * from clgregister where email='$email' and pass='$pass'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);


	if($count>0)
	{		
		session_start();
		$_SESSION['college']=$email;
		$id=$_SESSION['college'];
		echo "<script>
				alert('Login Successful $id');
			</script>";
		echo "<script> location.href='college/chome.php'; </script>";
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
    </div>
  </body>
</html>
