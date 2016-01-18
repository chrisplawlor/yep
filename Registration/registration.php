

<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
         <title>YeP</title>
         <meta name="mobile-web-app-capable" content="yes">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
            <meta name=viewport content="width=device-width, initial-scale=1, maximum-scale=1">
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta name="apple-mobile-web-app-status-bar-style" content="black">
            <meta name="mobile-web-app-capable" content="yes">
            <link type = "text/css" href ="registration.css" rel = "stylesheet">
            <link rel="apple-touch-icon" href="logo.jpg" />
            <link rel="apple-touch-icon-precomposed" href="logo.png" />
            <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding">
       
       <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
            <script type='text/javascript' charset='utf-8'>
   function hideAddressBar(){
  if(document.documentElement.scrollHeight<window.outerHeight/window.devicePixelRatio)
    document.documentElement.style.height=(window.outerHeight/window.devicePixelRatio)+'px';
  setTimeout(window.scrollTo(1,1),0);
}
window.addEventListener("load",function(){hideAddressBar();});
window.addEventListener("orientationchange",function(){hideAddressBar();});
 }
</script>

    </head>

   
                
 <body>
 <div id="search" class="page-content">
            
            <?php
require_once("../mysql_details.php");
if (!isset($_POST['submit'])) {
?>	




  <div data-role="main" class="ui-content">
  <h4> Registration </h4>
<!-- The HTML registration form -->
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		First name: <input type="text" name="first_name" /><br />
		Last name: <input type="text" name="last_name" /><br />
		Username: <input type="text" name="username" /><br />
		Password: <input type="password" name="password" /><br />
		Confirm Password: <input type="password" name="c_password" /><br />
		Email: <input type="email" name="email" /><br />
 
		<input type="submit" name="submit" value="Register" />
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
	$username	= $_POST['username'];
	$password	= $_POST['password'];
	$c_password	= $_POST['c_password'];
	$first_name	= $_POST['first_name'];
	$last_name	= $_POST['last_name'];
	$email		= $_POST['email'];
 
	# check if username and email exist else insert
	$exists = 0;
	$result = $mysqli->query("SELECT username from user WHERE username = '{$username}' LIMIT 1");
	if ($result->num_rows == 1) {
		$exists = 1;
		$result = $mysqli->query("SELECT email from user WHERE email = '{$email}' LIMIT 1");
		if ($result->num_rows == 1) $exists = 2;	
	} else {
		$result = $mysqli->query("SELECT email from user WHERE email = '{$email}' LIMIT 1");
		if ($result->num_rows == 1) $exists = 3;
	}
 
	if ($exists == 1) echo "<p>Username already exists!</p>";
	else if ($exists == 2) echo "<p>Username and Email already exists!</p>";
	else if ($exists == 3) echo "<p>Email already exists!</p>";
	else {
		# insert data into mysql database
		$sql = "INSERT  INTO `user` (`username`, `password`, `c_password`, `first_name`, `last_name`, `email`) 
				VALUES ('{$username}', '{$password}', '{$c_password}', '{$first_name}', '{$last_name}', '{$email}')";
 
		if ($mysqli->query($sql)) {
			//echo "New Record has id ".$mysqli->insert_id;
			echo "<p>Registred successfully!</p>"; //redirect to success page
		} else {
			echo "<p>MySQL error no {$mysqli->errno} : {$mysqli->error}</p>";
			exit();
		}
	}
}
?>		
            
            
               
        
         </div>
    </body>
</html>