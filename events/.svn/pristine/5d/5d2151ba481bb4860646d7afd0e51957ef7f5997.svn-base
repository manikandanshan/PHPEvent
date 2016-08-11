<?PHP
// PHP variable to store the host address
	$db_host  = "localhost";
// PHP variable to store the username
	$db_uid  = "root";
// PHP variable to store the password
	$db_pass = "";
// PHP variable to store the Database name  
	$db_name  = "student"; 
$db_con = mysql_connect($db_host,$db_uid,$db_pass) or die('could not connect');
 mysql_select_db("student",$db_con);
 //This code runs if the form has been submitted 
 
 $result = mysql_query("SELECT email FROM studentdetails WHERE training = 'i' AND training = 'p' AND training = 'r'",$db_con) 
 or die(mysql_error());
 //$check2 = mysql_num_rows($result);
 //echo  $check2;
 while ($row = mysql_fetch_assoc($result)) {
    echo $row['email'];
	}

?>
