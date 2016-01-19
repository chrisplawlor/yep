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
            <link type = "text/css" href ="my_preferences.css" rel = "stylesheet" >
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
            <li><a href="../Home/home.php">HOME</a></li>
            
			<li><a href="#">PREPARATION</a>
			<ul>
			<li><a href="../CV_Tips/cv_tips.php">> CV TIPS</a></li>
			<li><a href="../CL_Tips/cl_tips.php">> COVER LETTER TIPS</a></li>
			<li><a href="../Interview_Tips/interview_tips.php">> INTERVIEW TIPS</a></li>
			</ul>
			</li>
			
			<li><a href="#">AT WORK</a>
			<ul>
			<li><a href="../Cheques/cheques.php">> CHEQUES</a></li>
			<li><a href="../Tax/tax.php">> TAX</a></li>
			</ul>
			</li>
			
			<li><a href="../My_Advisor/my_advisor.php">MY ADVISOR</a></li>
			<li><a href="../Jobs/jobs.php">JOBS</a></li>
			<li><a href="../Diary/diary.php"> DIARY</a></li>
			<li><a href="#" class="active">SETTINGS</a></li>
			<li><a href="../Log Out/logout.php">LOG OUT</a></li>
			
                    </ul>
                
                    
                </div>
                
                <body>
            <div id="search" class="page-content">
			<h3>My Preferences</h3>            
            
        
         </div>
    </body>
</html>