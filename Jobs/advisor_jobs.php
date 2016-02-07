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
            <link type = "text/css" href ="advisor_jobs.css" rel = "stylesheet" >
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
			<li><a href="../Home/advisor_home.php"><img src="../Images/home.png" style="width:9%; height:4.3%;" ><h9>HOME</h9></a></li>
			<li><a href="../My_Users/my_users.php"><img src="../Images/clients.png" style="width:11%; height:4.8%;" ><h9>MY CLIENTS</h9></a></li>
			<li><a href="../Jobs/advisor_jobs.php"><img src="../Images/match_on.png" style="width:11%; height:4.8%;" ><h9>JOBS</h9></a></li>
			<li><a href="../Log Out/logout.php"><img src="../Images/logout.png" style="width:11%; height:4.8%;" ><h9>LOG OUT</h9></a></li>
            </ul>
                
                    
                </div>
                
                <body>
            <div class="page-content">
            <a href="../Add_Job/add_job.php">
            <br>
  <img src="../Images/button-21.png" style="position: relative; top:2.5%; bottom:2%;left: 3%; right:5%; width:94%;height:38%;">
  </a>
   <br><br>
     <a href="search_jobs_advisor.php">

   <img src="../Images/button-23.png" style="position: relative;  left: 3%; right:5%; width:94%;height:38%;">
  
</a>


<script>
//script for the job box are in the while loop

$(".jobBox").click(function() {
  window.location = $(this).find("a").attr("href"); 
  return false;
});


</script>
 <div  class="page-content-3">

     <h3> Your Recently Added Jobs</h3>  
     </div>
            <div  class="page-content-2">


        <?php
        
        	$username = $_SESSION['username']; 

	$connection = mysql_connect("devweb2014.cis.strath.ac.uk", "pkb12170", "couslyti");
	mysql_select_db("pkb12170",$connection);
	$sql = "SELECT * FROM job WHERE job_username = '$username' ORDER BY job_id DESC";
	$myData = mysql_query($sql, $connection);


	$counter = 0;
	while($record = mysql_fetch_array($myData)) {
	?>
	<div class="jobBox">
	
	 <a href="job_overview.php"></a>
	 
	<hr>
	<h4> <?php echo $record['job_title']; ?></h4>
	
	
	<h6><?php echo nl2br (" Location: ");?>
	<?php echo $record['location'];?></h6>
	<h6> <?php echo nl2br ("\n Salary: ")?>
	<?php echo $record['salary'];?></h6>
	<h6> <?php echo nl2br ("\n Job Type: ");?>
	 <?php echo $record['job_type'];?></h6><?php
	}
		

	mysql_close($connection);
	
        
        ?>
        <hr>
        </div>
        
         </div>
    </body>
</html>