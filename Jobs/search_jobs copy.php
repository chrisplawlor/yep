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
            <link type = "text/css" href ="search_jobs.css" rel = "stylesheet" >
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
            
			<li><a href="#"><img src="../Images/prep.png" style="width:11%; height:4.8%;" ><h9>PREPARATION</h9></a>
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
			<li><a href="../Jobs/search_jobs.php"><img src="../Images/search_on.png" style="width:11%; height:4.8%;" ><h9>SEARCH JOBS</h9></a></li>
			<li><a href="../Diary/diary.php"><img src="../Images/diary_icon.png" style="width:10%; height:4.8%;" > <h9>MY DIARY</h9></a></li>
			<li><a href="../My_Preferences/my_preferences.php"><img src="../Images/settings.png" style="width:11%; height:4.3%;" ><h9>MY PREFERENCES</h9></a></li>
			<li><a href="../Log Out/logout.php"><img src="../Images/logout.png" style="width:11%; height:4.8%;" ><h9>LOG OUT</h9></a></li>
			
                    </ul>
                
                    
                </div>
                
              <body>
            <div  class="page-content">
           <h3>Search Jobs</h3>
  </div>

            <div  class="page-content-2">

<form name="form" method="post" action="search_results.php">
    <h4> Keyword <br> <input name="search" type="text" /></h4>
	<h4> Type of Job <select name="job_type" >
	<option>Any job type </option>
  <option value="Permanent">Permanent</option>
    <option value="Contract">Contract</option>
  <option value="Part Time">Part Time</option>
  <option value="Temporary">Temporary</option>
  <option value="Volunteer Work">Volunteer Work</option>
  </select></h4><br>
  <h4>  Category <select name="category_name">
		<option value="All Categories">All Categories</option>
  <option value="Accounting">Accounting</option>
  <option value="Admin">Admin</option>
  <option value="Automotive">Automotive</option>
  <option value="Banking">Banking</option>
  <option value="Biotech">Biotech</option>
  <option value="Broadcast">Broadcast</option>
  <option value="Business Development">Business Development</option>
  <option value="Construction">Construction</option>
  <option value="Customer Service">Customer Service</option>
  <option value="Design">Design</option>
  <option value="Distribution">Distribution</option>
  <option value="Education">Education</option>
  <option value="Engineering">Engineering</option>
  <option value="Facilities">Facilities</option>
  <option value="Finance">Finance</option>
  <option value="Franchise">Franchise</option>
  <option value="General Business">General Business</option>
  <option value="General Labor">General Labor</option>
  <option value="Government">Government</option>
  <option value="Health Care">Health Care</option>
  <option value="Hospitality">Hospitality</option>
  <option value="Human Resources">Human Resources</option>
  <option value="Information Technology">Information Technology</option>
  <option value="Maintenance/Repair">Maintenance/Repair</option>
  <option value="Insurance">Insurance</option>
  <option value="Legal">Legal</option>
  <option value="Management">Management</option>
  <option value="Manufacturing">Manufacturing</option>
  <option value="Marketing">Marketing</option>
  <option value="Media">Media</option>
  <option value="Nurse">Nurse</option>
  <option value="Other">Other</option>
  <option value="Pharmaceutical ">Pharmaceutical</option>
  <option value="Quality Control">Quality Control</option>
  <option value="Real Estate">Real Estate</option>
  <option value="Research">Research</option>
  <option value="Restaurant">Restaurant</option>
<option value="Retail">Retail</option>
  <option value="Sales">Sales</option>
  <option value="Science">Science</option>
<option value="Skilled Labor">Skilled Labor</option>
  <option value="Strategy">Strategy</option>
  <option value="Supply Chain">Supply Chain</option>
<option value="Telecommunications">Telecommunications</option>
  <option value="Training">Training</option>
  <option value="Transportation">Transportation</option>
<option value="Volunteer Work">Volunteer Work</option>
  <option value="Warehouse">Warehouse</option>  
      </select><br></h4>
	<h4>Location <br><input name="location" type="text" /></h4>

    <h7><input type="submit" name="submit" value="Search" /></h7>


</form>
</div>
        </div>
        
         </div>
    </body>
</html>