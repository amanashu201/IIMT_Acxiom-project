<?php
session_start();
if (isset($_SESSION['user'])) {
    header("Location: user_homepage.php");
    exit();
} elseif (isset($_SESSION['admin'])) {
    header("Location: admin_homepage.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            text-align: center;
            margin-top: 100px;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 300px;
            margin: auto;
            padding: 20px;
            border: 1px solid black;
        }
        input, button {
            width: 100%;
            margin: 5px 0;
            padding: 8px;
        }
        .role-options {
            display: flex;
            justify-content: space-between;
        }
        .role-options label {
            flex: 1;
            text-align: center;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Login</h2>

        <form method="POST" action="login.php">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>

            <div class="role-options">
                <input type="radio" id="user" name="role" value="user" required>
                <label for="user">User</label>

                <input type="radio" id="admin" name="role" value="admin">
                <label for="admin">Admin</label>
            </div>

            <button type="submit">Login</button>
        </form>

        <p>Don't have an account? <a href="./register.php">Register</a></p>
    </div>

</body>

</html>
