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
	  				<div class="img" style="background-image: url(studentpic/<?php echo $photo; ?>);"></div>
	  				<h3><?php echo $fname;?></h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li>
            <a href="home.php"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li class="active">
              <a href="srule.php"><span class="fa fa-newspaper-o mr-3 "></span> Rules</a>
          </li>
          <li>
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
	<div class="panel" style="box-shadow:20px 20px 50px 15px black;padding:20px;">
	  <div class="row">
	  
	   <?php
include 'config.php'; 
$sql = "select * from addrule where cemail='".$clgname."'";    
$result = mysqli_query($con,$sql);
$num=mysqlI_num_rows($result); 
$sl=0;
if($num > 0)
{ 
		while($row1 = mysqli_fetch_array($result))     
		{ 
			$sl+=1;
			$id=$row1[0];
			$rule=$row1['rule'];
 ?>
	  <div class="col-md-6 col-xs-12 col-sm-12" style="padding-bottom:20px;">
        <h2 class="mb-4"><?php echo $sl; ?></h2>
        <p style="font-family:Arial Black;"><?php echo $rule; ?></p>
      </div>
	   <?php
		}
}
?>
	  </div>
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