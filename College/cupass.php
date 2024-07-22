<?php
session_start();
if(isset($_SESSION['college']))
{
	include 'config.php'; 
																	
	   $sql3= "select * from clgregister  where email='".$_SESSION['college']."'";
		$result3 = mysqli_query($con,$sql3);
		$count3=mysqlI_num_rows($result3);
		if($count3>0)
		{
		
				while($row3=mysqli_fetch_array($result3))
				{
					$cname=$row3['cname'];
					$email=$row3['email'];
					$pass=$row3['pass'];	
				}
		}
	
?>
<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="dem.css">
  	<title>College</title>
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
	  				<div class="img" style="background-image: url(images/logo.jpg);"></div>
	  				<h3><?php echo $cname;?></h3>
	  			</div>
	  		</div>
         <ul class="list-unstyled components mb-5">
          <li>
            <a href="chome.php"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
            <a href="rc1.php"><span class="fa fa-address-book mr-3"></span>Register company</a>
          </li>
		  <li>
            <a href="comp.php"><span class="fa fa-address-book mr-3"></span>Registered companies</a>
          </li>
          <li>
            <a href="sapplied.php"><span class="fa fa-edit mr-3"></span>Student applied</a>
          </li>
		  <li>
            <a href="branch.php"><span class="fa fa-edit mr-3"></span>Add Branch</a>
          </li>
		  <li>
            <a href="arule.php"><span class="fa fa-edit mr-3"></span>Add Rules</a>
          </li>
		  <li>
            <a href="allstu.php"><span class="fa fa-edit mr-3"></span>All Students</a>
          </li>
		  <li>
            <a href="selected.php"><span class="fa fa-edit mr-3"></span>Selected Students</a>
          </li>
		  <li class="active">
            <a href="cupass.php"><span class="fa fa-lock mr-3"></span>Change password</a>
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
  <img class="panel__avatar" src="http://icons.iconarchive.com/icons/jonathan-rey/simpsons/256/Bart-Simpson-01-icon.png" alt="avatar" />
  <form action="" method="post" class="inputs">
  <div class="inputs__item">
      <label  class="inputs__label">User Email</label>
      <input type="text" value="<?php echo $email;?>" class="inputs__input"  readonly />
    </div>
    <div class="inputs__item">
      <label for="previous-password" class="inputs__label">Previous password</label>
      <input type="text" class="inputs__input" value="<?php echo $pass;?>"  readonly />
    </div>
    <div class="inputs__item inputs__item--new">
      <label for="new-password" class="inputs__label">New password</label>
      <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="newpass" class="inputs__input"  required  />
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
					$newpass=$_POST['newpass'];
					$query1 = "update clgregister set pass = '".$newpass."' where email='".$_SESSION['college']."'";
					
						mysqli_query($con,$query1) or die(mysqli_error($con));
					echo "<script>
							alert('password changed sucessfully');
						</script>";
						echo "<script> location.href='cupass.php'; </script>";
				}
			}

		?>
</div>
		  
      </div>
	  <div class="col-md-3">
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
	echo "<script>location.href='cupass.php';</script>";
}
?>