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
            <link type = "text/css" href ="my_advisor.css" rel = "stylesheet" >
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
			
			<li><a href="../My_Advisor/my_advisor.php"  ><img src="../Images/chat_on.png" style="width:11%; height:4.8%;" ><h9>MY ADVISOR</h9></a></li>
			<li><a href="../Jobs/jobs.php"><img src="../Images/match.png" style="width:11%; height:4.8%;" ><h9>MY JOBS</h9></a></li>
			<li><a href="../Jobs/search_jobs.php"><img src="../Images/search.png" style="width:11%; height:4.8%;" ><h9>SEARCH JOBS</h9></a></li>
			<li><a href="../Diary/diary.php"><img src="../Images/diary_icon.png" style="width:10%; height:4.8%;" > <h9>MY DIARY</h9></a></li>
			<li><a href="../My_Preferences/my_preferences.php"><img src="../Images/settings.png" style="width:11%; height:4.3%;" ><h9>MY PREFERENCES</h9></a></li>
			<li><a href="../Log Out/logout.php"><img src="../Images/logout.png" style="width:11%; height:4.8%;" ><h9>LOG OUT</h9></a></li>
			
                    </ul>
                
                    
                </div>
                
                <body>
            <div class="page-content">
			<h3>My Advisor</h3>            
            
            <br><br><br><br><br><br><br><br>
        <?php

$connection = mysql_connect("devweb2014.cis.strath.ac.uk", "pkb12170", "couslyti");
	mysql_select_db("pkb12170",$connection);
	
	
	function get_msg() {
	
	$query = "SELECT * FROM chat";
	
	$run = mysql_query($query);
	
	$messages = array();
	
	while($message = mysql_fetch_assoc($run)) {
		$messages[] = array('sender'=>$message['sender'],
							'message'=>$message['message']);
							}
							
							return $messages; 
	
	}  

        //User in session name is set to the sender
          $_POST['sender'] = $_SESSION['username']; 
           
	function send_msg($sender, $message) {
	
	 if(!empty($sender) && !empty($message)) {
	 
	 $sender = mysql_real_escape_string($sender);
	 $message = mysql_real_escape_string($message);
	 
	 $query = "INSERT INTO chat VALUES (null, '{$sender}','$message')";
	 
	 if($run = mysql_query($query)) {
	 return true;
	 } else {
	 return false;
	 }
	 }
	
	else{
	return false;
	} 
	}
	
	
	if(isset($_POST['send'], $_POST['message'])) {
		if(send_msg($_POST['sender'], $_POST['message'])) {
			echo 'Message Sent.';
			}
			else {
			echo 'Message Failed to send.';
			}
			}
?>
<div class="messages">

<?php

$messages = get_msg();
foreach($messages as $message) {
?> <h5> <?php echo $message['sender'].'<br />';?></h5>

<p5>
<?php
echo $message['message'].'<br /><br />';
}
?>
</p5>
</div>


<div class="enter-message" >
<form action="my_advisor.php" method="post" >
<input type="text" name="message" /></div>
<div class="send-button" ><input type="submit" name="send" value="Send" />
</form>
</div>
    </body>
</html>