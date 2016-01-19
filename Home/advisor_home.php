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
            <link type = "text/css" href ="advisor_home.css" rel = "stylesheet" >
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
			<li><a href="#" class="active">HOME</a></li>
			<li><a href="../My_Users/my_users.php">MY USERS</a></li>
			<li><a href="../Jobs/advisor_jobs.php">JOBS</a></li>
			<li><a href="../Log Out/logout.php">LOG OUT</a></li>
            </ul>
                
                    
                </div>
                
                <body>
            <div id="search" class="page-content">
           <h3>Youth Employment App</h3>
          <img src="../Images/Untitled.png"  style="width:160px;height:100px;position:center;">
           <p1> Welcome, </p1>
           <p2> 
           <?php
        
           echo $_SESSION['username']; 
           ?>
           </p2>
            
            
        
         </div>
    </body>
</html>