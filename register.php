<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Here</title>
    <link rel="stylesheet" href="customStyle/customStyles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
    <div class="row align-items-center">
      <div id="loginPageImage" class="col" style="background-image: url('images/loginBg.jpg'); background-size:cover;">
      <p></p>
      </div>
      <div id="loginPageForm" class="col p-2" >
        <div>
            <img src="images/logo.png" alt="Kirinyaga University Logo" style="width:240px; height:auto;">
            <h1>Register Here</h1>
        </div>
        <form action="insert.php" method="post">
            <div class="input-group mb-2">
            <div class="mb-3">
                <label for="Surname" class="form-label"><h5>Surname</h5></label>
                <input type="text" name="Surname" class="form-control" id="Surname">
            </div><div class="mb-3">
                <label for="FirstName" class="form-label"><h5>First Name</h5></label>
                <input type="text" name="First_Name" class="form-control" id="First_Name">
            </div><div class="mb-3">
                <label for="Lastname" class="form-label"><h5>Last name</h5></label>
                <input type="text" name="Last_Name" class="form-control" id="Last_Name">
            </div>
        </div>
        <div class="input-group mb-2"><div class="col-md-6">
                <label for="StudentEmail" class="form-label"><h5>Student Email</h5></label>
                <input type="email" name="Student_Email" class="form-control" id="StudentEmail">
            </div><div class="mb-3"> 
                &nbsp;<label for="Registration_Number" class="form-label"><h5>Registration Number</h5></label>
                &nbsp;<input type="text" name="Registration_Number" class="form-control" id="Registration_Number">
                </div>
    </div>
        <h5>Department</h5>
            <div class="input-group mb-3">
                
                <select class="form-select" aria-label="Default select example" name="Department" >
                    <option selected value="">Computer Science</option>
                    <option value="Education">Education</option>
                    <option value="Constraction">Constraction</option>
                    <option value="Helth Science">Helth Science</option>
                  </select>
                  
                
                &nbsp; &nbsp; 
                
                <select class="form-select" aria-label="Default select example" name="course">
                    <option selected value="">Information Technology </option>
                    <option value="Software Engineering">Software Engineering</option>
                    <option value="computer Engineering">computer Engineering</option>
                    <option value="Electronics">Electronics</option>
                  </select>
                <!-- <input type="text" name="regNoInput" class="form-control" id="regNoInput"> -->
            </div>
            <br>
            <div class="input-group mb-3"><div class="col-md-3">
                <label for="Newpassword" class="form-label"><h5>New password</h5></label>
                <input type="password" name="new_password" class="form-control" id="passwordInput">
            </div><div class="mb-3"> 
                <label for="new_password" class="form-label"><h5>Confirm New password</h5></label>
                <input type="password" name="new2_password" class="form-control" id="passwordInput">
            </div>
    </div>
            
    
             
            <button type="submit" name="submit"  class="btn btn-primary text-lg">Submit Details</button><br><br>
           <p> Have a student account <a href="index.php" target="_self"> login here</a>  <!--<button type="submit" name="loginButton" class="btn btn-secondary btn-link text-lg">Login Here</button><i link href="#index"></i>  -->
        </form>
      </div>
    </div>
</div>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>