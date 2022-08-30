<!DOCTYPE html>
<html>

<head>
	<title>reset password</title>
	<link rel="stylesheet" href="mystyle.css">
</head>

<body bgcolor="#1eb3b3">
   

	<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "my_db1";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
        echo "conected";

       ?>
        <h1> you have been loged in enjoy the day</h1>
        </body>
        </body>