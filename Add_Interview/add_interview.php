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
            <link type = "text/css" href ="add_interview.css" rel = "stylesheet" >
            <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<link rel="icon" href="../Images/Icon.png">
<link rel="apple-touch-icon"  href="../Images/Icon.png">
<link rel="apple-touch-icon-precomposed" href="../Images/Icon.png">

   </head>

   
                     <body>
            <div class="page-content">
            
              
            <?php
require_once("../mysql_details.php");
if (!isset($_POST['submit'])) {
?>	

<div class="page-content-2">

			<h3>Diary: New Interview</h3> 
			</div>
			
			<div data-role="main" class="ui-content">
 
<!-- The HTML registration form -->


<div class="form">
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post" class="form">
		<h3>
		Name: <input type="text" name="entry_name" /><br /></h3>
		<br>
		<h3>Date of Interview: <input type="date" name="interview_date" /> <br /></h3>
		<br>
		<h3>Time: <input type="time" name="interview_time" /> <br /></h3>
		<br>
		<h3>Location: <input type="text" name="interview_location" /></h3>
		<br>
	<h3>Notes: <input type="text" name="interview_notes" /></h3></div>
		<br>

		<div class="submit"><input type="submit" name="submit" value="Submit" /></div>

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
	$entry_name	= $_POST['entry_name'];
	$interview_location	= $_POST['interview_location'];
	$interview_notes	= $_POST['interview_notes'];
	$interview_date	= $_POST['interview_date'];
	$interview_time	= $_POST['interview_time'];
	
	
	
 
		# insert data into mysql database
		$sql = "INSERT  INTO `interviews` (`entry_name`, `interview_location`, `interview_notes`, `interview_date`, `interview_time`) 
				VALUES ('{$entry_name}', '{$interview_location}', '{$interview_notes}', '{$interview_date}', '{interview_time}')";
 
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