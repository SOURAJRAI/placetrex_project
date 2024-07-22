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
#contact input[type="date"],
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
#contact input[type="date"]:hover,
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
	  				<h3><?php echo $cname;?></h3>
	  			</div>
	  		</div>
         <ul class="list-unstyled components mb-5">
          <li>
            <a href="chome.php"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li class="active">
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
		 <div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  
  <form id="contact" action="" method="post">
    <h3>Register company</h3>
	<label >Company Name:</label><br>
  <input type="text"  name="compname" value=""><br>
  <label for="jtitle">Job Title:</label><br>
  <input type="text"  name="job" value=""><br><br>
     <label for="loc">Work Location:</label><br>
  <input type="text" name="loc" value=""><br><br> 
  <label for="loc">CTC:</label><br>
  <input type="text" name="CTC" value=""><br><br>
	
	<fieldset>
	<b tabindex="1">Eligible Branches:</b><br>
  <?php
include 'config.php'; 
$sql = "select * from branch where cmail='".$_SESSION['college']."'";    
$result = mysqli_query($con,$sql);
$num=mysqlI_num_rows($result); 
$sl=0;
if($num > 0)
{ 
		while($row1 = mysqli_fetch_array($result))     
		{ 
			$sl+=1;
			$id=$row1[0];
			$branch=$row1['branch'];
		?>
<label style="padding:15px;"><?php echo $branch; ?></label>
<input type="checkbox" name="check<?php echo $sl; ?>"  value="<?php echo $branch; ?>" />
<?php
		}
}
?>
 </fieldset>
 <fieldset>
 <label for="loc">Eligibility Criteria:</label><br>
      <textarea placeholder="Eligibility Criteria:" name="criteria" tabindex="5" required></textarea>
    </fieldset>
	<fieldset>
	<label for="loc">Selection Process:</label><br>
      <textarea placeholder="Selection Process:" name="process" tabindex="6" required></textarea>
	  </fieldset>
	  <label >Last Date to Register:</label><br>
  <input type="date" value="<?php print(date("Y-m-d"));?>" min="now()" placeholder="dd/mm/yyyy" name="ldate" value=""><br>
    <fieldset>
      <br><button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
	
	<?php
if(isset($_POST['submit']))
{
	error_reporting(1);
	include("config.php");
	
		$compname=$_POST['compname'];
		$job=$_POST['job'];
		$loc=$_POST['loc'];
		$CTC=$_POST['CTC'];
		$criteria=$_POST['criteria'];
		$process=$_POST['process'];
		$ebranch1=$_POST['check1'];
		$ebranch2=$_POST['check2'];
		$ebranch3=$_POST['check3'];
		$ebranch4=$_POST['check4'];
		$ebranch5=$_POST['check5'];
		$ebranch6=$_POST['check6'];
		$ebranch7=$_POST['check7'];
		$ebranch8=$_POST['check8'];
		$ebranch9=$_POST['check9'];
		$ebranch10=$_POST['check10'];
		$ellligible='';
		$ldate=$_POST['ldate'];
		if($ebranch1!='')
		{
			$ellligible=$ellligible." ".$ebranch1;
		}
		if($ebranch2!='')
		{
			$ellligible=$ellligible." ".$ebranch2;
		}
		if($ebranch3!='')
		{
			$ellligible=$ellligible." ".$ebranch3;
		}
		if($ebranch4!='')
		{
			$ellligible=$ellligible." ".$ebranch4;
		}
		if($ebranch5!='')
		{
			$ellligible=$ellligible." ".$ebranch5;
		}
		if($ebranch6!='')
		{
			$ellligible=$ellligible." ".$ebranch6;
		}
		if($ebranch7!='')
		{
			$ellligible=$ellligible." ".$ebranch7;
		}
		if($ebranch8!='')
		{
			$ellligible=$ellligible." ".$ebranch8;
		}
		if($ebranch9!='')
		{
			$ellligible=$ellligible." ".$ebranch9;
		}
		if($ebranch10!='')
		{
			$ellligible=$ellligible." ".$ebranch10;
		}
		
		
		$query = "insert into rc(compname,job,loc,CTC,criteria,process,ebranch,ldate,cname) values('".$compname."','".$job."','".$loc."','".$CTC."','".$criteria."','".$process."','".$ellligible."','".$ldate."','".$_SESSION['college']."')";
           
        if(mysqli_query($con,$query))
		{
		
		
		echo "<script>
				alert('Registeration Completed, Please Login.');
			</script>";
			echo "<script> location.href='rc1.php'; </script>";
		}
		else
			
			{
				echo "<script>
				alert('error.');
			</script>";
			}

	}
	

?>
  </form>
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