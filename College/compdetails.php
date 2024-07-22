<?php
session_start();
if(isset($_SESSION['college']))
{
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
	  				<div class="img" style="background-image: url(images/logo.jpg);"></div>
	  				<h3>College name</h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
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
		  <li>
            <a href="cupass.php"><span class="fa fa-lock mr-3"></span>Change password</a>
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
$sql = "select * from rc";    
$result = mysqli_query($con,$sql);
$num=mysqlI_num_rows($result); 
$sl=0;
if($num > 0)
{ 
		while($_row1 = mysqli_fetch_array($result))     
		{ 

			$compname=$_row1['compname'];
			$job=$_row1['job'];
			$loc=$_row1['loc'];
			$CTC=$_row1['CTC'];
			$criteria=$_row1['criteria'];
			$process=$_row1['process'];
			$ebranch=$_row1['ebranch'];
			$ldate=$_row1['ldate'];
			
		
		$query = "insert into rc(compname,job,loc,CTC,criteria,process,ebranch,ldate) values('".$compname."','".$job."','".$loc."','".$CTC."','".$criteria."','".$process."','".$ebranch."','".$ldate."')";
           
			
 ?>

	  
  <form id="contact" action="" method="post" style="margin-top:60px;">
    <h3>View Register company</h3>
	<label for="cname">Company Name: <?php echo $compname; ?></label><br><br><br>
  <label for="jtitle">Job Title: <?php echo $job; ?></label><br><br><br>
 
     <label for="loc">Work Location:<?php echo $loc; ?></label><br><br><br>
	 <label for="loc">CTC:<?php echo $CTC; ?></label><br><br><br>
	
	<fieldset>
	<b tabindex="1">Eligible Branches:<?php echo $ebranch; ?></b><br>
 
 </fieldset>
 <fieldset>
		 <label for="loc">Eligibility Criteria:</label><br>
      <textarea placeholder="Eligibility Criteria:" tabindex="5" required readonly><?php echo $criteria; ?></textarea>
    </fieldset>
	<fieldset>
	 <label for="loc">Selection Process:</label><br>
      <textarea placeholder="Selection Process:" tabindex="6" required readonly><?php echo $process; ?></textarea>
	  </fieldset>
	  <label for="loc">Last Date to Register: <?php echo $ldate; ?></label><br><br><br>
    <fieldset>
      <br><button name="edit" type="edit" id="contact-submit" data-submit="...Sending">Edit</button>
    </fieldset>
	
  </form>
   <?php
		}
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
	echo "<script>location.href='clog.php';</script>";
}
?>