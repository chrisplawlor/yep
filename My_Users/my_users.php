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
                
                <body>
            <div id="search" class="page-content">
			<h3>My Clients</h3>            
            
        
         </div>
    </body>
</html>