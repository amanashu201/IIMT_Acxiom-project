<!DOCTYPE html>
<html lang="en">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST['user-id'];
    $password = $_POST['password'];

    // Database connection
    $conn = new mysqli('localhost', 'username', 'password', 'database');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM admin WHERE user_id = '$userId' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful
        header("Location: Adminhomepage.html");
        exit();
    } else {
        // Login failed
        echo "<script>alert('Invalid User ID or Password');</script>";
    }

    $conn->close();
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System - Admin Login</title>
    


    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .login-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .login-container label {
            display: block;
            margin-bottom: 5px;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .login-container .button-container {
            display: flex;
            justify-content: space-between;
        }
        .login-container button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            color: #fff;
            cursor: pointer;
        }
        .login-container .login-btn {
            background-color: #3540dc;
        }
        .login-container .cancel-btn {
            background-color: #3540dc;
        }
        .login-container .user-login-link {
            display: block;
            text-align: center;
            margin-top: 10px;
        }
    </style>
    </head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <form>
            <label for="user-id">User ID</label>
            <input type="text" id="user-id" name="user-id" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            
            <div class="button-container">
                <button type="button" class="cancel-btn">Cancel</button>
                <button type="submit" class="login-btn"><a href="Adminhomepage.html">Login</a></button>
            </div>
        </form>
    </div>
</body>
</html>