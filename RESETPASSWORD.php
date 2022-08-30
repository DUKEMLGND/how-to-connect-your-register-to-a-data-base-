<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resetPassword</title>
    <link rel="stylesheet" href="customStyle/customStyles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
    <div class="row align-items-center">
      <div id="loginPageImage" class="col" style="background-image: url('images/loginBg.jpg'); background-size:cover;">
      <p></p>
      </div>
      <div id="loginPageForm" class="col p-5" >
        <div>
            <img src="images/logo.png" alt="Kirinyaga University Logo" style="width:240px; height:auto;">
            <h1>Password Reset</h1>
        </div>
        <form action="reset" method="get">
            <div class="mb-3">
                <label for="regNoInput" class="form-label">Student Email</label>
                <input type="text" name="regNoInput" class="form-control" id="regNoInput">
            </div>
            <button type="submit" name="loginButton"  class="btn btn-primary text-lg">Reset Password</button>
            <button type="submit" name="resetPassword" class="btn btn-secondary btn-link text-lg"></button>
        </form>
        <DIV >
            <a href="index.php" target="_self">Return to login page</a>  
        </DIV>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>