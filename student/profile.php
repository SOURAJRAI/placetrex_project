<?php
session_start();
if(isset($_SESSION['student']))
{
	include 'config.php'; 
																	
	   $sql3= "select * from sturegister  where email='".$_SESSION['student']."'";
		$result3 = mysqli_query($con,$sql3);
		$count3=mysqlI_num_rows($result3);
		if($count3>0)
		{
		
				while($row3=mysqli_fetch_array($result3))
				{
					$fname=$row3['fname'];
					$clgname=$row3['clgname'];	
					$photo=$row3['photo'];						
				}
		}
	?>
<!doctype html>
<html lang="en">
  <head>
<link rel="stylesheet" href="dem.css">
  	<title>Student</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		
		<meta charset="utf-8">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
td{
	padding:10px;
}
th{
	padding:10px;
}
  </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(studentpic/<?php echo $photo; ?>);"></div>
	  				<h3><?php echo $fname;?></h3>
	  			</div>
	  		</div>
       <ul class="list-unstyled components mb-5">
          <li>
            <a href="home.php"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
              <a href="srule.php"><span class="fa fa-newspaper-o mr-3 "></span> Rules</a>
          </li>
          <li>
            <a href="prof.php"><span class="fa fa-address-book mr-3"></span> Resume</a>
          </li>
		  <li class="active">
            <a href="profile.php"><span class="fa fa-address-book mr-3"></span> My profile</a>
          </li>
          <li>
            <a href="sfind.php"><span class="fa fa-search mr-3"></span> Find company</a>
          </li>
		  <li>
            <a href="selected.php"><span class="fa fa-search mr-3"></span> Selected Company</a>
          </li>
          <li>
            <a href="spassword.php"><span class="fa fa-lock mr-3"></span> Change password</a>
          </li>
          <li>
            <a href="signout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>
    	</nav>

        <!-- Page Content  -->
  <div class="container">  
  
  <?php
include 'config.php'; 
$sql = "select * from sturegister where email='".$_SESSION['student']."'" ;    
$result = mysqli_query($con,$sql);
$count=mysqlI_num_rows($result); 
$sl=0;
if($count > 0)
{ 
		while($_row1 = mysqli_fetch_array($result))     
		{ 

			$fname=$_row1['fname'];
			$usn=$_row1['usn'];
			$dob=$_row1['dob'];
			$email=$_row1['email'];
			$mobile=$_row1['mobile'];
			$obj=$_row1['obj'];
			$clgname=$_row1['clgname'];
			$course=$_row1['course'];
			$project=$_row1['project'];
			$gender=$_row1['gender'];
			$lang=$_row1['lang'];
			$address=$_row1['address'];
			$pincode=$_row1['pincode'];
			$hobbies=$_row1['hobbies'];
			$prgmskill=$_row1['prgmskill'];
			$classXclg=$_row1['classXclg'];
			$classXper=$_row1['classXper'];
			$classXyr=$_row1['classXyr'];
			$puclg=$_row1['puclg'];
			$puperc=$_row1['puperc'];
			$puyear=$_row1['puyear'];
			$graclg=$_row1['graclg'];
			$graperc=$_row1['graperc'];
			$grayear=$_row1['grayear'];
			$masclg=$_row1['masclg'];
			$masperc=$_row1['masperc'];
			$masyear=$_row1['masyear'];
			
 ?>
  <form id="contact" action="" method="post" enctype="multipart/form-data" style="margin-top:60px;">
    <h3>My Profile</h3>
    <fieldset>
	<b>First Name</b><br>
      <input placeholder="First Name" type="text" name="fname" value="<?php echo $fname; ?>" required autofocus>
    </fieldset>
	<fieldset>
		<b>USN</b><br>
      <input placeholder="USN" type="text" name="usn" value="<?php echo $usn; ?>" required autofocus>
    </fieldset>
	<fieldset>
	<b>Date of Birth</b><br>
      <input placeholder="Date of Birth(DD/MM/YYYY)" type="text" name="dob" value="<?php echo $dob; ?>" required autofocus>
    </fieldset>
    <fieldset>
	<b>Email Address</b><br>
      <input placeholder="Your Email Address" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com"  name="email" value="<?php echo $email; ?>" readonly>
    </fieldset>
    <fieldset>
	<b>Mobile Number</b><br>
      <input placeholder="Mobile Number" type="tel" pattern="^\d{10}$" title="10 numeric characters only" name="mobile" value="<?php echo $mobile; ?>" required>
    </fieldset>
	<fieldset>
	<label>Upload Photo</label>
  <input type="file"  name="image" >
 </fieldset>
	<fieldset>
      <input placeholder="Objective" type="text" name="obj" value="<?php if($count>0){echo $obj;}?>" required autofocus>
    </fieldset>
	<label for="clgname">College Name:</label>  
  <input type="text" id="clgname" name="clgname" value="<?php echo $clgname; ?>" readonly><br><br>
  <label for="branch">Branch:</label>  
  <input type="text" id="branch" name="course" value="<?php echo $course; ?>" readonly><br><br>
  <fieldset>
	<b>Projects</b><br>
      <input placeholder="projects" type="text" name="project" value="<?php if($count>0){echo $project;}?>"  required autofocus>
    </fieldset>
	 <fieldset>
	<b>GENDER</b> &nbsp;&nbsp;&nbsp;
	<input type="text" name="gender" value="<?php echo $gender; ?>" >
 </fieldset>
   <fieldset>
	<b>Languages known</b><br>
      <input placeholder="Languages" type="text" name="lang" value="<?php if($count>0){echo $lang;}?>" required autofocus>
    </fieldset>
    <fieldset>
	<b name="9" >Address:</b><br>
      <textarea placeholder="Address...." name="address" required><?php echo $address; ?></textarea>
    </fieldset>
	 <fieldset>
		<b name="9" >Pincode:</b><br>
      <input placeholder="Pincode" type="text" pattern="[0-9]+" title="only numbers" name="pincode"  value="<?php echo $pincode; ?>" required>
    </fieldset>
	 <fieldset>
	<b>HOBBIES</b><br>
 <input placeholder="Hobbies" type="text" name="hobbies" value="<?php echo $hobbies; ?>" >
 </fieldset>
	<fieldset>
		<b>Programing skills</b>
      <input placeholder="Programing skills" type="text" name="prgmskill" value="<?php echo $prgmskill; ?>" required autofocus>
    </fieldset>
	<fieldset>
	
<b>QUALIFICATION</b>
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
<td><input type="text" name="classXclg" value="<?php echo $classXclg; ?>"/></td>
<td><input type="text" name="classXper" value="<?php echo $classXper; ?>"/></td>
<td><input type="text" name="classXyr" value="<?php echo $classXyr; ?>"/></td>
</tr>
 
<tr>
<td>2</td>
<td>Class XII</td>
<td><input type="text" name="puclg" value="<?php echo $puclg; ?>"/></td>
<td><input type="text" name="puperc" value="<?php echo $puperc; ?>"/></td>
<td><input type="text" name="puyear" value="<?php echo $puyear; ?>"/></td>
</tr>
 
<tr>
<td>3</td>
<td>Graduation</td>
<td><input type="text" name="graclg" value="<?php echo $graclg; ?>"/></td>
<td><input type="text" name="graperc" value="<?php echo $graperc; ?>"/></td>
<td><input type="text" name="grayear" value="<?php echo $grayear; ?>"/></td>
</tr>
 
<tr>
<td>4</td>
<td>Masters</td>
<td><input type="text" name="masclg" value="<?php echo $masclg; ?>"/></td>
<td><input type="text" name="masperc" value="<?php echo $masperc; ?>" /></td>
<td><input type="text" name="masyear" value="<?php echo $masyear; ?>"/></td>
</tr>
</table>
</div>
	</fieldset>
	
    <fieldset>
      <br><button name="update" type="Update">Update</button>
    </fieldset>
  </form>
  <?php 
					}
					}
					if(isset($_POST['update']))
					{
					
			$fname=$_POST['fname'];
			$usn=$_POST['usn'];
			$dob=$_POST['dob'];
			$email=$_POST['email'];
			$mobile=$_POST['mobile'];
			$obj=$_POST['obj'];
			$clgname=$_POST['clgname'];
			$course=$_POST['course'];
			$project=$_POST['project'];
			$gender=$_POST['gender'];
			$lang=$_POST['lang'];
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
			$imgname = $_FILES["image"]["name"];
	$filename = $fname.$imgname;
    $tempname = $_FILES["image"]["tmp_name"];   
        $folder = "studentpic/".$filename;
		if($tempname !=""){
		
              move_uploaded_file($tempname, $folder);
					
					$sql = "UPDATE sturegister SET fname='".$fname."',usn='".$usn."',dob='".$dob."',email='".$email."',mobile='".$mobile."',photo='".$filename."',obj='".$obj."',clgname='".$clgname."',course='".$course."',project='".$project."',gender='".$gender."',lang='".$lang."',address='".$address."',pincode='".$pincode."',hobbies='".$hobbies."',prgmskill='".$prgmskill."',classXclg='".$classXclg."',classXper='".$classXper."',classXyr='".$classXyr."',puclg='".$puclg."',puperc='".$puperc."',puyear='".$puyear."',graclg='".$graclg."',graperc='".$graperc."',grayear='".$grayear."',masclg='".$masclg."',masperc='".$masperc."',masyear='".$masyear."' WHERE email='".$_SESSION['student']."'";
		}else{
			$sql = "UPDATE sturegister SET fname='".$fname."',usn='".$usn."',dob='".$dob."',email='".$email."',mobile='".$mobile."',obj='".$obj."',clgname='".$clgname."',course='".$course."',project='".$project."',gender='".$gender."',lang='".$lang."',address='".$address."',pincode='".$pincode."',hobbies='".$hobbies."',prgmskill='".$prgmskill."',classXclg='".$classXclg."',classXper='".$classXper."',classXyr='".$classXyr."',puclg='".$puclg."',puperc='".$puperc."',puyear='".$puyear."',graclg='".$graclg."',graperc='".$graperc."',grayear='".$grayear."',masclg='".$masclg."',masperc='".$masperc."',masyear='".$masyear."' WHERE email='".$_SESSION['student']."'";
		}
					
					// Execute query
					mysqli_query($con, $sql);
					echo "<script>
								alert('Upload Successful');
							</script>";
							
							echo "<script> location.href='profile.php'; </script>";
			  
			  
			  
					}
					?>
</div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
<?php
}
else
{
	echo "<script>location.href='slog.php';</script>";
}
?>