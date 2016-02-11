<?PHP

session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

//Takes user back to login page as they are not logged in
header ("Location: ../Welcome/welcome.php");

}

?>
<!DOCTYPE html>
<html>
    <head>
         <title>YeP</title>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
            <meta name=viewport content="width=device-width, initial-scale=1, maximum-scale=1">
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
            <meta name="mobile-web-app-capable" content="yes">
            <link type = "text/css" href ="add_category.css" rel = "stylesheet" >
            <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<link rel="icon" href="../Images/Icon.png">
<link rel="apple-touch-icon"  href="../Images/Icon.png">
<link rel="apple-touch-icon-precomposed" href="../Images/Icon.png">

   </head>

   
                     <body>
            <div class="page-content">
            
              
            <?php
require_once("../../mysql_details.php");
if (!isset($_POST['submit'])) {
?>	

<div class="page-content-2">
<a href="categories.php">
			<img src="../../Images/back.png" style="position: absolute; top:0%; bottom:5%;left: 1%; right:5%; width:10%;height:100%;">
</a>
<h3>Add a Category</h3> 
			</div>
			
			<div data-role="main" class="ui-content">
 
<!-- The HTML registration form -->


<div class="form">
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post" class="form">
		<h3>Category: <select name="c_name">
  <option value="Accounting">Accounting</option>
  <option value="Admin">Admin</option>
  <option value="Automotive">Automotive</option>
  <option value="Banking">Banking</option>
  <option value="Biotech">Biotech</option>
  <option value="Broadcast">Broadcast</option>
  <option value="Business Development">Business Development</option>
  <option value="Construction">Construction</option>
  <option value="Customer Service">Customer Service</option>
  <option value="Design">Design</option>
  <option value="Distribution">Distribution</option>
  <option value="Education">Education</option>
  <option value="Engineering">Engineering</option>
  <option value="Facilities">Facilities</option>
  <option value="Finance">Finance</option>
  <option value="Franchise">Franchise</option>
  <option value="General Business">General Business</option>
  <option value="General Labor">General Labor</option>
  <option value="Government">Government</option>
  <option value="Health Care">Health Care</option>
  <option value="Hospitality">Hospitality</option>
  <option value="Human Resources">Human Resources</option>
  <option value="Information Technology">Information Technology</option>
  <option value="Maintenance/Repair">Maintenance/Repair</option>
  <option value="Insurance">Insurance</option>
  <option value="Legal">Legal</option>
  <option value="Management">Management</option>
  <option value="Manufacturing">Manufacturing</option>
  <option value="Marketing">Marketing</option>
  <option value="Media">Media</option>
  <option value="Nurse">Nurse</option>
  <option value="Other">Other</option>
  <option value="Pharmaceutical ">Pharmaceutical</option>
  <option value="Quality Control">Quality Control</option>
  <option value="Real Estate">Real Estate</option>
  <option value="Research">Research</option>
  <option value="Restaurant">Restaurant</option>
<option value="Retail">Retail</option>
  <option value="Sales">Sales</option>
  <option value="Science">Science</option>
<option value="Skilled Labor">Skilled Labor</option>
  <option value="Strategy">Strategy</option>
  <option value="Supply Chain">Supply Chain</option>
<option value="Telecommunications">Telecommunications</option>
  <option value="Training">Training</option>
  <option value="Transportation">Transportation</option>
<option value="Volunteer Work">Volunteer Work</option>
  <option value="Warehouse">Warehouse</option>  
</select></h3><br>


		<div class="submit"><input type="submit" name="submit" value="Save" /></div>

	</form>
	</div>
</div>
	
<?php
} else {
## connect mysql server
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	# check connection
	if ($mysqli->connect_errno) {
		echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
		exit();
	}
## query database
	# prepare data for insertion
	$c_name	= $_POST['c_name'];
	$username = $_SESSION['username']; 

	
	
	
 
		# insert data into mysql database
		$sql = "INSERT  INTO `categories` (`c_name`, `categories_username`) 
				VALUES ('{$c_name}', '{$username}')";
 
		if ($mysqli->query($sql)) {
			
			header('Location: categories.php');
		} else {
			echo "<p>MySQL error no {$mysqli->errno} : {$mysqli->error}</p>";
			exit();
		
	}
	}
?>		           
            

         </div>
    </body>
</html>