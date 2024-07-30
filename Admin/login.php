<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Shining Star Ministries</h2>
            <form action="login-process.php" method="post" >
                <div class="textbox">
                    <!-- <label for="username">Username:</label> -->
                    <input type="text" placeholder="username" id="username" name="username" required>
                </div>
                <div class="textbox">
                    <!-- <label for="password">Password:</label> -->
                    <input type="password"  placeholder="password" id="password" name="password" required>
                </div>
                <div class="remember-forgot">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                    <a href="forgot.php" class="forgot">Forgotten Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
            </form>
            <a href="Church Project/index.php" class="home">Home Page</a>
        </div>
    </div>
</body>
</html>