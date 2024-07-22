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
    <style>
  .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}



/*register comany css*/
body {
  background: rgb(204,204,204); 
}
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {  
  width: 21cm;
  height: 29.7cm; 
}
page[size="A4"][layout="landscape"] {
  width: 29.7cm;
  height: 21cm;  
}
page[size="A3"] {
  width: 29.7cm;
  height: 42cm;
}
page[size="A3"][layout="landscape"] {
  width: 42cm;
  height: 29.7cm;  
}
page[size="A5"] {
  width: 14.8cm;
  height: 21cm;
}
page[size="A5"][layout="landscape"] {
  width: 21cm;
  height: 14.8cm;  
}
@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
}
  </style>
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
	  				<div class="img" style="background-image: url('studentpic/<?php echo $photo; ?>');"></div>
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
          <li  class="active">
            <a href="prof.php"><span class="fa fa-address-book mr-3"></span> Resume</a>
          </li>
		  <li>
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

      <div id="content" class="p-4 p-md-5 pt-5">
	  <div id="printableArea">
	   <?php
include 'config.php'; 
$sql = "select * from sturegister where email='".$_SESSION['student']."'" ;    
$result = mysqli_query($con,$sql);
$num=mysqlI_num_rows($result); 
$sl=0;
if($num > 0)
{ 
		while($_row1 = mysqli_fetch_array($result))     
		{ 

			$fname=$_row1['fname'];
			$usn=$_row1['usn'];
			$dob=$_row1['dob'];
			$email=$_row1['email'];
			$mobile=$_row1['mobile'];
			$clgname=$_row1['clgname'];
			$course=$_row1['course'];
			$gender=$_row1['gender'];
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
			$password=$_row1['password'];
			$project=$_row1['project'];
			$photo1=$_row1['photo'];
			$lang=$_row1['lang'];
 ?>
           <div class="row" class="p-4 p-md-5 pt-5" >
	 <page size="A4" style="padding:20px;">
	 <div style="text-align:center; color:white; background-color:#0f016b;padding:20px;">
	 <h1><?php echo $fname; ?></h1>
	 <p>Address : <?php echo $address; ?></p>
	 <p>Email ID : <?php echo $email; ?></p>
	 <p><?php echo $mobile; ?></p>
	 </div>
	 <div style="min-height:100px;">
	 <p class="col-md-8" style="padding:10px;text-align:justify;">To work in a challenging environment that provides opportunities for learning and growth. To work in a challenging environment that provides opportunities for learning and growth.To work in a challenging environment that provides opportunities for learning and growth.To work in a challenging environment that provides opportunities for learning and growth.</p>
	 <p class="col-md-4"><img src="studentpic/<?php echo $photo1; ?>" style="width:200px;height:200px;padding:20px;"></p>
	 </div>
<br>	 
	
<p style="font-family:Segoe UI Black;"><b>EDUCATION</b></p>&nbsp;&nbsp; &nbsp;
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
<td><input type="text" name="ClassX_Board" value="<?php echo $classXclg; ?>"/></td>
<td><input type="text" name="ClassX_Percentage" value="<?php echo $classXper; ?>"/></td>
<td><input type="text" name="ClassX_YrOfPassing" value="<?php echo $classXyr; ?>"/></td>
</tr>
 
<tr>
<td>2</td>
<td>Class XII</td>
<td><input type="text" name="ClassXII_Board"  value="<?php echo $puclg; ?>"/></td>
<td><input type="text" name="ClassXII_Percentage"  value="<?php echo $puperc; ?>"/></td>
<td><input type="text" name="ClassXII_YrOfPassing"  value="<?php echo $puyear; ?>"/></td>
</tr>
 
<tr>
<td>3</td>
<td>Graduation</td>
<td><input type="text" name="Graduation_Board" value="<?php echo $graclg; ?>"/></td>
<td><input type="text" name="Graduation_Percentage" value="<?php echo $graperc; ?>"/></td>
<td><input type="text" name="Graduation_YrOfPassing" value="<?php echo $grayear; ?>"/></td>
</tr>
 
<tr>
<td>4</td>
<td>Masters</td>
<td><input type="text" name="Masters_Board " value="<?php echo $masclg; ?>"/></td>
<td><input type="text" name="Masters_Percentage"  value="<?php echo $masperc; ?>"  /></td>
<td><input type="text" name="Masters_YrOfPassing" value="<?php echo $masyear; ?>"/></td>
</tr>
</table>
</div>
<br>
<p><b>Projects : </b><?php echo $project; ?></p>&nbsp;&nbsp; &nbsp;
<p><b>Technical Skill : </b><?php echo $prgmskill; ?></p>&nbsp;&nbsp; &nbsp;
<p style="font-family:Segoe UI Black;"><b>PERSONAL INFORMATION  </b></p>&nbsp;&nbsp; &nbsp;
<p><b>Date of birth : </b><?php echo $dob; ?></p>
<p><b>Language known : </b><?php echo $lang; ?></p>
<p><b>Hobbies: </b><?php echo $hobbies; ?></p>
<p align="center"><button onclick="printDiv('printableArea')"><b>Print</b></button></p>
</page>


</div>
		  
      </div>
	  <?php
		}
}
?>  
		</div>
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
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