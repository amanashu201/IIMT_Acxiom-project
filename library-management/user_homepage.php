<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Homepage</title>
    <style>
        body {
            text-align: center;
            margin-top: 100px;
        }
        a {
            display: block;
            margin: 10px auto;
            padding: 10px;
            text-decoration: none;
            border: 1px solid black;
            width: 200px;
            text-align: center;
        }
    </style>
</head>

<body>

    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?></h2>

    <a href="./reports/reports.php">View Reports</a>
    <a href="./transaction/transaction.php">Manage Transactions</a>
    <a href="logout.php">Logout</a>

</body>

</html>
