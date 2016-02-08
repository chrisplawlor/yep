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
            <link type = "text/css" href ="categories.css" rel = "stylesheet" >
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
<a href="../my_preferences.php">
			<img src="../../Images/back.png" style="position: absolute; top:0%; bottom:5%;left: 1%; right:5%; width:10%;height:100%;">
</a>
<h3>My Categories</h3><a href="add_category.php">
<img src="../../Images/plus.png" style="position: absolute; top:0%; bottom:5%;left: 88%; right:5%; width:12%;height:100%;">
 </a>
			</div>
			
			<div data-role="main" class="ui-content">
 
<!-- The HTML registration form -->



        <?php
        
    $username = $_SESSION['username']; 

    //    require_once("../mysql_details.php");
	//$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	$connection = mysql_connect("devweb2014.cis.strath.ac.uk", "pkb12170", "couslyti");
	mysql_select_db("pkb12170",$connection);
	$sql = "SELECT *  FROM categories WHERE categories_username = '$username' ";
	$myData = mysql_query($sql, $connection);

	while($record = mysql_fetch_array($myData)) {
	
	
	?>
		 
	<hr>
				<div class="skill-content">

	<h4> <?php echo $record['category_name']; ?></h4></div>
	<?php
	
		
}
	mysql_close($connection);
	
        
        ?>
        <hr>
        
         </div>
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
	$meeting_number	= $_POST['meeting_number'];
	$meeting_date	= $_POST['meeting_date'];
	$meeting_time	= $_POST['meeting_time'];
	$meeting_location	= $_POST['meeting_location'];
	$username = $_SESSION['username']; 

	
	
	
 
		# insert data into mysql database
		$sql = "INSERT  INTO `meetings` (`meeting_number`, `meeting_date`, `meeting_time`, `meeting_location`, `username_fk`) 
				VALUES ('{$meeting_number}', '{$meeting_date}', '{$meeting_time}', '{$meeting_location}', '{$username}')";
 
		if ($mysqli->query($sql)) {
			
			header('Location: ../Diary/diary.php');
		} else {
			echo "<p>MySQL error no {$mysqli->errno} : {$mysqli->error}</p>";
			exit();
		
	}
	}
?>		           
            

         </div>
    </body>
</html>