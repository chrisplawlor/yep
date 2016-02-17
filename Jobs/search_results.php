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
            <link type = "text/css" href ="jobs.css" rel = "stylesheet" >
            <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<link rel="icon" href="../Images/Icon.png">
<link rel="apple-touch-icon"  href="../Images/Icon.png">
<link rel="apple-touch-icon-precomposed" href="../Images/Icon.png">

   </head>

   
        <input type="checkbox"  id="sidebartoggler" name ="" value=""> 
        
           
              <body>
              
    
            <div  class="page-content">
            
            <a href="search_jobs.php">
			<img src="../Images/back_blue.png" style="position: absolute; top:0%; bottom:5%;left: 1%; right:5%; width:13%;height:100%;">
</a>
           <h3>Search Results</h3>
  </div>
               
                  

            <div  class="page-content-2">
                
                
                
<?php 
    
    
$connection = mysql_connect("devweb2014.cis.strath.ac.uk", "pkb12170", "couslyti");
mysql_select_db("pkb12170",$connection);


$search = $_POST['search'];
$category = $_POST['category_name'];
$location = $_POST['location'];
$type = $_POST['job_type'];
$counter=0;

$search_sql="SELECT * FROM job ";





//Search based on: Keyword,Job Type, Category, Location            
 if($type != "Any type" && $category != "Any category" && $location != "Any location"){
    
    $search_sql .= "WHERE (job_title LIKE '%$search%' 
OR job_description LIKE '%$search%')
AND job_type LIKE '%$type%'
                    AND category_name LIKE '%$category%' 
                    AND location LIKE '%$location%'";
}        


//Search based on: Keyword,Job Type, Category, Location            
 elseif($search != null) {
    
    $search_sql .= "WHERE (job_title LIKE '%$search%' 
OR job_description LIKE '%$search%')";
}



//Search for a location only
elseif($location != "Any location") {
    
    $search_sql .= "WHERE (job_title LIKE '%$search%' 
OR job_description LIKE '%$search%')
AND location LIKE '%$location%'";
}

//Search for a category only
elseif($category != "Any category") {
    $search_sql .= "WHERE (job_title LIKE '%$search%' 
OR job_description LIKE '%$search%')
AND category_name LIKE '%$category%'";
}

//Search for a job type only
elseif($type != "Any type") {
    $search_sql .= "WHERE (job_title LIKE '%$search%' 
OR job_description LIKE '%$search%')
AND job_type LIKE '%$type%'";
}


//Search for a job type only
elseif($type == "Any type" && $category == "Any category" && $location == "Any location"){
    $search_sql .= "WHERE job_title LIKE '%$search%";
}


$search_sql.=" ORDER BY job_title ASC";  


$myData = mysql_query($search_sql, $connection);
if(mysql_num_rows($myData)!=0) {

	while($record = mysql_fetch_array($myData)) {
	?>
	<div class="jobBox">
	
	 <a href="job_overview.php"></a>
	 
	<hr>
	<h4> <?php echo $record['job_title']; ?></h4>
	
	
	<h6><?php echo nl2br (" Location: ");?>
	<?php echo $record['location'];?></h6>
	<h6> <?php echo nl2br ("\n Salary: ")?>
	<?php echo "£" . $record['salary'];?></h6>
	<h6> <?php echo nl2br ("\n Job Type: ");?>
	 <?php echo $record['job_type'];?></h6>
     <h6> <?php echo nl2br ("\n Description: ");?>
	 <?php echo $record['job_description'];?></h6>
        
         <a href="http://<?php echo $record['apply_link'] ?>">
  <img src="../Images/apply_now.png" name="submit2" value="submit2" alt="Submit" style=" margin-left:60%; width:38%;height:5%;">
</a>
        <?php   
              $counter++;
    }
	
     echo  "No. of results: " . $counter;
		}
else {

echo "No results found";
}
	mysql_close($connection);
	?>
        <hr>
        </div>
  
        
         </div>
    </body>
</html>