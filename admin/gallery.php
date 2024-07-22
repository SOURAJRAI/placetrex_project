<?php
session_start();
if(isset($_SESSION['aadmin']))
{
	?>
<!doctype html>
<html lang="en">
  <head>
  <style>
.butn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.butn:hover {
  background-color: RoyalBlue;
}
</style>
 <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: blue;
  color: white;
}
</style>
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
  font-size: 50px;
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
  <link rel="stylesheet" href="dem.css">
  	<title>Admin</title>
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
	  				<h3>Admin</h3>
	  			</div>
	  		</div>
         <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="ahome.php"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
            <a href="regclg.php"><span class="fa fa-address-book mr-3"></span>Registered college</a>
          </li>
          <li>
            <a href="gallery.php"><span class="fa fa-group mr-3"></span>Add Photos</a>
          </li>
		  <li>
            <a href="apass.php"><span class="fa fa-lock mr-3"></span>Change password</a>
          </li>
          <li>
            <a href="signout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>


    	</nav>

        <!-- Page Content  -->
      <div class="container">  
  <form id="contact" action="" enctype="multipart/form-data" method="post" style="margin-top:60px;">
    <h3>Add Photos</h3>
	<br><br>
 <fieldset>
      <input type="file"  name="image"><br><br>
	  
     <center> <input type="submit"  name="add" value="Add"></center>
    </fieldset>
	</form>
	<?php 
	include 'config.php'; 
if(isset($_POST["add"]))
{ 
    $imgname = $_FILES["image"]["name"];
	$filename = "admin".$imgname; 
    $tempname = $_FILES["image"]["tmp_name"];   
        $folder = "gallery/".$filename;
		
         
              if (move_uploaded_file($tempname, $folder))  {
			
        $sql = "INSERT INTO gallery (photo) VALUES ('".$filename."')";
		mysqli_query($con, $sql);
           echo "<script>
					alert('Upload Successful');
				</script>";
				echo "<script> location.href='gallery.php'; </script>";
        }else{
            echo "<script>
					alert('Upload Failed, IMAGE should be less than 2MB');
				</script>";
      }
} 
?>
<br><br><br>
<table>

  <tr>
  <th style="padding:8px;">Sl.No</th>
    <th>Photos</th>
    <th>Delete</th>
    
  </tr>
  <?php
include 'config.php'; 
$sql = "select * from gallery ";    
$result = mysqli_query($con,$sql);
$num=mysqlI_num_rows($result); 
$sl=0;
if($num > 0)
{ 
		while($row1 = mysqli_fetch_array($result))     
		{ 
			$sl+=1;
			$id=$row1[0];
			$photo=$row1['photo'];
		?>
  <tr>
  <td style="padding:8px;"><?php echo $sl; ?></td>
    <td><img src="gallery/<?php echo $photo; ?>" style="width:100px;height:100px;"></img></td>
	<form method="post" action="">
	<input type="text" name="id[]" value="<?php echo $id; ?>" hidden="true">
    <td><button type="submit" name="dlt" class="butn"><i class="fa fa-close" style="padding:8px;"></i></button></td>
	</form>
	<?php
if(isset($_POST['dlt']))
{
	foreach ($_POST['id'] as $key => $value) 
	{	
		$selectid=$value;	
	}
	$query1 = "delete from gallery where id='".$selectid."'";
	mysqli_query($con,$query1) or die(mysqli_error($con));
	echo "<script> location.href='gallery.php'; </script>";
}
?>
  </tr>
	
  <?php
		}
}
?>


</table>
  </form>
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