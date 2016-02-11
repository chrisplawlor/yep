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
            <link type = "text/css" href ="cv_tips.css" rel = "stylesheet" >
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
			<li><a href="../Jobs/jobs.php"><img src="../Images/match.png" style="width:11%; height:4.8%;" ><h9>MY JOBS</h9></a></li>
			<li><a href="../Jobs/search_jobs.php"><img src="../Images/search.png" style="width:11%; height:4.8%;" ><h9>SEARCH JOBS</h9></a></li>
			<li><a href="../Diary/diary.php"><img src="../Images/diary_icon.png" style="width:10%; height:4.8%;" > <h9>MY DIARY</h9></a></li>
			<li><a href="../My_Preferences/my_preferences.php"><img src="../Images/settings.png" style="width:11%; height:4.3%;" ><h9>MY PREFERENCES</h9></a></li>
			<li><a href="../Log Out/logout.php"><img src="../Images/logout.png" style="width:11%; height:4.8%;" ><h9>LOG OUT</h9></a></li>
			
                    </ul>
                
                    
                </div>
                
                <body>
            <div id="search" class="page-content">
            <h3>CV Tips</h3>
            
            
            </div>
            
            
            <div class="page-content-numbers">
<h3>1 </h3></div>
<div class="page-content-5" >
<h2>Presentation is key</h2></div>


<div class="page-content-info">

<p1>Important factors to consider when it comes to presentation is <b>layout</b> and <b>font size</b>. A good font size would be <b>12pt</b>. Have a look at sample CVs online to give you an idea of how they are laid out.</p1>
 </div>
           
            <div class="page-content-numbers">
<h3>2 </h3>
</div><div class="page-content-5" ><h2> Tailor the CV to the role </h2></div>
<div class="page-content-info">
<p1>Change your CV each time you apply for a different job to add more specific details matching to the role.</p1>
 </div>
 
 
            <div class="page-content-numbers">
<h3>3 </h3>
</div> <div class="page-content-5" ><h2>Sensible  email addresses</h2> </div>

<div class="page-content-info">
<p1>
◉ No football<br>
◉ No nicknames<br>
◉ No hugs and kisses (xo)<br></p1>

 </div>
           
            <div class="page-content-numbers">
<h3>4 </h3>
</div> 
<div class="page-content-5" ><h2>Make the most of skills</h2></div>

<div class="page-content-info">
<p1>Highlight your skills, <b>For example:</b><br><br> ◉ Computer Programming Languages<br>
◉ Construction Certificates<br>
◉ Leadership Skills
 </p1>
 </div>
           
            <div class="page-content-numbers">
<h3>5 </h3>
</div><div class="page-content-5" > <h2>Keep your CV updated</h2></div>
<div class="page-content-info">
<p1>Regularly updating your CV is good when you have <b>acquired a new skill</b> and means you wont forget to add it later on. Also, it may mean you always have the most updated version of your CV to hand if an employer is asking for one.</p1>
 </div>
           
            <div class="page-content-numbers">
<h3>6 </h3>
</div> <div class="page-content-5" ><h2>Spelling and Grammar</h2></div>
<div class="page-content-info">
<p1>Make use of the <b>spelling and grammar tool</b> on Microsoft Word when creating or editing your CV and ask others to proof read.</p1>
 </div>
           
            <div class="page-content-numbers">
<h3>7 </h3>
</div> <div class="page-content-5" ><h2>Don't leave gaps</h2></div>
<div class="page-content-info">
<p1>Leaving gaps in your CV not only affects the presentation but that is also space for you to add more skills and experiences in.</p1>
 </div>
           
            <div class="page-content-numbers">
<h3>8 </h3>
</div> <div class="page-content-5" ><h2>Make it look good</h2></div>
<div class="page-content-info">
<p1>After you have finished a draft of your CV, have a look and make sure it is presentable. Similarly to tip #1.</p1>
 </div>
           
            <div class="page-content-numbers">
<h3>9 </h3>
</div> <div class="page-content-5" ><h2>Check and double check</h2></div>
<div class="page-content-info">
<p1>Mistakes in your CV may discourage an employer.  It is very important to check over it thoroughly before sending it away.</p1> 
 </div>
           
            <div class="page-content-numbers">
<h3>10 </h3>
</div> <div class="page-content-5" ><h2>Feedback from Others</h2></div>
<div class="page-content-info">
<p1>It is very beneficial to give your CV to other to ask them what they think.  Its good to have someone else's opinion before you send it to the employer. </p1>
 </div>

<br>
            
            
        
         </div>
    </body>
</html>