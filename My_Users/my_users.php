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
            <link type = "text/css" href ="my_users.css" rel = "stylesheet" >
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
			<li><a href="../My_Users/my_users.php"><img src="../Images/client_on.png" style="width:11%; height:4.8%;" ><h9>MY CLIENTS</h9></a></li>
			<li><a href="../Jobs/advisor_jobs.php"><img src="../Images/match.png" style="width:11%; height:4.8%;" ><h9>JOBS</h9></a></li>
			<li><a href="../Log Out/logout.php"><img src="../Images/logout.png" style="width:11%; height:4.8%;" ><h9>LOG OUT</h9></a></li>
            </ul>
                
                    
                </div>
                
                <body onload="form1.submit()">
            <div class="page-content">
      
      <h3> My Clients </h3>
      </div>
      
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post" class="form" name="form1">
<br><select name="sort_names">
<option value="default"> Sort by Name </option>
  <option value="firstname" name="first_name">First Name</option>
    <option value="surname" name="surname">Surname</option>
  </select><select name="sort_levels">
  <option value="default2" name="default2">  Sort by Level </option>
  <option value="ascending" name="ascending">Ascending</option>
    <option value="descending"name="descending">Descending</option>
  </select>
  
 <input type="submit" name="submit" value="Go"/>
  </form>
            <div  class="page-content-2">


        <?php
        error_reporting(0);
        	$username = $_SESSION['username']; 

	$connection = mysql_connect("devweb2014.cis.strath.ac.uk", "pkb12170", "couslyti");
	mysql_select_db("pkb12170",$connection);
	

	


//Sort levels in ascending order	
if($_POST['sort_levels'] == 'ascending') {

	$sql = "SELECT * FROM user WHERE advisor_username = '$username'  ORDER BY level_number ASC";
	
	$myData = mysql_query($sql, $connection);


	while($record = mysql_fetch_array($myData)) {
	?>
        
    <script>
        //JQUERY Script to make DIV clickable
        $(".clientBox").click(function() {
  window.location = $(this).find("form").attr("input"); 
  return false;
});
        
        </script>
        

		<div class="clientBox">
            
<!-- Form to send variables to next page such as first name and last name -->

	 
	<hr>
            
	<h4>  
        <?php echo $record['first_name'] . " ". $record['last_name']; ?> 
        
    </h4> 
        
        <div class="level-number">
         <h3> <?php echo $record['level_number']; ?> </h3></div></div>       <form method="post" action="advisor_chat.php">
            
            <!-- submits the client's name to advisor_chat.php -->
    <input type="hidden" name="clientName" value="<?php echo $record['first_name'] . " ". $record['last_name']?>">
            
            <!-- submits the client's username to advisor_chat.php -->
            <input type="hidden" name="clientUsername" value="<?php echo $record['username']?>">
            
            
    <input type="image" name="submit" src="../Images/chat_2.png" border="0" alt="Submit" style="position:relative; top:0; left:3%; width:20%; height:11%;" onclick="javascript: form.action='advisor_chat.php';"/>
        
        <input type="image" name="submit" src="../Images/chart_bar.png" border="0" alt="Submit" style="position:relative; top:0; left:3%; width:23%; height:11%;"onclick="javascript: form.action='../Jobs/advisor_jobs.php';"/>
        
        <input type="image" name="submit" src="../Images/edit.png" border="0" alt="Submit" style="position:relative; top:0; left:3%; width:20%; height:10%;"onclick="javascript: form.action='../Jobs/advisor_jobs.php';"/>
</form>
  
            
	<?php
        
        
}}
//Sort levels in descending order		
if($_POST['sort_levels'] == 'descending') {

	$sql = "SELECT * FROM user WHERE advisor_username = '$username'  ORDER BY level_number DESC";
	
	$myData = mysql_query($sql, $connection);


while($record = mysql_fetch_array($myData)) {
	?>
        
    <script>
        //JQUERY Script to make DIV clickable
        $(".clientBox").click(function() {
  window.location = $(this).find("form").attr("input"); 
  return false;
});
        
        </script>
        

		<div class="clientBox">
            
<!-- Form to send variables to next page such as first name and last name -->

	 
	<hr>
            
	<h4>  
        <?php echo $record['first_name'] . " ". $record['last_name']; ?> 
        
    </h4> 
        
        <div class="level-number">
         <h3> <?php echo $record['level_number']; ?> </h3></div></div>       <form method="post" action="advisor_chat.php">
            
            <!-- submits the client's name to advisor_chat.php -->
    <input type="hidden" name="clientName" value="<?php echo $record['first_name'] . " ". $record['last_name']?>">
            
            <!-- submits the client's username to advisor_chat.php -->
            <input type="hidden" name="clientUsername" value="<?php echo $record['username']?>">
            
            
    <input type="image" name="submit" src="../Images/chat_2.png" border="0" alt="Submit" style="position:relative; top:0; left:3%; width:20%; height:11%;" onclick="javascript: form.action='advisor_chat.php';"/>
        
        <input type="image" name="submit" src="../Images/chart_bar.png" border="0" alt="Submit" style="position:relative; top:0; left:3%; width:23%; height:11%;"onclick="javascript: form.action='../Jobs/advisor_jobs.php';"/>
        
        <input type="image" name="submit" src="../Images/edit.png" border="0" alt="Submit" style="position:relative; top:0; left:3%; width:20%; height:10%;"onclick="javascript: form.action='../Jobs/advisor_jobs.php';"/>
</form>
  
            
	<?php
        
        
}}
	//Sort first names in ascending order		
