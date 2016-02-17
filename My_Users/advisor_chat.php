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
            <link type = "text/css" href ="advisor_chat.css" rel = "stylesheet" >
            <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<link rel="icon" href="../Images/Icon.png">
<link rel="apple-touch-icon"  href="../Images/Icon.png">
<link rel="apple-touch-icon-precomposed" href="../Images/Icon.png">

   </head>

   
       
                
                    
                
                <body>
                
            <div class="page-content">
                
                
                 <a href="my_users.php">
			<img src="../Images/back_blue.png" style="position: absolute; top:0%; bottom:5%;left: 1%; right:5%; width:13%;height:100%;">
</a>
			<h3><?php 
$username = $_SESSION['username']; 

               $clientName = $_POST['clientName']; 
                echo $clientName;
                $clientUsername = $_POST['clientUsername']; 

                ?></h3>            
            
            <br><br><br><br><br><br><br><br>
        <?php

$connection = mysql_connect("devweb2014.cis.strath.ac.uk", "pkb12170", "couslyti");
	mysql_select_db("pkb12170",$connection);
	
	//error_reporting(0);


        	
	function get_msg() {
$username = $_SESSION['username']; 
$clientName = $_POST['clientName']; 
$clientUsername = $_POST['clientUsername']; 
        
	$query = "SELECT * FROM chat WHERE (sender = '$username' OR sender = '$clientUsername') AND (message_username = '$clientUsername' OR message_username = '$username') ";
	
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
	$username = $_SESSION['username']; 
$clientName = $_POST['clientName']; 
$clientUsername = $_POST['clientUsername'];
	 if(!empty($sender) && !empty($message)) {
	 
	 $sender = mysql_real_escape_string($sender);
	 $message = mysql_real_escape_string($message);
	 $clientUsername = mysql_real_escape_string($clientUsername);
	 $query = "INSERT  INTO `chat` (`sender`, `message`, `message_username`) 
				VALUES ('{$sender}','$message', '$clientUsername')";
	 
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
			echo '<h6>'. 'Message Sent.' . '</h6>';
			}
			else {
			echo '<h4>' . 'Message Failed to send.' . '</h4>';
			}
			}
?>
<div class="messages">

<?php

$query = "SELECT * FROM advisor WHERE username = '$username'";
    $data = mysql_query($query);
$record = mysql_fetch_assoc($data);
    
$messages = get_msg();
foreach($messages as $message) {
    
?> <h5> <?php echo $record['first_name'].'<br />';?></h5>

<p5>
<?php
echo $message['message'].'<br /><br />';
}
?>
</p5>
</div>

                
<!--<div class="enter-message" >-->
<form action="advisor_chat.php" method="post" >
<input type="text" name="message" />
          <!-- submits the client's name back to advisor_chat.php -->
    <input type="hidden" name="clientName" value="<?php echo $clientName ?>">
            
            <!-- submits the client's username back to advisor_chat.php -->
            <input type="hidden" name="clientUsername" value="<?php echo $clientUsername ?>"> 
<div class="send-button" ><input type="submit" name="send" value="Send" />
</form>
    </div>
    </body>
</html>