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
	  				<h3>Student name</h3>
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
          <li class="active">
            <a href="supprofile.php"><span class="fa fa-edit mr-3"></span>Update profile</a>
          </li>
          <li>
            <a href="sfind.php"><span class="fa fa-search mr-3"></span> Find company</a>
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
  <div class="container">  
  <form id="contact" action="" method="post" style="margin-top:60px;">
    <h3>Update Profile</h3>
    <fieldset>
      <input placeholder="First Name" type="text" tabindex="1" required autofocus>
    </fieldset>
	<fieldset>
      <input placeholder="Last Name" type="text" tabindex="2" required autofocus>
    </fieldset>
	<fieldset>
      <input placeholder="Date of Birth" type="text" tabindex="3" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="Mobile Number" type="tel" tabindex="5" required>
    </fieldset>
	<fieldset>
	<label for="photo">Upload Photo</label>
  <input type="file" id="myFile" name="filename">
 </fieldset>
	<fieldset>
      <input placeholder="Objective" type="text" tabindex="11" required autofocus>
    </fieldset>
	<label for="clgname">College Name:</label>  
  <input type="text" id="clgname" name="clgname" value="NMAMIT" readonly><br><br>
  <label for="branch">Branch:</label>  
  <input type="text" id="branch" name="branch" value="MCA" readonly><br><br>
	 <fieldset>
	<b tabindex="6">GENDER</b> &nbsp;&nbsp;&nbsp;

<label style="padding:15px;">Male</label> <input type="radio" name="Gender" value="Male" />
<label style="padding:15px;">Female</label> <input type="radio" name="Gender" value="Female" />
 </fieldset>
   
    <fieldset>
      <textarea placeholder="Address...." tabindex="7" required></textarea>
    </fieldset>
	 <fieldset>
      <input placeholder="Pincode" type="text" tabindex="8" required>
    </fieldset>
	 <fieldset>
	<b tabindex="9" >HOBBIES</b><br>
 
<label style="padding:15px;">Drawing</label>
<input type="checkbox" name="Hobby_Drawing"  value="Drawing" />
<label style="padding:15px;">Singing</label>
<input type="checkbox" name="Hobby_Singing" style="padding:30px;" value="Singing" />
<label style="padding:15px;">Dancing</label>
<input type="checkbox" name="Hobby_Dancing" style="padding:10px;" value="Dancing" /><br>
<label style="padding:15px;">Sketching</label>
<input type="checkbox" name="Hobby_Cooking" style="padding:10px;" value="Cooking" />
<label style="padding:15px;">Reading</label>
<input type="checkbox" name="Hobby_Reading" style="padding:10px;" value="Reading" />
<label style="padding:15px;">Calligraphy</label>
<input type="checkbox" name="Hobby_Calligraphy" value="Calligraphy">
 <input placeholder="Other Hobbies" type="text" >
 </fieldset>
	<fieldset>
      <input placeholder="Programing skills" type="text" tabindex="10" required autofocus>
    </fieldset>
	<fieldset>
	
<b tabindex="11" >QUALIFICATION</b>
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
<td><input type="text" name="ClassX_Board"/></td>
<td><input type="text" name="ClassX_Percentage"/></td>
<td><input type="text" name="ClassX_YrOfPassing"/></td>
</tr>
 
<tr>
<td>2</td>
<td>Class XII</td>
<td><input type="text" name="ClassXII_Board" /></td>
<td><input type="text" name="ClassXII_Percentage"/></td>
<td><input type="text" name="ClassXII_YrOfPassing"/></td>
</tr>
 
<tr>
<td>3</td>
<td>Graduation</td>
<td><input type="text" name="Graduation_Board"/></td>
<td><input type="text" name="Graduation_Percentage"/></td>
<td><input type="text" name="Graduation_YrOfPassing"/></td>
</tr>
 
<tr>
<td>4</td>
<td>Masters</td>
<td><input type="text" name="Masters_Board "/></td>
<td><input type="text" name="Masters_Percentage"  /></td>
<td><input type="text" name="Masters_YrOfPassing" /></td>
</tr>
</table>
</div>
	</fieldset>
	
    <fieldset>
      <br><button name="Update" type="Update">Update</button>
    </fieldset>
  </form>
</div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>