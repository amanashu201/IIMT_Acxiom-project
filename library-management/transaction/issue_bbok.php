<?php
session_start();
include('../includes/db.php');

$_SESSION['role'] = $_SESSION['role'] ?? 'user';
$homePage = ($_SESSION['role'] === 'admin') ? '../admin_homepage.php' : '../user_homepage.php';

$bookQuery = "SELECT id, book_name FROM books";
$bookResult = $conn->query($bookQuery);

$message = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $book_id = $_POST['book_id'] ?? null;
    $author_name = trim($_POST['author_name'] ?? "");
    $issue_date = $_POST['issue_date'] ?? null;
    $return_date = $_POST['return_date'] ?? null;
    $remarks = trim($_POST['remarks'] ?? '');

    if (empty($book_id) || empty($author_name) || empty($issue_date) || empty($return_date)) {
        $message = "<p class='text-center'>All mandatory fields must be filled!</p>";
    } else {
        $sql = "INSERT INTO issue_books (book_id, author_name, issue_date, return_date, remarks) 
                VALUES (?, ?, ?, ?, ?)";

        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("issss", $book_id, $author_name, $issue_date, $return_date, $remarks);
            if ($stmt->execute()) {
                $stmt->close();
                $conn->close();
                header("Location: ../maintenance/confirmation.php?success=true");
                exit(); 
            } else {
                $message = "<p class='text-center'>Error: " . $stmt->error . "</p>";
            }
            $stmt->close();
        } else {
            $message = "<p class='text-center'>Database Error: " . $conn->error . "</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issue Book</title>
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
        <h2 class="text-center">Issue Book</h2>

        <?= $message ?>

        <form action="" method="POST">
            <label>Select Book:</label>
            <select name="book_id" required>
                <option value="">Select Book </option>
                <?php while ($row = $bookResult->fetch_assoc()) { ?>
                    <option value="<?= htmlspecialchars($row['id']); ?>"><?= htmlspecialchars($row['book_name']); ?></option>
                <?php } ?>
            </select>

            <label>Enter Author:</label>
            <input type="text" name="author_name" required>

            <label>Issue Date:</label>
            <input type="date" name="issue_date" required>

            <label>Return Date:</label>
            <input type="date" name="return_date" required>

            <label>Remarks (Optional):</label>
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
