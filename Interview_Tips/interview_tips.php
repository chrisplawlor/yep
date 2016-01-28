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
            <link type = "text/css" href ="interview_tips.css" rel = "stylesheet" >
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
			<li><a href="../CV_Tips/cv_tips.php"> CV TIPS</a></li>
			<li><a href="../CL_Tips/cl_tips.php">> COVER LETTER TIPS</a></li>
			<li><a href="#" class="active">> INTERVIEW TIPS</a></li>
			</ul>
			</li>
			
			<li><a href="#">AT WORK</a>
			<ul>
			<li><a href="../Cheques/cheques.php">> CHEQUES</a></li>
			<li><a href="../Tax/tax.php">> TAX</a></li>
			</ul>
			</li>
			
			<li><a href="../My_Advisor/my_advisor.php">MY ADVISOR</a></li>
			<li><a href="../Jobs/jobs.php">JOB MATCHES</a></li>
			<li><a href="../Jobs/search_jobs.php">SEARCH JOBS</a></li>
			<li><a href="../Diary/diary.php"> MY DIARY</a></li>
			<li><a href="../My_Preferences/my_preferences.php">SETTINGS</a></li>
			<li><a href="../Log Out/logout.php">LOG OUT</a></li>
			
                    </ul>
                
                    
                </div>
                
                <body>
            <div id="search" class="page-content">
            <h3>Interview Tips</h3>
            
            
            </div>
            
            
            <div class="page-content-numbers">
<h3>1 </h3></div>
<div class="page-content-5" >
<h2>Relax</h2></div>


<div class="page-content-info">

<p1> Have a quiet evening the night before. Have a bath or watch your favourite film – anything that makes you happy.</p1>
 </div>
           
            <div class="page-content-numbers">
<h3>2 </h3>
</div><div class="page-content-5" ><h2> Be punctual </h2></div>
<div class="page-content-info">
<p1>Write down the address and work out how you’ll get there. If you can, do a practice run. Aim to arrive 15 minutes before the interview.</p1>
 </div>
 
 
            <div class="page-content-numbers">
<h3>3 </h3>
</div> <div class="page-content-5" ><h2>Listen</h2> </div>

<div class="page-content-info">
<p1>Listen carefully to the questions. Make sure your answer tells them what they need to know.</p1>

 </div>
           
            <div class="page-content-numbers">
<h3>4 </h3>
</div> 
<div class="page-content-5" ><h2>Give detail</h2></div>

<div class="page-content-info">
<p1>Be specific when you’re talking through examples. Explain what the task was, what you did, problems you faced and how you succeeded.
 </p1>
 </div>
           
            <div class="page-content-numbers">
<h3>5 </h3>
</div><div class="page-content-5" > <h2>Know your strengths</h2></div>
<div class="page-content-info">
<p1>If you’re confident of your strengths and how they apply to the job you want, it’s easier to sell yourself.</p1>
 </div>
           
            <div class="page-content-numbers">
<h3>6 </h3>
</div> <div class="page-content-5" ><h2>Be honest</h2></div>
<div class="page-content-info">
<p1>Never lie in a job interview. It’s too easy to get caught out.</p1>
 </div>
           
            <div class="page-content-numbers">
<h3>7 </h3>
</div> <div class="page-content-5" ><h2>Ask questions</h2></div>
<div class="page-content-info">
<p1>This lets you find out about anything you're unsure of. It also shows that you’re interested in the job.</p1>
 </div>
           
            <div class="page-content-numbers">
<h3>8 </h3>
</div> <div class="page-content-5" ><h2>Be positive</h2></div>
<div class="page-content-info">
<p1>Use positive language, and talk yourself up. Show you’re enthusiastic about the position and your own career.</p1>
 </div>
           
            <div class="page-content-numbers">
<h3>9 </h3>
</div> <div class="page-content-5" ><h2>Don’t dwell on it</h2></div>
<div class="page-content-info">
<p1>Try not to fixate on things you wish you had or hadn’t said.</p1> 
 </div>
           
            <div class="page-content-numbers">
<h3>10 </h3>
</div> <div class="page-content-5" ><h2>Look over your CV</h2></div>
<div class="page-content-info">
<p1>Interviews put you under pressure and can make you forget important things. Be ready to talk about your experience, achievements and qualifications.</p1>
 </div>

<br>
<p2>Interview tips information sourced from: https://www.myworldofwork.co.uk/getting-job/interviews </p2>
            <br>
            
        
         </div>
    </body>
</html>