if($_POST['sort_names'] == 'firstname') {

	$sql = "SELECT * FROM user WHERE advisor_username = '$username'  ORDER BY first_name ASC";
	
	$myData = mysql_query($sql, $connection);


	while($record = mysql_fetch_array($myData)) {
	?>
        
    <script>
        //JQUERY Script to make DIV clickable
        $(".clientBox").click(function() {
  window.location = $(this).find("form").attr("input"); 
  return false;
});
        
        </script>
        

		<div class="clientBox">
            
<!-- Form to send variables to next page such as first name and last name -->

	 
	<hr>
            
	<h4>  
        <?php echo $record['first_name'] . " ". $record['last_name']; ?> 
        
    </h4> 
        
        <div class="level-number">
         <h3> <?php echo $record['level_number']; ?> </h3></div></div>       <form method="post" action="advisor_chat.php">
            
            <!-- submits the client's name to advisor_chat.php -->
    <input type="hidden" name="clientName" value="<?php echo $record['first_name'] . " ". $record['last_name']?>">
            
            <!-- submits the client's username to advisor_chat.php -->
            <input type="hidden" name="clientUsername" value="<?php echo $record['username']?>">
            
            
    <input type="image" name="submit" src="../Images/chat_2.png" border="0" alt="Submit" style="position:relative; top:0; left:3%; width:20%; height:11%;" onclick="javascript: form.action='advisor_chat.php';"/>
        
        <input type="image" name="submit" src="../Images/chart_bar.png" border="0" alt="Submit" style="position:relative; top:0; left:3%; width:23%; height:11%;"onclick="javascript: form.action='../Jobs/advisor_jobs.php';"/>
        
        <input type="image" name="submit" src="../Images/edit.png" border="0" alt="Submit" style="position:relative; top:0; left:3%; width:20%; height:10%;"onclick="javascript: form.action='../Jobs/advisor_jobs.php';"/>
</form>
  
            
	<?php
        
        
}}

	//Sort surnames names in ascending order		
if($_POST['sort_names'] == 'surname') {

	$sql = "SELECT * FROM user WHERE advisor_username = '$username'  ORDER BY last_name ASC";
	
	$myData = mysql_query($sql, $connection);


	while($record = mysql_fetch_array($myData)) {
	?>
        
    <script>
        //JQUERY Script to make DIV clickable
        $(".clientBox").click(function() {
  window.location = $(this).find("form").attr("input"); 
  return false;
});
        
        </script>
        

		<div class="clientBox">
            
<!-- Form to send variables to next page such as first name and last name -->

	 
	<hr>
            
	<h4>  
        <?php echo $record['first_name'] . " ". $record['last_name']; ?> 
        
    </h4> 
        
        <div class="level-number">
         <h3> <?php echo $record['level_number']; ?> </h3></div></div>       <form method="post" action="advisor_chat.php">
            
            <!-- submits the client's name to advisor_chat.php -->
    <input type="hidden" name="clientName" value="<?php echo $record['first_name'] . " ". $record['last_name']?>">
            
            <!-- submits the client's username to advisor_chat.php -->
            <input type="hidden" name="clientUsername" value="<?php echo $record['username']?>">
            
            
    <input type="image" name="submit" src="../Images/chat_2.png" border="0" alt="Submit" style="position:relative; top:0; left:3%; width:20%; height:11%;" onclick="javascript: form.action='advisor_chat.php';"/>
        
        <input type="image" name="submit" src="../Images/chart_bar.png" border="0" alt="Submit" style="position:relative; top:0; left:3%; width:23%; height:11%;"onclick="javascript: form.action='../Jobs/advisor_jobs.php';"/>
        
        <input type="image" name="submit" src="../Images/edit.png" border="0" alt="Submit" style="position:relative; top:0; left:3%; width:20%; height:10%;"onclick="javascript: form.action='../Jobs/advisor_jobs.php';"/>
</form>
  
            
	<?php
        
        
}}
	//Default (no sort)
else {


	$sql = "SELECT * FROM user WHERE advisor_username = '$username'  ORDER BY first_name ASC";
	
	$myData = mysql_query($sql, $connection);


	while($record = mysql_fetch_array($myData)) {
	?>
        
    <script>
        //JQUERY Script to make DIV clickable
        $(".clientBox").click(function() {
  window.location = $(this).find("form").attr("input"); 
  return false;
});
        
        </script>
        

		<div class="clientBox">
            
<!-- Form to send variables to next page such as first name and last name -->

	 
	<hr>
            
	<h4>  
        <?php echo $record['first_name'] . " ". $record['last_name']; ?> 
        
    </h4> 
        
        <div class="level-number">
         <h3> <?php echo $record['level_number']; ?> </h3></div></div>       <form method="post" action="advisor_chat.php">
            
            <!-- submits the client's name to advisor_chat.php -->
    <input type="hidden" name="clientName" value="<?php echo $record['first_name'] . " ". $record['last_name']?>">
            
            <!-- submits the client's username to advisor_chat.php -->
            <input type="hidden" name="clientUsername" value="<?php echo $record['username']?>">
            
            
    <input type="image" name="submit" src="../Images/chat_2.png" border="0" alt="Submit" style="position:relative; top:0; left:3%; width:20%; height:11%;" onclick="javascript: form.action='advisor_chat.php';"/>
        
        <input type="image" name="submit" src="../Images/chart_bar.png" border="0" alt="Submit" style="position:relative; top:0; left:3%; width:23%; height:11%;"onclick="javascript: form.action='../Jobs/advisor_jobs.php';"/>
        
        <input type="image" name="submit" src="../Images/edit.png" border="0" alt="Submit" style="position:relative; top:0; left:3%; width:20%; height:10%;"onclick="javascript: form.action='../Jobs/advisor_jobs.php';"/>
</form>
  
            
	<?php
        
        
}}
	mysql_close($connection);
	
            
        ?>
        <hr>
            </div>
       
        </div>
        </div>
         </div>
    </body>
</html>