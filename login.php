<?php

$dbhost = "localhost";
$dbuser = "web";
$dbpass = "passworduser";
$dbname = "eventsite";
$db = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die("cannot connect"); 

 
mysqli_select_db($db, $dbname) or die("cannot select DB");

$email =      $_POST ['email'];
$password =           $_POST ['password'];

$login_ok = false;

///CHECK IF ACCOUNT IS IN DATABASE
// http://forums.devshed.com/php-faqs-stickies-167/program-basic-secure-login-system-using-php-mysql-891201.html

$query = 
"SELECT * FROM students
 WHERE 'email' = '$email'";




$result = mysqli_query($db, $query);

if(mysqli_num_rows($result)){
	$login_ok = true;
}

echo $login_ok;


// header("Location: loginBootstrap.html"); 
            //die("Redirecting to: loginBootstrap.html");
Echo "Database Saved"; 
mysqli_close($db);

?>