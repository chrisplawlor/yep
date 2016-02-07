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
            <link type = "text/css" href ="home.css" rel = "stylesheet" >
            <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<link rel="icon" href="../Images/Icon.png">
<link rel="apple-touch-icon"  href="../Images/Icon.png">
<link rel="apple-touch-icon-precomposed" href="../Images/Icon.png">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Hobbies',     12.5],
          ['Ambitions',      12.5],
          ['Money',  12.5],
          ['Health', 12.5],
          ['Housing',    12.5],
          ['Social',    12.5],
          ['Education',    12.5],
          ['Skills',    12.5]
        ]);

        var options = {
          //title: 'My Daily Activities'
          colors: ['#e0440e', '#25a851', '#25a851', '#e0440e', '#e0440e'],
          backgroundColor: '#5d6d7f',
 chartArea:{left:16,top:20,width:"90%",height:"90%"},          
 legend: 'none',
        pieSliceText: 'label',
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
   </head>

   
        <input type="checkbox"  id="sidebartoggler" name ="" value=""> 
        
        <div class="page-wrap">
            <div class ="headbar">  <h1>YeP</h1> </div>
            <label for="sidebartoggler" class ="toggle" >☰</label> 
             <div class="sidebar">
             
            <ul>          
            <li><a href="../Home/home.php"><img src="../Images/home_on.png" style="width:9%; height:4.3%;" > <h9>HOME</h9></a></li>
            
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
			<li><a href="../Jobs/jobs.php"><img src="../Images/match.png" style="width:11%; height:4.8%;" ><h9>JOB MATCHES</h9></a></li>
			<li><a href="../Jobs/search_jobs.php"><img src="../Images/search.png" style="width:11%; height:4.8%;" ><h9>SEARCH JOBS</h9></a></li>
			<li><a href="../Diary/diary.php"><img src="../Images/diary_icon.png" style="width:10%; height:4.8%;" > <h9>MY DIARY</h9></a></li>
			<li><a href="../My_Preferences/my_preferences.php"><img src="../Images/settings.png" style="width:11%; height:4.3%;" ><h9>MY PREFERENCES</h9></a></li>
			<li><a href="../Log Out/logout.php"><img src="../Images/logout.png" style="width:11%; height:4.8%;" ><h9>LOG OUT</h9></a></li>
			
                    </ul>
                
                    
                </div>
                
                <body>
            <div class="page-content">
           <h3>Youth Employment App</h3>
           </div>
                       <div class="page-content-2">

           <h3>Your Progress</h3>
           </div>
                       
        <div class="page-content-3">
    <?php
        
        	$username = $_SESSION['username']; 

	$connection = mysql_connect("devweb2014.cis.strath.ac.uk", "pkb12170", "couslyti");
	mysql_select_db("pkb12170",$connection);
	$sql = "SELECT * FROM user WHERE username = '$username' ";
	
	$myData = mysql_query($sql, $connection);


	if($record = mysql_fetch_array($myData)) {
	?>
	<div class="name"> <h5> <?php echo $record['first_name'] . " " .  $record['last_name']; ?> </h5></div>
<div class="level"> <h6> Level </h6></div>
 <div class="level-number"> <h3> <?php echo $record['level_number']; ?> </h3></div>
 
 <?php
	}
		

	mysql_close($connection);
	
        
        ?>
        
    <div class="piechart" id="piechart" style="width: 100%; height: 60%;"></div>
<div class="overall1">
        
        </div>
        
        <div class="overall2">
        
        </div>
        
        <div class="overall3">
        
        </div>
</div>
        




</div>
        
    </body>
</html>