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
* {
  box-sizing: border-box;
}

/* Style the search field */
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

/* Style the submit button */
form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
}

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: black;
  color: white;
}


.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
.button2 {border-radius: 4px;}
.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

</style>

  	<title>College</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		
		<meta charset="utf-8">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
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
          <li  class="active">
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
	  <div class="col-md-12 col-xs-12 col-sm-12" style="padding-bottom:20px;">
	  
<h2>Selected Students Details</h2>

<div style="overflow-x:auto;">
<table style="width:100%;text-align:center;" id="customers">
  <tr>
    <th><center>Sl.No</center></th>
    <th><center>Student name</center></th>
    <th><center>USN</center></th>
    <th><center>Resume</center></th>
    <th><center>Select</center></th>
  </tr>
 <?php
			include 'config.php';
			$sql1 = "SELECT sturegister.fname,sturegister.usn,sturegister.email, regstu.id, regstu.cid, regstu.semail, regstu.selects FROM sturegister INNER JOIN regstu ON sturegister.email=regstu.semail where sturegister.clgname='".$_SESSION['college']."' and regstu.selects='selected'";
			$result1 = mysqli_query($con,$sql1);
			$num1=mysqlI_num_rows($result1);
			$sl=0;
			$total=0;
			if($num1 > 0)
			{ 
			while($row1 = mysqli_fetch_array($result1))
			{ 
			$sl+=1;
			$fname=$row1[0];
			$usn=$row1[1];
			$email=$row1[2];
			$id=$row1[3];
			$cid=$row1[4];
			$semail=$row1[5];
			$status=$row1[6];
			
			?>
  <tr>
    <td><?php echo $sl;?></td>
    <td><?php echo $fname;?></td>
    <td><?php echo $usn;?></td>
    <td><a href="profile.php?cid=<?php echo $semail; ?>">View Resume</a></td>
    <td><a  class="button button2"><?php echo $status; ?></a></td>
  </tr>
<?php
			}
			}
?>			
  
</table>
</div>
</div>
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