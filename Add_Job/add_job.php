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

   
        <input type="checkbox"  id="sidebartoggler" name ="" value=""> 
        
        <div class="page-wrap">
            <div class ="headbar">  <h1>YeP</h1> </div>
            <label for="sidebartoggler" class ="toggle" >☰</label> 
             <div class="sidebar">
             
            <ul>          
            <li><a href="../Home/home.php">HOME</a></li>
            
			<li><a href="#">PREPARATION</a>
			<ul>
			<li><a href="../CV_Tips/cv_tips.php">> CV TIPS</a></li>
			<li><a href="../CL_Tips/cl_tips.php">> COVER LETTER TIPS</a></li>
			<li><a href="../Interview_Tips/interview_tips.php">> INTERVIEW TIPS</a></li>
			</ul>
			</li>
			
			<li><a href="#">AT WORK</a>
			<ul>
			<li><a href="../Cheques/cheques.php">> CHEQUES</a></li>
			<li><a href="../Tax/tax.php">> TAX</a></li>
			</ul>
			</li>
			
			<li><a href="#" class="active">MY ADVISOR</a></li>
			<li><a href="../Jobs/jobs.php">JOBS</a></li>
			<li><a href="../Diary/diary.php"> DIARY</a></li>
			<li><a href="../My_Preferences/my_preferences.php">SETTINGS</a></li>
			<li><a href="../Log Out/logout.php">LOG OUT</a></li>
			
                    </ul>
                
                    
                </div>
                
                <body>
            <div id="search" class="page-content">
            
              
            <?php
require_once("../mysql_details.php");
if (!isset($_POST['submit'])) {
?>	

			<h3>Add Job</h3> 
			<div data-role="main" class="ui-content">
 
<!-- The HTML registration form -->
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		Job Title: <input type="text" name="job_title" /><br />
		Job Type: <select name="job_type">
  <option value="Permanent">Permanent</option>
    <option value="Contract">Contract</option>
  <option value="Part Time">Part Time</option>
  <option value="Temporary">Temporary</option>
  <option value="Volunteer Work">Volunteer Work</option>
  </select>
		Location: <input type="text" name="location" /><br />
		Salary/Rate: <input type="text" name="salary" />
		Category: <select name="category_name">
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
</select>
		Description: <input type="text" name="job_description" /><br />
		
 
		<input type="submit" name="submit" value="Add this job" />
	</form>
	
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
	
	
	
 
		# insert data into mysql database
		$sql = "INSERT  INTO `job` (`job_title`, `job_type`, `location`, `salary`, `category_name`, `job_description`) 
				VALUES ('{$job_title}', '{$job_type}', '{$location}', '{$salary}', '{$category_name}', '{$job_description}')";
 
		if ($mysqli->query($sql)) {
			//header('Location: register_success.php');
			
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