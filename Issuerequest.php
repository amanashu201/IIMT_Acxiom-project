<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issue Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .buttons {
            display: flex;
            justify-content: space-between;
        }
        .buttons button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .back-button {
            background-color: blue;
            color: white;
        }
        .logout-button {
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <div class="form-container"></div>
        <h2>Issue Request</h2>
        <table>
            <tr>
                <th>Serial No</th>
                <td id="serialNo">12345</td>
            </tr>
            <tr>
                <th>Name Of Movie</th>
                <td id="movieName">Inception</td>
            </tr>
            <tr>
                <th>Author Name</th>
                <td id="authorName">Christopher Nolan</td>
            </tr>
            <tr>
                <th>Category</th>
                <td id="category">Science Fiction</td>
            </tr>
            <tr>
                <th>Status</th>
                <td id="status">Available</td>
            </tr>
            <tr>
                <th>Cost</th>
                <td id="cost">$10</td>
            </tr>
            <tr>
                <th>Procurement Date</th>
                <td id="procurementDate">2023-10-01</td>
            </tr>
        </table>
        <div class="buttons">
            <button type="button" class="back-button" onclick="window.history.back();">Back</button>
            <button type="button" class="logout-button" onclick="window.location.href='logout.html';">Logout</button>
        </div>
    </div>
</body>
</html>