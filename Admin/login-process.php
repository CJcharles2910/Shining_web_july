<?php
session_start();
include('includes/config.php');
// include('includes/restrict-address.php');

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['admin'] = $username;
    header("Location: main.php");
} else {
    echo "Invalid username or password";
}

$conn->close();
?>
