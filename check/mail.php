<?php
session_start();

$error = array();

$errflag = false;

if(empty($_POST['email'])){
    $error[] = 'Your email id missing';
    $errflag = true;
}
else{
    if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['email'])) {
           //regular expression for email validation
            $email = $_POST['e-mail'];
        } else {
             $error[] = 'Your EMail Address is invalid  ';
             $errflag = true;
        }
}

date_default_timezone_set('UTC');
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$college = $_POST['college'];
$ToEmail = 'kunalgaurav18@gmail.com';
$Subject = 'Avenir 2013 registration form';
$Subject1 = 'Registration Successful';

if($email==''){
    $error[] = 'Email id missing';
    $errflag = true;
}

if($name==''){
    $error[] = 'Your name missing';
    $errflag = true;
}

if($mobile==''){
    $error[] = 'Your mobile no. missing';
    $errflag = true;
}

if($college==''){
    $error[] = 'Your college name missing';
    $errflag = true;
}

if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $error;
		session_write_close();
		header("location: homepage.php");
		exit();
	}

$Message = 'Name: ' . $name .'\nEmail: ' . $email . '\nMobile: ' . $mobile . '\nCollege: ' .$college; 
$Message1 = $Message;
$Message1 .= '\nIn case you need to change anything just reply to this mail. Thanks for registering!! See you at the NSEC campus';
        
$headers .= "Content-type: text; charset=iso-8859-1\r\n";
$headers .= "From:".$name." / ".$email."\r\n";

$headers1 .= "Content-type: text; charset=iso-8859-1\r\n";
$headers1 .= "From: Avenir 2013"." / ".$ToEmail."\r\n";

if(mail($ToEmail,$Subject,$Message, $headers) && mail($email,$Subject1,$Message1,$headers1))
header('location:homepage.php?mailed=success');
else
    echo 'error occured';



?>