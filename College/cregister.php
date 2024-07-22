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
          <li class="active">
            <a href="chome.php"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
            <a href="cregister.php"><span class="fa fa-address-book mr-3"></span>Register company</a>
          </li>
		  <li>
            <a href="comp.php"><span class="fa fa-address-book mr-3"></span>Registered companies</a>
          </li>
          <li>
            <a href="sapplied.php"><span class="fa fa-edit mr-3"></span>Student applied</a>
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
	 <page size="A4">
	 <p>Company Name : Robosoft Technologies Pvt Ltd</p>
	 <p>Job Title: Trainee Software Engineer</p>
	 <p>Work Location : Robosoft Technologies Corporate Head Office at Udupi.</p>
	 <p>Eligible Branches: CSE/ISE/ECE/EEE/MCA</p>
	 <p>CTC : Rs. 4.5 Lpa (90% fixed & 10% variable)</p>
<p>Eligibility Criteria:

· For Non placed students - 70% in 10th, 12th / Diploma, Degree & 7.0 CGPA in BE & MCA

· For MRC placed students - 70% in 10th, 12th / Diploma, Degree & 8.25 CGPA in BE & MCA

· One Active Backlog is allowed</p>
<p>Selection Process:

· Aptitude test and Logical Reasoning test

· Online Coding Test

· Technical Interview

· HR Interview</p> 
<p><button>Register</button></p>
</page>
<page size="A4"></page>
<page size="A4"></page>
<page size="A4"></page>


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