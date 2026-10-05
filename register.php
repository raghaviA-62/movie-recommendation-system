<?php
// Optional: Redirect logged-in users
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
    <title>Register - MovieMate</title>
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
            background: linear-gradient(135deg,rgb(15, 15, 15),rgb(130, 132, 135));
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .register-container {
            background-color: rgba(178, 167, 167, 0.12);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 32px 0 rgba(86, 86, 180, 0.98);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.12);
            width: 400px;
            text-align: center;
        }

        .register-container h2 {
            color: #ffffff;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .register-container input[type="text"],
        .register-container input[type="email"],
        .register-container input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0;
            border: none;
            border-radius: 10px;
            background: rgba(226, 220, 220, 0.97);
            color: #fff;
        }

        .register-container input[type="submit"] {
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

        .register-container input[type="submit"]:hover {
            background-image: linear-gradient(45deg, #0072ff, #00c6ff);
        }

        .register-container p {
            margin-top: 20px;
            color: #ccc;
            font-size: 0.9em;
        }

        .register-container a {
            color: #00c6ff;
            text-decoration: none;
        }

        .register-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="register-container">
    <h2>Create Your MovieMate Account</h2>
    <form action="register_process.php" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        <input type="submit" value="Register">
    </form>
    <p>Already have an account? <a href=".php">Login</a></p>
</div>

</body>
</html>
