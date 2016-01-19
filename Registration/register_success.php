

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
            <link type = "text/css" href ="register_success.css" rel = "stylesheet">
            <link rel="apple-touch-icon" href="logo.jpg" />
            <link rel="apple-touch-icon-precomposed" href="logo.png" />
            <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding">
       
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
            <br><br>
            
            <?php
if (!isset($_POST['submit'])){
?>
<h4>Your registration was successful! <br></h4>
<h5> Now you can log in:</h5>


<div id="form" class="form" >

<!-- The HTML login form -->
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		<h3> Username: <input type="text" name="username" /><br /></h3> 
		<h3> Password: <input type="password" name="password" /><br /></h3> 
 
		<input type="submit" name="submit" value="Login" />
	</form>
	
	
<?php
} else {
	require_once("../mysql_details.php");
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if ($mysqli->connect_errno) {
		echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
		exit();
	}
 
	$username = $_POST['username'];
	$password = $_POST['password'];
 
	$sql = "SELECT * from user WHERE username LIKE '{$username}' AND password LIKE '{$password}' LIMIT 1";
	$result = $mysqli->query($sql);
	if (!$result->num_rows == 1) {
		session_start();
		$_SESSION['login'] = '';
		echo "<p>Invalid username or password</p>";
	} else {
		session_start();
		$_SESSION['login'] = "1";
		header('location: ../Home/home.php');
	}
}
?>	
            </div>
    </body>
</html>