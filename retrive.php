<!DOCTYPE html>
<html>

<head>
	<title>logedin</title>
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
        // session_start();
        // $error="";
     
        // if($_SERVER["REQUEST_METHOD"] == "POST") {
        //    // username and password sent from form 
           
        //    $Registration_Number = mysqli_real_escape_string($db,$_POST['Registration_Number']);
        //    $new_password = mysqli_real_escape_string($db,$_POST['new_password']); 
           
        //    $sql = "SELECT * FROM student_details WHERE Registration_Number = '$Registration_Number' and new_password = '$new_password'";
        //    $result = mysqli_query($db,$sql);
        //    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        //  //   $active = $row['Status'];
        //    $count = mysqli_num_rows($result);
           
        //    // If result matched $myusername and $mypassword, table row must be 1 row
         
        //    if($count == 1) {
        //       //session_register("myusername");
        //       $_SESSION['surname'] = $row['First_Name']. " ".$row['Last_Name'];
        //       $_SESSION['login_user'] = $Registration_Number;
              
        //       //redirect to dashboard
        //       header("Location:retrive.php");
        //    }else {
        //      //redirect to index page
        //       $error = "Your Email Address or Password is invalid";
        //    }
        // } else{
        //    $error = "Please try logging in again";
        // }

       ?>
        <h1> you have been loged in enjoy the day</h1>
        </body>
        </body>