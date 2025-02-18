<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Availability</title>
    
    <style>
        .header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .container {
            padding: 20px;
        }
        .section {
            margin-bottom: 20px;
        }
        .logout {
            text-align: right;

        }
        .logout button {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .buttons {
            margin-top: 20px;
        }
        .buttons button {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Book Availability</h1>
    </div>

    <div class="container">
        
        <div class="section">
            <h2>
                <a href="Masterlistofmembership.html">Chart</a>
                <a href="Transaction.html">Transaction</a>
                <a href="UserhomePage.html">Home</a>
            </h2>
        </div>
        
        <div class="section">
            <div class="form-group">
                <label for="bookName">Enter Book Name:</label>
                <input type="text" id="bookName" name="bookName">
            </div>
            <div class="form-group">
                <label for="authorName">Enter Author Name:</label>
                <input type="text" id="authorName" name="authorName">
            </div>
            <div class="buttons">
                <button onclick="searchBook()">Search</button>
                <button onclick="goBack()">Back</button>
            </div>
        </div>
        
        <div class="logout">
            <button onclick="logout()">Logout</button>
        </div>
    </div>
    <script>
        function logout() {
            // Add logout functionality here
            alert('Logged out');
        }

        function searchBook() {
            // Add search functionality here
            alert('Search button clicked');
        }

        function goBack() {
            // Add back functionality here
            alert('Back button clicked');
        }
    </script>
</body>
</html>
