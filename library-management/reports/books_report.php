<?php
include('../includes/db.php');
session_start();

$_SESSION['role'] = $_SESSION['role'] ?? 'user';

$homePage = ($_SESSION['role'] === 'admin') ? '../admin_homepage.php' : '../user_homepage.php';
$sql = "SELECT * FROM books";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master List of Books</title>
    <style>
        body {
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
    </style>
</head>

<body>

    <div style="width: 100%; text-align: left; padding: 10px;">
        <a href="<?= $homePage ?>">Home</a> | 
        <a href="/logout.php">Log Out</a>
    </div>

    <h2>Master List of Books</h2>

    <table>
        <thead>
            <tr>
                <th>Serial No</th>
                <th>Name of Book</th>
                <th>Author Name</th>
                <th>Category</th>
                <th>Status</th>
                <th>Cost (₹)</th>
                <th>Procurement Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                $serial_no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                        <td>{$serial_no}</td>
                        <td>{$row['book_name']}</td>
                        <td>{$row['author_name']}</td>
                        <td>{$row['category']}</td>
                        <td>{$row['status']}</td>
                        <td>₹{$row['cost']}</td>
                        <td>{$row['procurement_date']}</td>
                    </tr>";
                    $serial_no++;
                }
            } else {
                echo "<tr><td colspan='7' style='text-align:center;'>No records found</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <br>
    <a href="reports.php">Back</a>

</body>
</html>
