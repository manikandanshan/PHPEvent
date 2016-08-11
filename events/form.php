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
 include 'nameverification.php';
session_start();

 if (isset($_POST['submit'])) 
 {
 extract($_POST); 	
 if (!$_POST['name'] |  (!isset($_POST['gender']))| (!isset($_POST['training'])) |!$_POST['branch'] 
	|!$_POST['branch'] |  !$_POST['academicyear'] | !$_POST['mark'] |!$_POST['mm'] |
	!$_POST['dd'] | !$_POST['yy'] |  !$_POST['university'] | !$_POST['address'] 
	|!$_POST['email'] | !$_POST['mobile'] | !$_POST['resume'] | !$_POST['6_letters_code'] ) 
	
 { 
 	//	die('You did not complete all of the required fields');
		//$message = "You did not complete all of the required fields";
		//echo "<script type='text/javascript'>alert('$message');</script>";		
		//window.location.href='form.php';		
		echo "<script>			
		window.location.href='form.php';
		</script>";
		return false;
  }
  
  
 // checks if the username is in use
 	//if (!get_magic_quotes_gpc()) 
	//{
 		//$_POST['email'] = addslashes($_POST['email']);
		///echo $_POST['email'];
 	//}
 //$usercheck = $_POST['email'];
 ///echo "usercheck" . $usercheck;
 //$check = mysql_query("SELECT email FROM studentdetails WHERE email = '$usercheck'",$db_con) 
// or die(mysql_error());
 //$check2 = mysql_num_rows($check);

 //if the name exists it gives an error
// if ($check2 != 0) 
 //{ 
 		//die('Sorry, the email '.$_POST['email'].' is already in use.');
		//echo "<script>
		//alert('Sorry, the email entered is already in use.');
		//window.history.back();	
		//</script>";
		//return false;
 //}
 	extract($_POST);
	$dob=$yy."-".$mm."--".$dd;	
	echo $_POST['dob'];
	
	$insert = "INSERT INTO studentdetails (name, gender, training, branch, academicYear, 
			   marks, university, dob, 	address, email, mobile, resume, registrationDate)
 			VALUES ('".$_POST['name']."', '".$_POST['gender']."', '".$_POST['training']."',
			'".$_POST['branch']."','".$_POST['academicyear']."','".$_POST['mark']."',
			'".$_POST['university']."', '$dob', '".$_POST['address']."',
			'".$_POST['email']."', '".$_POST['mobile']."', '".$_POST['resume']."', now())";
 	$add_member = mysql_query($insert);
	$toaddress = $_POST['email'];
	$name = $_POST['name'];
	SendUserConfirmationEmail($toaddress, $name);	
 	?>	
	
	
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
</script>
 <h2>Registration successful</h2>
 <h3 id ="successmessage"> Thank you for registering! A confirmation email has been sent to your email address. 
 Please check your registered email address and complete the registration 
 </h3>
