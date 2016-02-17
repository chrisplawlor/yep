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

            <a href="jobs.php">
			<img src="../Images/back_blue.png" style="position: absolute; top:0%; bottom:5%;left: 1%; right:5%; width:13%;height:100%;">
</a>
           <h3>Your Job Matches</h3>
  </div>
  
              <?php
require_once("../mysql_details.php");

?>	


            <div  class="page-content-2">
            
            
            <?php 
$connection = mysql_connect("devweb2014.cis.strath.ac.uk", "pkb12170", "couslyti");
mysql_select_db("pkb12170",$connection);

$username = $_SESSION['username']; 

             
 $jobid = "SELECT `job_id` FROM job";

 $jobidfk = "SELECT `job_id_fk` FROM job_matches WHERE job_id_fk = '$username'";

//if job_matches is null then query
    
$search_sql="SELECT * 
			 FROM job, skills, categories, job_matches";
			 
             
             
             
             
    if($jobidfk == null){
          $search_sql.= "WHERE (skills_username = '$username'
			 OR categories_username = '$username' )
			 AND(job_skill LIKE skill_name
			 OR category_name LIKE c_name) 
             ORDER BY rand() LIMIT 1";

    
$myData = mysql_query($search_sql, $connection)or die(mysql_error());
$counter=   1;
	

while($record = mysql_fetch_array($myData)) {

    echo '<form method="post" action="match_save.php" >';

//if(mysql_num_rows($myData)!=0) {

	//$record = mysql_fetch_array($myData)
	?>
              <div  class="job-title">
           <h4><?php echo '<input type="hidden" value="'.$record['job_title'].'" id="job_title'.$counter.'" name="job_title'.$counter.'" />';
                echo $record['job_title'];
               
               ?></h4>
  </div>
 
	<div class="jobBox">
	
	 <a href="job_overview.php"></a>
        
        <!-- Job id values, so that they can be read in and compared with the users current match saves -->
<?php echo '<input type="hidden" value="'.$record['job_id'].'" id="job_id'.$counter.'" name="job_id'.$counter.'" />';
	?>
	<!-- Displays job profile -->
		<h2><?php echo nl2br (" Category: ");?></h2><p1>
	<?php echo '<input type="hidden" value="'.$record['category_name'].'" id="job_category'.$counter.'" name="job_category'.$counter.'" />';
        echo $record['category_name'];?></p1>
        
	<h2><?php echo nl2br (" Location: ");?></h2><p1>
	<?php echo '<input type="hidden" value="'.$record['location'].'" id="location'.$counter.'" name="location'.$counter.'" />';
        echo $record['location'];?></p1>
	<h6> <?php echo nl2br ("\n Salary: ")?></h6><p1>
	<?php echo '<input type="hidden" value="'.$record['salary'].'" id="salary'.$counter.'" name="salary'.$counter.'" />';
        echo "£" . $record['salary'];?></p1>
	<h6> <?php echo nl2br ("\n Job Type: ");?></h6><p1>
	 <?php echo '<input type="hidden" value="'.$record['job_type'].'" id="job_type'.$counter.'" name="job_type'.$counter.'" />';
        echo $record['job_type'];?></p1>
	 <h6> <?php echo nl2br ("\n Description: ");?></h6><p1>
	 <?php echo '<input type="hidden" value="'.$record['job_description'].'" id="job_description'.$counter.'" name="job_description'.$counter.'" />';
        echo $record['job_description'];?></p1>
<br>
  <!--Yes and No buttons for each job profile -->
	<div  class="button-background">
        
             <div class="match-button-cross" >
 <?php echo '<input type="image"  src="../Images/cross.png" style="position: absolute; padding-top:0%; bottom:2%;left: 17%; right:5%; width:26%;height:95%;" value="submit" alt="submit" id="no'.$counter.'" name="no'.$counter.'" />';?>
                 
        </div>
             <div class="match-button-tick" >

	 <?php echo '<input type="image"  src="../Images/tick.png" style="position: absolute; padding-top:0%; bottom:2%;left: 56%; right:5%; width:26%;height:95%;" value="submit" alt="submit" id="yes'.$counter.'" name="yes'.$counter.'" />';?>

        </div></div><?php

					  $counter ++;
}
        ?>
	




</form>

</div>

<?php
		
		

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



?>
            </div>

        </div>
                    
         </div>
    </body>
</html>