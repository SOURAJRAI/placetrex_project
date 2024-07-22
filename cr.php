
<!DOCTYPE html>
<html lang="en">
<title>PlaceTrex</title>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
 @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}

body {
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  font-weight: 100;
  font-size: 12px;
  line-height: 30px;
  color: #777;
  background: #cccbc8;
}

.container {
  max-width: 400px;
  width: 100%;
  margin: 0 auto;
  position: relative;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact input[type="password"],
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #F9F9F9;
  padding: 25px;
  margin: 150px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact input[type="password"],
#contact textarea ,
#contact select {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact input[type="password"]:hover,
#contact textarea:hover,
#contact select:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background:blue;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contact button[type="submit"]:hover {
  background: blue;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
  text-align: center;
}

#contact input:focus,
#contact select:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}
  </style>
	</head>
<body>
<div class="container">  					
  <form id="contact" action="" method="post">
    <h3>College Registration Form</h3>
    <fieldset>
      <input placeholder="College Name" name="cname" type="text" tabindex="1" required autofocus>
    </fieldset>
	<fieldset>
      <textarea placeholder="Address...." name="addr" tabindex="2" required></textarea>
    </fieldset>
	<fieldset>
      <input placeholder="City" name="city" type="text" tabindex="3" required autofocus>
    </fieldset>
	 <fieldset>
      <input placeholder="Pincode"  name="pin" type="text" pattern="[0-9]+" title="only numbers" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="Mobile Number" name="mobile" type="tel" pattern="^\d{10}$" title="10 numeric characters only" tabindex="5" required>
    </fieldset>
	<fieldset>
      <input placeholder="E-mail" name="email" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" tabindex="6" required autofocus>
    </fieldset>
	<fieldset>
      <input placeholder="Password" name="pass" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters" tabindex="7" required autofocus>
    </fieldset>
	<fieldset>
      <input placeholder="Confirm Password" name="cpass" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters" tabindex="7" required autofocus>
    </fieldset>
    <fieldset>
      <br><center><button  type="register" name="register" id="" data-submit="...Sending">Register</button></center>
    </fieldset>
	<?php
if(isset($_POST['register']))
{
	error_reporting(1);
	include("config.php");
	
	$Email=$_POST['email'];

	$sql = "select * from clgregister where email='$E-mail'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);


	if($count>0)
	{
		
		echo "<script>
				alert('There is an existing account associated with this email.');
			</script>";
			echo "<script> location.href='clog.php'; </script>";
	}
	else							
	{
		$cname=$_POST['cname'];
		$addr=$_POST['addr'];
		$city=$_POST['city'];
		$pin=$_POST['pin'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];													
		$pass=$_POST['pass'];
			
if ($_POST['pass'] != $_POST['cpass']) {
   // fail!
   
   echo "<script>
				alert('Password invalid.');
			</script>";
}
else {
		

		$query = "insert into clgregister(cname,caddr,city,pin,mobile,email,pass) values('".$cname."','".$addr."','".$city."','".$pin."','".$mobile."','".$email."','".$pass."')";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
		
		
		echo "<script>
				alert('Registeration Completed, Please Login.');
			</script>";
			echo "<script> location.href='clog.php'; </script>";

	}
	}
}
?>
  </form>
</div>
</body>
</html>