<style>
#successmessage {
    color: green;
    text-align: top;
}
</style>

 <?php 
 } 
 else 
 {	
 ?>
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registration Form</title>
 <link href="style.css" rel="stylesheet" type="text/css" />
 
<script language='JavaScript' type='text/javascript'>
function refreshCaptcha(){
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js">
</script>

<script type="text/javascript" src="scripts/formpage_validator.js">
</script>

</head>
 <h1>Training Registration</h1>
 <link rel="stylesheet" type="text/css" href="style.css">
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

 <table  id = name border="2">
 
<tr><td>NAME:</td><td>
	<input id= "fullname" type="text" pattern="[A-Z,a-z]*"  name="name" maxlength="20">
	<span style="float:right"> 
	<p id= "fullnamemessage" type="hidden"  </p></span>           
</td></tr> 
 
<tr><td>GENDER:</td>
 <td>
	Male<input id = "gendervalidation" type="radio" name="gender" value="m"/><br>
	Female<input id = "gendervalidation" type="radio" name="gender" value="f"/>
	<span style="float:right"> 
	<p id= "gendervalidationmessage" type="hidden"  </p></span>   
 </td>
</tr>
 
<tr><td>TRAINING:</td>
 <td>
	Internship<input id = "trainingvalidation" type="radio" name="training" value="i"/><br>
	Academic Project<input id = "trainingvalidation" type="radio" name="training" value="p"/><br>
	Ready to deploy programme<input id = "trainingvalidation" type="radio" name="training" value="r"/>
	<span style="float:right"> 
	<p id= "trainingmessage" type="hidden"  </p></span>  
 </td>
</tr>
 
<tr><td>BRANCH:</td><td> 
    <input id = "branch" type="text" pattern="[A-Z,a-z,-]*"  placeholder="BE-ECE" name="branch" maxlength="60">
	<span style="float:right"> 
	<p id= "branchmessage"  </p></span> 
</td></tr>

<tr><td>YEAR:</td><td>
    <input id = "year" type="text" pattern="[0-9]*" name="academicyear" maxlength="4">
	<span style="float:right"> 
	<p id= "yearmessage" type="hidden"  </p></span>
</td></tr>

<tr><td>MARKS:</td><td> 
    <input id = "marks"  type="text" placeholder="70.00" name="mark" maxlength="5">
	<span style="float:right"> 
	<p id= "marksmessage" type="hidden"  </p></span>
</td></tr>

<tr><td>UNIVERSITY:</td><td> 
    <input id = "university" type="text" pattern="[A-Z,a-z]*" name="university" maxlength="60">
	<span style="float:right"> 
	<p id= "universitymessage" type="hidden"  </p></span>
</td></tr>

<tr><td>DOB: <td>
						<input type="date" data-date-inline-picker="true" value="" id="dob" name="dob" >		
					

<tr><td>DOB: <td>
		<select id= "dobmm" name="mm">
			<option value="">Month</option>
			<?php 
			for($i=1;$i<=12;$i++)
			{
			echo "<option value='$i'>".$i."</option>";
			}
			?>
		</select>		
		<select id="dobdd" name="dd">
			<option value="">Date</option>
			<?php 
			for($i=1;$i<=31;$i++)
			{
			echo "<option value='$i'>".$i."</option>";
			}
			?>
		</select>		
		<select id="dobyy" name="yy">
			<option value="">Year</option>
			<?php 
			for($i=1980;$i<=2000;$i++)
			{
			echo "<option value='$i'>".$i."</option>";
			}
			?>
		</select>
		
		<span style="float:right"> 
		<p id= "dobmessage" type="hidden"  </p></span>
</td></tr> 
 
<tr><td>ADDRESS:<td><textarea  id= "address" name="address" rows="4" cols="40"></textarea>
	<span style="float:right"> 
	<p id= "addressmessage" type="hidden"  </p></span>
</td> </tr>
 
 
<tr><td>EMAIL:</td><td> 
    <input id = "email" type="email" name="email" maxlength="60">
	<span style="float:right"> 
	<p id= "emailmessage" type="hidden"  </p></span>
</td></tr>

<tr><td>MOBILE:</td><td>
    <input  id = "mobilenum" type="text" pattern="[0-9]*" name="mobile" maxlength="10" />
	<span style="float:right"> 
	<p id= "mobilenummessage" type="hidden"></p></span>
</td></tr>
 
<tr><td>RESUME:<td><textarea id= "resume"name="resume" rows="4" cols="40"></textarea>
	<span style="float:right"> 
	<p id= "resumemessage" type="hidden"> </p></span>
</td> </tr>
 
<tr>
<td align="right" valign="top">ENTER CAPTCHA:</td>
      <td><img src="captcha_code_file.php?rand=<?php echo rand();?>" id='captchaimg'><br>
        
        <br>
        <input id="6_letters_code" name="6_letters_code" type="text">
		<span style="float:right"> 
		<p id= "captchamessage" type="hidden"> </p></span>
        <br>
        Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.</td></tr>
 
 <tr> <td colspan="3" align="center">
	<input id = "button"  type="submit" name="submit" value="Register" />	
	</td></tr> </table>
</form>
 
 
 
 <?php
 } 
function SendUserConfirmationEmail($toaddress, $name){

require_once 'PHPMailerAutoload.php'; 
$mail = new PHPMailer; 
$mail->isSMTP();                                      // Set mailer to use SMTP
///$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
$mail->Host = 'mail.guruits.com';                       // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'chanthinibegam.thajudeen@guruits.com';                   // SMTP username
$mail->Password = 'welcome123';               // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
$mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
///$mail->setFrom('amit@gmail.com', 'Amit Agarwal');     //Set who the message is to be sent from
$mail->setFrom('chanthinibegam.thajudeen@guruits.com');     //Set who the message is to be sent from
///$mail->addReplyTo('labnol@gmail.com', 'First Last');  //Set an alternative reply-to address
///$mail->addAddress('josh@example.net', 'Josh Adams');  // Add a recipient
///$mail->addAddress('ellen@example.com');               // Name is optional

$mail->addReplyTo('chanthinibegam.thajudeen@guruits.com', 'First Last');  //Set an alternative reply-to address
///$mail->addAddress('chanth29@gmail.com', 'chanthini');  // Add a recipient
$mail->addAddress($toaddress, $name);  // Add a recipient
///$mail->addAddress('chanth');               // Name is optional
///$mail->addCC('cc@example.com');
///$mail->addBCC('bcc@example.com');
$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
///$mail->addAttachment('/usr/labnol/file.doc');         // Add attachments
///$mail->addAttachment('/images/image.jpg', 'new.jpg'); // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
 
///$mail->Subject = 'Here is the subject';
///$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
///$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->Subject = 'Registration Confirmation';
$mail->Body    = "THANK YOU. REGISTRATION COMPLETED AND YOUR DETAILS ARE SAVED WITH US.
                  Please click the verification link to verify your registered email address.				  
				  <b><a href=\"http://www.google.com\">CLICK HERE</a></b>";
///$mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; 
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
///$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
 
if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
} 
///echo 'Message has been sent';
}
  
if(strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0){
  //----mismatch values
echo 0;
}else{
echo 1;
}
exit;
?> 