<?PHP

session_start();

if (!(isset($_SESSION['advisor_login']) && $_SESSION['advisor_login'] != '')) {

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
            <link type = "text/css" href ="add_job.css" rel = "stylesheet" >
            <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<link rel="icon" href="../Images/Icon.png">
<link rel="apple-touch-icon"  href="../Images/Icon.png">
<link rel="apple-touch-icon-precomposed" href="../Images/Icon.png">

   </head>

           
        <div class="page-wrap">
            
                <body>
            <div class="page-content">
            
              
            <?php
require_once("../mysql_details.php");
if (!isset($_POST['submit'])) {
?>	

            <div class="page-content-2">
<a href="../Jobs/advisor_jobs.php">
			<img src="../Images/back.png" style="position: absolute; top:0%; bottom:5%;left: 1%; right:5%; width:10%;height:100%;">
</a>
			<h3>Add Job</h3> 
			
			</div>
			<div data-role="main" class="ui-content">
 
<!-- The HTML registration form -->
<div class="form">
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post" class="form">
		<h3>Job Title: <input type="text" name="job_title" /><br /></h3>
		<h3>Job Type: <select name="job_type">
  <option value="Permanent">Permanent</option>
    <option value="Contract">Contract</option>
  <option value="Part Time">Part Time</option>
  <option value="Temporary">Temporary</option>
  <option value="Volunteer Work">Volunteer Work</option>
  </select></h3><br>
		<h3>Location: <input type="text" name="location" /><br /></h3><br>
        <h3>Location: <select name="location">
  <option value="Aberdeen City">Aberdeen City</option>
  <option value="Aberdeenshire">Aberdeenshire</option>
  <option value="Angus">Angus</option>
  <option value="Argyll and Bute">Argyll and Bute</option>
  <option value="Clackmannanshire">Clackmannanshire</option>
  <option value="Dumfries and Galloway">Dumfries and Galloway</option>
  <option value="Dundee City">Dundee City</option>
  <option value="East Ayrshire">East Ayrshire</option>
  <option value="East Dunbartonshire">East Dunbartonshire</option>
  <option value="East Lothian">East Lothian</option>
  <option value="East Renfrewshire">East Renfrewshire</option>
  <option value="City of Edinburgh">City of Edinburgh</option>
  <option value="Falkirk">Falkirk</option>
  <option value="Fife">Fife</option>
  <option value="Glasgow City">Glasgow City</option>
  <option value="Highland">Highland</option>
  <option value="Inverclyde">Inverclyde</option>
  <option value="Midlothian">Midlothian</option>
  <option value="Moray">Moray</option>
  <option value="North Ayrshire">North Ayrshire</option>
  <option value="North Lanarkshire">North Lanarkshire</option>
  <option value="Perth and Kinross">Perth and Kinross</option>
  <option value="Renfrewshire">Renfrewshire</option>
  <option value="Scottish Borders">Scottish Borders</option>
  <option value="South Ayrshire">South Ayrshire</option>
  <option value="South Lanarkshire">South Lanarkshire</option>
  <option value="Stirling">Stirling</option>
  <option value="West Dunbartonshire">West Dunbartonshire</option>
  <option value="West Lothian">West Lothian</option>
   
</select></h3><br>
		<h3>Salary/Rate: <input type="text" name="salary" /></h3><br>
		<h3>Category: <select name="category_name">
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
		<h3>Description: <input type="text" name="job_description" /><br /></h3>
		
		<h3>Application Link: <input type="text" name="apply_link" /><br /></h3>

	<div class="submit">	<input type="submit" name="submit" value="Add this job" /></div>

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
	$job_title	= $_POST['job_title'];
	$job_type	= $_POST['job_type'];
	$location	= $_POST['location'];
	$salary	= $_POST['salary'];
	$category_name	= $_POST['category_name'];
	$job_description	= $_POST['job_description'];
    $apply_link	= $_POST['apply_link'];
	$username = $_SESSION['username']; 

	
	
 
		# insert data into mysql database
		$sql = "INSERT  INTO `job` (`job_title`, `job_type`, `location`, `salary`, `category_name`, `job_description`, `job_username`, `apply_link`) 
				VALUES ('{$job_title}', '{$job_type}', '{$location}', '{$salary}', '{$category_name}', '{$job_description}', '{$username}', '{$apply_link}')";
 
		if ($mysqli->query($sql)) {
			
			header('Location: ../Jobs/advisor_jobs.php');
		} else {
			echo "<p>MySQL error no {$mysqli->errno} : {$mysqli->error}</p>";
			exit();
		
	}
	}
?>		           
            

         </div>
    </body>
</html>