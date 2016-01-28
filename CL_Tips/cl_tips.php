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
            <link type = "text/css" href ="cl_tips.css" rel = "stylesheet" >
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
            <li><a href="../Home/home.php"><img src="../Images/home.png" style="width:9%; height:4.3%;" > <h9>HOME</h9></a></li>
            
			<li><a href="#"><img src="../Images/prep_on.png" style="width:11%; height:4.8%;" ><h9>PREPARATION</h9></a>
			<ul>
			<li><a href="../CV_Tips/cv_tips.php">> CV TIPS</a></li>
			<li><a href="../CL_Tips/cl_tips.php">> COVER LETTER TIPS</a></li>
			<li><a href="../Interview_Tips/interview_tips.php">> INTERVIEW TIPS</a></li>
			</ul>
			</li>
			
			<li><a href="#"><img src="../Images/work.png" style="width:11%; height:4.1%;" ><h9>AT WORK</h9></a>
			<ul>
			<li><a href="../Cheques/cheques.php">> CHEQUES</a></li>
			<li><a href="../Tax/tax.php">> TAX</a></li>
			</ul>
			</li>
			
			<li><a href="../My_Advisor/my_advisor.php"  ><img src="../Images/chat.png" style="width:11%; height:4.8%;" ><h9>MY ADVISOR</h9></a></li>
			<li><a href="../Jobs/jobs.php"><img src="../Images/match.png" style="width:11%; height:4.8%;" ><h9>JOB MATCHES</h9></a></li>
			<li><a href="../Jobs/search_jobs.php"><img src="../Images/search.png" style="width:11%; height:4.8%;" ><h9>SEARCH JOBS</h9></a></li>
			<li><a href="../Diary/diary.php"><img src="../Images/diary_icon.png" style="width:10%; height:4.8%;" > <h9>MY DIARY</h9></a></li>
			<li><a href="../My_Preferences/my_preferences.php"><img src="../Images/settings.png" style="width:11%; height:4.3%;" ><h9>MY PREFERENCES</h9></a></li>
			<li><a href="../Log Out/logout.php"><img src="../Images/logout.png" style="width:11%; height:4.8%;" ><h9>LOG OUT</h9></a></li>
			
                    </ul>
                
                    
                </div>
                
                <body>
            <div id="search" class="page-content">
            <h3>Cover Letter Tips</h3>
            
            
            </div>
            
            
            <div class="page-content-numbers">
<h3>1 </h3></div>
<div class="page-content-5" >
<h2>Different job, Different CL</h2></div>


<div class="page-content-info">

<p1>Write individual cover letters for every job you apply for as they will all be different.</p1>
 </div>
           
            <div class="page-content-numbers">
<h3>2 </h3>
</div><div class="page-content-5" ><h2> What to tell the recruiter... </h2></div>
<div class="page-content-info">
<p1>Remind the recruiter what they're looking for and then tell them that you are what they are looking for.</p1>
 </div>
 
 
            <div class="page-content-numbers">
<h3>3 </h3>
</div> <div class="page-content-5" ><h2>Why you're the best choice</h2> </div>

<div class="page-content-info">
<p1>Demonstrate why you are the best choice with examples and show how you could make a difference in the improvement of the company.</p1>

 </div>
           
           
            <div class="page-content-numbers">
<h3>4 </h3>
</div><div class="page-content-5" > <h2>Keep it simple</h2></div>
<div class="page-content-info">
<p1>Look online for cover letter samples and use that as a guide on both layout and how simple to keep it.  A cover letter usually should be about 1 A4 page.</p1>
 </div>
           



            
            
        
         </div>
    </body>
</html>