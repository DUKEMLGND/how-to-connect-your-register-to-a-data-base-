 <!DOCTYPE html>
<html>

<head>
	<title>Register page</title>
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
if(isset($_POST['submit']))
{    
  $Surname = $_POST['Surname'];
  $First_Name = $_POST['First_Name'];
  $Last_Name = $_POST['Last_Name'];
  $Student_Email = $_POST['Student_Email'];
  $Registration_Number = $_POST['Registration_Number'];
  $Department = $_POST['Department'];
  $course = $_POST['course'];
  $new_password = $_POST['new_password'];
  $new2_password = $_POST['new2_password'];

     $sql = "INSERT INTO student_details (Surname,First_Name,Last_Name,Student_Email,Registration_Number,Department,course,new_password,new2_password)
     VALUES ('$Surname','$First_Name','$Last_Name','$Student_Email','$Registration_Number','$Department','$course',' $new_password',' $new2_password')";
     if (mysqli_query($conn, $sql)) {
        echo "You have registered  successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>

<h1>
   you have registered ur account,<br> note that an email <br>will be sent to you shortly
</h1>
</body>
</html>