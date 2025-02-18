<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Library Management System - Admin Login</title>
    </head>
<body>
    <div class="login-container">
        <h2>User Login</h2>
        <form method="POST" action="UserLogin.php">
            <label for="user-id">User ID</label>
            <input type="text" id="user-id" name="user-id" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            
            <div class="button-container">
            <button type="button" class="cancel-btn">Cancel</button>
            <button type="submit" class="login-btn">Login</button>
            </div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $userId = $_POST['user-id'];
            $password = $_POST['password'];

            // Database connection
            $conn = new mysqli('localhost', 'username', 'password', 'database');

            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            // Prepare and bind
            $stmt = $conn->prepare("SELECT * FROM users WHERE user_id = ? AND password = ?");
            $stmt->bind_param("ss", $userId, $password);

            // Execute the statement
            $stmt->execute();
            $result = $stmt->get_result();

            // Check if user exists
            if ($result->num_rows > 0) {
            echo "Login successful!";
            // Redirect to another page or start a session
            } else {
            echo "Invalid User ID or Password";
            }

            // Close connections
            $stmt->close();
            $conn->close();
        }
        ?>
    </div>
</body>
</html>