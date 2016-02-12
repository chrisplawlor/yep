<?php 

include("job_matches.php");
	     
$counterTitle = 1;
$counterType = 1;
$counterLocation = 1;
$counterSalary = 1;
$counterCategory = 1;
$counterDescription = 1;


    
$match_title1 = mysql_real_escape_string($_POST['job_title'.$counterTitle]);
$counterTitle++;
$match_title2 = mysql_real_escape_string($_POST['job_title2']);
             
$match_type1 = mysql_real_escape_string($_POST['job_type1']);
$match_type2 = mysql_real_escape_string($_POST['job_type2']);
             
$match_location1 = mysql_real_escape_string($_POST['location1']);
$match_location2 = mysql_real_escape_string($_POST['location2']);

$match_salary1 = mysql_real_escape_string($_POST['salary1']);
$match_salary2 = mysql_real_escape_string($_POST['salary2']);

$match_category1 = mysql_real_escape_string($_POST['job_category1']);
$match_category2 = mysql_real_escape_string($_POST['job_category2']);
             
$match_description1 = mysql_real_escape_string($_POST['job_description1']);
$match_description2 = mysql_real_escape_string($_POST['job_description2']);


if(isset($_POST['yes1']))
 {
 
    $sql = mysql_query("INSERT  INTO `job_matches` (`matched_title`, `matched_type`, `matched_location`, `matched_salary`, `matched_category`, `matched_description`, `matched_username`) 
				VALUES ('{$match_title1}', '{$match_type1}', '{$match_location1}', '{$match_salary1}', '{$match_category1}', '{$match_description1}', '{$username}')");
			 $result = mysql_query($sql);
	
$result="mysql_query($sql) or die (mysql_error())";
        
    }
    if(isset($_POST['yes2'])) {


    $sql = mysql_query("INSERT  INTO `job_matches` (`matched_title`, `matched_type`, `matched_location`, `matched_salary`, `matched_category`, `matched_description`, `matched_username`) 
				VALUES ('{$match_title2}', '{$match_type2}', '{$match_location2}', '{$match_salary2}', '{$match_category2}', '{$match_description2}', '{$username}')");
			 $result = mysql_query($sql);
	
$result="mysql_query($sql) or die (mysql_error())";
        
    
}
?>