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
					$email=$row3['email'];
					$password=$row3['password'];	
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
		  <li>
            <a href="profile.php"><span class="fa fa-address-book mr-3"></span> My profile</a>
          </li>
          <li>
            <a href="sfind.php"><span class="fa fa-search mr-3"></span> Find company</a>
          </li>
		  <li>
            <a href="selected.php"><span class="fa fa-search mr-3"></span> Selected Company</a>
          </li>
          <li class="active">
            <a href="spassword.php"><span class="fa fa-lock mr-3"></span> Change password</a>
          </li>
          <li>
            <a href="signout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
		<div class="col-md-3">
		</div>
      <div id="content" class="p-4 p-md-3 pt-5" style="margin-top:100px;">
       <div class="panel" style="box-shadow:20px 20px 50px 15px black;padding:20px;">
	   <center><h2>CHANGE PASSWORD</h2></center>
  <img class="panel__avatar" src="studentpic/<?php echo $photo; ?>" alt="avatar" />
  <form action="" method="post" class="inputs">
  <div class="inputs__item">
      <label  class="inputs__label">User Email</label>
      <input type="text" style="background:white;" value="<?php echo $email;?>" class="inputs__input" 2 readonly />
    </div>
    <div class="inputs__item">
      <label for="previous-password" class="inputs__label">Previous password</label>
      <input type="text" value="<?php echo $password;?>" class="inputs__input"  value="password" readonly />
    </div>
    <div class="inputs__item inputs__item--new">
      <label for="new-password" class="inputs__label">New password</label>
      <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  class="inputs__input"  name="newpassword" />
    </div>
    <div class="inputs__item inputs__item--cta">
      <input type="submit" name="reset" class="btn" value="RESET" />
    </div>
  </form>
  <?php
			if(isset($_POST['reset']))
			{
				
			//error_reporting(1);
			include 'config.php'; 	
				{
					$newpassword=$_POST['newpassword'];
					$query1 = "update sturegister set password = '".$newpassword."' where email='".$_SESSION['student']."'";
					
						mysqli_query($con,$query1) or die(mysqli_error($con));
					echo "<script>
							alert('password changed sucessfully');
						</script>";
						echo "<script> location.href='spassword.php'; </script>";
				}
			}

		?>
</div>
		  
      </div>
	  <div class="col-md-3">
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
	echo "<script>location.href='spassword.php';</script>";
}
?>