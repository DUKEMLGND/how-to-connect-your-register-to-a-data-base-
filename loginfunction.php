<?php function check_login($){

}
$id = $_SESSION['Registration_Number'];
$query = "select from student_details where Registration_Number = '$id' limit 1";
$result= mysqli_query($con,$query);
if($result && mysqli_num_rows($result) > 0)
{
$user_data = mysqli_fetch_assoc($result);
return $user_data;
}
// redirect to login
header("Location: login.php");{
die;
}