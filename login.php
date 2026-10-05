<?php
// Optional: Add session check or redirection if user is already logged in
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - MovieMate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #141e30, #243b55);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.05);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.18);
            width: 350px;
            text-align: center;
        }

        .login-container h2 {
            color: #ffffff;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0;
            border: none;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
        }

        .login-container input[type="submit"] {
            width: 100%;
            padding: 12px 15px;
            margin-top: 20px;
            border: none;
            border-radius: 10px;
            background-color: #00c6ff;
            background-image: linear-gradient(45deg, #00c6ff, #0072ff);
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .login-container input[type="submit"]:hover {
            background-image: linear-gradient(45deg,rgb(110, 112, 115), #00c6ff);
        }

        .login-container p {
            margin-top: 20px;
            color: #ccc;
            font-size: 0.9em;
        }

        .login-container a {
            color: #00c6ff;
            text-decoration: none;
        }

        .login-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login to MovieMate</h2>
    <form action="authenticate.php" method="post">
        <input type="text" name="username" placeholder="Username or Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
    </form>
    <p>Don't have an account? <a href="register.php">Sign up</a></p>
</div>

</body>
</html>
