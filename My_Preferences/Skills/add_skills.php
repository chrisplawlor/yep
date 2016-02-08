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
            <link type = "text/css" href ="add_skills.css" rel = "stylesheet" >
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
<a href="skills.php">
			<img src="../../Images/back.png" style="position: absolute; top:0%; bottom:5%;left: 1%; right:5%; width:10%;height:100%;">
</a>
<h3>Add a Skill</h3> 
			</div>
			
			<div data-role="main" class="ui-content">
 
<!-- The HTML registration form -->


<div class="form">
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post" class="form">
		<h3> <input type = "text" name="skill_name" > </h3>
	<br>


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
	$skill_name	= $_POST['skill_name'];
	$username = $_SESSION['username']; 

	
	
	
 
		# insert data into mysql database
		$sql = "INSERT  INTO `skills` (`skill_name`, `skills_username`) 
				VALUES ('{$skill_name}', '{$username}')";
 
		if ($mysqli->query($sql)) {
			
			header('Location: skills.php');
		} else {
			echo "<p>MySQL error no {$mysqli->errno} : {$mysqli->error}</p>";
			exit();
		
	}
	}
?>		           
            

         </div>
    </body>
</html>