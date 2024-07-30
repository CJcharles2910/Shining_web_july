<?php
session_start();
include('includes/config.php');

if(isset($_POST['resetpwd']))
  {
$uname=$_POST['username'];
$mobile=$_POST['mobileno'];
$newpassword=md5($_POST['newpassword']);
$sql =mysqli_query($con,"SELECT ID FROM tbladmin WHERE userName='$uname' and MobileNumber='$mobile'");
$rowcount=mysqli_num_rows($sql);

if($rowcount >0)
{
$query=mysqli_query($con,"update tbladmin set Password='$newpassword' where userName='$uname' and MobileNumber='$mobile'");
if($query){
echo "<script>alert('Your Password succesfully changed');</script>";
echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
}else {
echo "<script>alert('Email id or Mobile no is invalid');</script>"; 
}
}}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Page</title>
    <link rel="stylesheet" href="forgot.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1>Shining Star Ministries</h1>
            <form action="login.php" method="post">
                <!-- <label for="email">Email</label> -->
                <input type="text" id="email" placeholder="UserName" name="username"  required>
                
                <label for="mobile">Mobile Number</label>
                <input type="text" id="mobile" placeholder="Mobile Number" name="mobileno"  required>
                
                <label for="new-password">New Password</label>
                <input type="password" name="new_password" placeholder="New Password" name="newpassword" id="newpassword"required>
                
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm_password" placeholder="Confirm Password" required>
                <!-- <button type="submit" class="btn btn-primary btn-block" name="resetpwd">Reset</button> -->
                <input type="submit" value="RESET" class="btn-reset" name="resetpwd">
            </form>
            <a href="login.php" class="login-link">Back</a>
        </div>
    </div>
</body>
</html>