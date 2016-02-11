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
            <link type = "text/css" href ="search_results.css" rel = "stylesheet" >
            <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<link rel="icon" href="../Images/Icon.png">
<link rel="apple-touch-icon"  href="../Images/Icon.png">
<link rel="apple-touch-icon-precomposed" href="../Images/Icon.png">

   </head>

   
        <input type="checkbox"  id="sidebartoggler" name ="" value=""> 
        
        <div class="page-wrap">

              <body>
            <div  class="page-content">
            
            <a href="search_jobs.php">
			<img src="../Images/back_blue.png" style="position: absolute; top:0%; bottom:5%;left: 1%; right:5%; width:13%;height:100%;">
</a>
           <h3>Search Results</h3>
  </div>
<p1>Sort by: 
            <div  class="page-content-2">
<?php 
$connection = mysql_connect("devweb2014.cis.strath.ac.uk", "pkb12170", "couslyti");
mysql_select_db("pkb12170",$connection);
$search = $_POST['search'];
$category = $_POST['category_name'];
$location = $_POST['location'];

$search_sql="SELECT * FROM job WHERE job_title LIKE '%$search%' 
OR job_description LIKE '%$search%'";

$category_sql="SELECT * FROM job WHERE category_name LIKE '%$category%'";

$location_sql="SELECT * FROM job WHERE location LIKE '%$category%'";

$myData = mysql_query($search_sql, $connection);
$myData2 = mysql_query($category_sql, $connection);
if(mysql_num_rows($myData)!=0) {

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
		}
else {

echo "No results found";
}
	mysql_close($connection);
	
?>
        </div>
        
         </div>
    </body>
</html>