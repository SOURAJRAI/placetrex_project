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
  </style>
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
          <li class="active">
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
		  <li>
            <a href="cupass.php"><span class="fa fa-lock mr-3"></span>Change password</a>
          </li>
          <li>
            <a href="signout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
		<div id="content" class="p-4 p-md-5 pt-5">
            <div class="row">
	  <?php
include 'config.php'; 
$sql = "select * from rc WHERE cname='".$_SESSION['college']."'";    
$result = mysqli_query($con,$sql);
$num=mysqlI_num_rows($result); 
$sl=0;
if($num > 0)
{ 
		while($_row1 = mysqli_fetch_array($result))     
		{ 
			$id=$_row1['id'];
			$compname=$_row1['compname'];
			$job=$_row1['job'];
			$loc=$_row1['loc'];
			$CTC=$_row1['CTC'];
			$criteria=$_row1['criteria'];
			$process=$_row1['process'];
			$ebranch=$_row1['ebranch'];
			$ldate=$_row1['ldate'];
			
		
           
			
 ?>
	  <div class="col-md-4 col-xs-12 col-sm-12" style="padding-bottom:20px;">
        <div class="card">
  <h1><?php echo $compname; ?></h1>
  <p><b>Job Role:</b> &nbsp;<?php echo $job; ?></p>
  <p><b>Work Location:</b> &nbsp;<?php echo $loc; ?></p>
  <p><b>CTC : </b>&nbsp;<?php echo $CTC; ?></p>
  <p><b>Eligible Branches:</b> &nbsp;<?php echo $ebranch; ?></p>
  <p><b>Eligibility:</b>&nbsp;<?php echo $criteria; ?></p>
 <p><b>Selection process:</b>&nbsp; <?php echo $process; ?></p>
 <p><b>Register Before :</b>&nbsp;<?php echo $ldate; ?></p>
<p> <a href="tab.php?head=<?php echo $id;?>">View students</a></p>
 </div>
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
	echo "<script>location.href='clog.php';</script>";
}
?>