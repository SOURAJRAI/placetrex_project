<!DOCTYPE html>
<html lang="en">
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
#contact input[type="date"],
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

  </style>
  
	</head>
<body>
<script>
$('.datepicker').datepicker({
  endDate: '-18y'
});
</script>
<div class="container">  
  <form id="contact" action="" method="post">
    <h3>Student Registration Form</h3>
    <fieldset>											

      <input placeholder="First Name" name="fname" type="text" tabindex="1" required autofocus>
    </fieldset>
	<fieldset>
      <input placeholder="USN" name="usn" type="text" pattern="^\d{9}$" title="9 numeric characters only" tabindex="2" required autofocus>
    </fieldset>
	<fieldset>
      <input placeholder="mm/dd/yyyy" class="form-control datepicker" name="dob" type="text" required >
    </fieldset>
    <fieldset>
      <input placeholder="Email" name="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" tabindex="4" required>
    </fieldset>
	<fieldset>
      <input placeholder="Password" name="password" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters" tabindex="5" required autofocus>
    </fieldset>
	<fieldset>
      <input placeholder="Confirm Password" name="cpassword" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters" tabindex="5" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Mobile Number" name="mobile" type="tel" pattern="^\d{10}$" title="10 numeric characters only" tabindex="6" required>
    </fieldset>
	
	<fieldset>
	<select name="clgname">
	<option hidden >College Name</option>
		  <?php
include 'config.php'; 
$sql = "select * from clgregister";    
$result = mysqli_query($con,$sql);
$num=mysqlI_num_rows($result); 
$sl=0;
if($num > 0)
{ 
		while($row1 = mysqli_fetch_array($result))     
		{ 
			$id=$row1['id'];
			$cname=$row1['cname'];
			$email=$row1['email'];		
 ?>
		
		<option value="<?php echo $email; ?>"><?php echo $cname; ?></option>
			<?php
		}
}
?>
	</select>
	</fieldset>


	
	
	<fieldset>
      <input placeholder="Enter your Course name" name="course" type="text" tabindex="4" required>
    </fieldset>
	<fieldset>
	 <fieldset>
	<b tabindex="9">GENDER</b> &nbsp;&nbsp;&nbsp;

<label style="padding:15px;">Male</label> <input type="radio" name="gender" value="Male" />
<label style="padding:15px;">Female</label> <input type="radio" name="gender" value="Female" />
 </fieldset>
   				
    <fieldset>
      <textarea placeholder="Address...." name="address" tabindex="10" required></textarea>
    </fieldset>
	 <fieldset>
      <input placeholder="Pincode" name="pincode" type="text" pattern="^\d{6}$" title="enter proper pincode" tabindex="11" required>
    </fieldset>
	 <fieldset>
 <input placeholder="Hobbies"  name="hobbies" type="text" tabindex="12" >
 </fieldset>
	<fieldset>
      <input placeholder="Programing Skills"  name="prgmskill" type="text" tabindex="13" required autofocus>
    </fieldset>
	
	<fieldset>
<b tabindex="14" >QUALIFICATION</b>
<div style="width:100%;overflow:auto;">
<table style="width:100%;text-align:center;min-width:500px;">
 
<tr>
<td align="center"><b>Sl.No.</b></td>
<td align="center"><b>Examination</b></td>
<td align="center"><b>College</b></td>
<td align="center"><b>Percentage</b></td>
<td align="center"><b>Year</b></td>
</tr>
 
<tr>
<td>1</td>
<td>Class X</td>
<td><input type="text" name="classXclg"/></td>
<td><input type="text" name="classXper"/></td>
<td><input type="text" name="classXyr"/></td>
</tr>
 
<tr>
<td>2</td>
<td>Class XII</td>
<td><input type="text" name="puclg" /></td>
<td><input type="text" name="puperc"/></td>
<td><input type="text" name="puyear"/></td>
</tr>
 
<tr>
<td>3</td>
<td>Graduation</td>
<td><input type="text" name="graclg"/></td>
<td><input type="text" name="graperc"/></td>
<td><input type="text" name="grayear"/></td>
</tr>
 										
<tr>
<td>4</td>
<td>Masters</td>
<td><input type="text" name="masclg"/></td>
<td><input type="text" name="masperc"  /></td>
<td><input type="text" name="masyear" /></td>
</tr>
</table>
</div>

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

	$sql = "select * from sturegister where email='$Email'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);


	if($count>0)
	{
		
		echo "<script>
				alert('There is an existing account associated with this email.');
			</script>";
			echo "<script> location.href='slog.php'; </script>";
	}
	else
	{
		$fname=$_POST['fname'];
		$usn=$_POST['usn'];
		$dob=$_POST['dob'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$clgname=$_POST['clgname'];													
		$course=$_POST['course'];
		$gender=$_POST['gender'];
		$address=$_POST['address'];
		$pincode=$_POST['pincode'];
		$hobbies=$_POST['hobbies'];
		$prgmskill=$_POST['prgmskill'];
		$classXclg=$_POST['classXclg'];
		$classXper=$_POST['classXper'];
		$classXyr=$_POST['classXyr'];
		$puclg=$_POST['puclg'];
		$puperc=$_POST['puperc'];
		$puyear=$_POST['puyear'];
		$graclg=$_POST['graclg'];
		$graperc=$_POST['graperc'];
		$grayear=$_POST['grayear'];
		$masclg=$_POST['masclg'];
		$masperc=$_POST['masperc'];
		$masyear=$_POST['masyear'];
		$password=$_POST['password'];
		
if ($_POST['password'] != $_POST['cpassword']) {
   // fail!
   
   echo "<script>
				alert('Password invalid.');
			</script>";
}
else {

		$query = "insert into sturegister(fname,usn,dob,email,password,mobile,clgname,course,gender,address,pincode,hobbies,prgmskill	,classXclg,	classXper,	classXyr,puclg,puperc	,puyear	,graclg,	graperc,grayear	,masclg,masperc	,masyear) values('".$fname."','".$usn."','".$dob."','".$email."','".$password."','".$mobile."','".$clgname."','".$course."','".$gender."','".$address."','".$pincode."','".$hobbies."','".$prgmskill."','".$classXclg."','".$classXper."','".$classXyr."','".$puclg."','".$puperc."','".$puyear."','".$graclg."','".$graperc."','".$grayear."','".$masclg."','".$masperc."','".$masyear."')";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
		
		
		echo "<script>
				alert('Registeration Completed, Please Login.');
			</script>";
			echo "<script> location.href='slog.php'; </script>";

	}
	}
}
?>
  </form>
</div>
  
</body>
</html>
