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
            <link type = "text/css" href ="job_matches.css" rel = "stylesheet" >
            <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<link rel="icon" href="../Images/Icon.png">
<link rel="apple-touch-icon"  href="../Images/Icon.png">
<link rel="apple-touch-icon-precomposed" href="../Images/Icon.png">

   </head>

   
        <input type="checkbox"  id="sidebartoggler" name ="" value=""> 
        
        <div class="page-wrap">
            
                
              <body>
            <div  class="page-content">
            <?php
// require_once("../mysql_details.php");
// if (!isset($_POST['submit'])) {
?>	
            <a href="jobs.php">
			<img src="../Images/back_blue.png" style="position: absolute; top:0%; bottom:5%;left: 1%; right:5%; width:13%;height:100%;">
</a>
           <h3>Your Job Matches</h3>
  </div>
  
  


            <div  class="page-content-2">
            
            
            <?php 
$connection = mysql_connect("devweb2014.cis.strath.ac.uk", "pkb12170", "couslyti");
mysql_select_db("pkb12170",$connection);

$username = $_SESSION['username']; 

$search_sql="SELECT * 
			 FROM job, skills, categories 
			 WHERE (skills_username = '$username' 
			 OR categories_username = '$username')
			 AND(job_skill LIKE skill_name
			 OR category_name LIKE c_name)";

$myData = mysql_query($search_sql, $connection)or die(mysql_error());
if(mysql_num_rows($myData)!=0) {

	$record = mysql_fetch_array($myData)
	?>
              <div  class="job-title">
           <h4><?php echo $record['job_title']; ?></h4>
  </div>
 
	<div class="jobBox">
	
	 <a href="job_overview.php"></a>
	 
	
	
	
	<h2><?php echo nl2br (" Location: ");?></h2><p1>
	<?php echo $record['location'];?></p1>
	<h6> <?php echo nl2br ("\n Salary: ")?></h6><p1>
	<?php echo "£" . $record['salary'];?></p1>
	<h6> <?php echo nl2br ("\n Job Type: ");?></h6><p1>
	 <?php echo $record['job_type'];?></p1>
	 <h6> <?php echo nl2br ("\n Description: ");?></h6><p1>
	 <?php echo $record['job_description'];?></p1><?php
	
		}
else {
?>
<h5>

<?php echo ("No matches.");?></h5> <h7><?php
echo nl2br ("\n Try adding more skills and hobbies!");
?> </h7>

<a href="../My_Preferences/my_preferences.php">
   <img src="../Images/plus_matches.png" style="position: absolute;  left: 18%; right:5%; width:64%;height:42%;">
  </a>
  
  <?php
  }
  
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	# check connection
	if ($mysqli->connect_errno) {
		echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
		exit();
	}


  //Save job to My Jobs page for the user
  $match_title = $record['job_title']; 
  $match_category = $record['category_name']; 
  $match_location = $record['location'];
  $match_salary = $record['salary'];
  $match_type = $record['job_type'];
  $match_description = $record['job_description'];

	
	
 
  $sql = "INSERT  INTO `job_matches` (`matched_title`, `matched_type`, `matched_location`, `matched_salary`, `matched_category`, `matched_description`, `matched_username`) 
				VALUES ('{$match_title}', '{$match_type}', '{$match_location}', '{$match_salary}', '{$match_category}', '{$match_description}', '{$username}')";
 
  

  
	mysql_close($connection);
	
?>




            </div>

        </div>
                    <div  class="button-background">

       <div class="match-button-cross" >
  <input type="image" src="../Images/cross.png" style="position: absolute; padding-top:0%; bottom:2%;left: 17%; right:5%; width:26%;height:95%;" alt="Submit">
  </div>
  
   <div class="match-button-tick" >
  <input type="image" src="../Images/tick.png" name="submit" style="position: absolute; padding-top:0%; bottom:2%;left: 56%; right:5%; width:26%;height:95%;" alt="Submit">
 
  </div>
  </div>
         </div>
    </body>
</html>