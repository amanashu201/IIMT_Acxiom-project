<?php
// Database connection
include('../includes/db.php');
session_start();
$_SESSION['role'] = $_SESSION['role'] ?? 'user';
$homePage = ($_SESSION['role'] === 'admin') ? '../admin_homepage.php' : '../user_homepage.php';

// Fetch books for dropdown
$book_query = "SELECT DISTINCT book_name FROM books";
$book_result = $conn->query($book_query);

// Fetch serial numbers
$serial_query = "SELECT id FROM books";
$serial_result = $conn->query($serial_query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 500px;
            margin-top: 50px;
            background: white;
            padding: 20px;
            border: 1px solid #ddd;
        }
        select, input, textarea, button, a {
            width: 100%;
            margin-top: 10px;
            padding: 8px;
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2 class="text-center">Return Book</h2>

        <form action="./pay_fine.php" method="POST">

            <label>Enter Book Name:</label>
            <select name="book_name" required>
                <option value="">Select a Book</option>
                <?php while ($row = $book_result->fetch_assoc()): ?>
                    <option value="<?= htmlspecialchars($row['book_name']); ?>"><?= htmlspecialchars($row['book_name']); ?></option>
                <?php endwhile; ?>
            </select>

            <label>Enter Author:</label>
            <textarea name="author_name" readonly></textarea>

            <label>Serial No:</label>
            <select name="serial_no" required>
                <option value="">Select Serial No</option>
                <?php while ($row = $serial_result->fetch_assoc()): ?>
                    <option value="<?= htmlspecialchars($row['id']); ?>"><?= htmlspecialchars($row['id']); ?></option>
                <?php endwhile; ?>
            </select>

            <label>Issue Date:</label>
            <input type="date" name="issue_date" readonly>

            <label>Return Date:</label>
            <input type="date" name="return_date" required>

            <label>Remarks:</label>
            <textarea name="remarks"></textarea>

            <button type="submit">Confirm</button>
            <a href="../transaction_cancelled.php">Cancel</a>
            <a href="<?= htmlspecialchars($homePage) ?>">Home</a>
            <a href="../logout.php">Log Out</a>

        </form>
    </div>

</body>
</html>

<?php $conn->close(); ?>
