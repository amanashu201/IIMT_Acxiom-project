<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master List of Membership</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .button {
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 4px 2px;
            cursor: pointer;
        }
        .back-button {
            background-color: blue;
            color: white;
        }
        .logout-button {
            background-color: black;
            color: white;
            float: right;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Master List Of Membership </h1>
    </div>
    <h2>   
        <nav>
            <a href="#chart">Chart</a>
            <a href="#transactions">Reports</a>
            <a href="#home">Home</a>
        </nav>
    </h2>

    
    <table>
        <tr>
            <th>Serial No</th>
            <th>Name Of Book</th>
            <th>Author Name</th>
            <th>Category</th>
            <th>Status</th>
            <th>Cost</th>
            <th>Procurement Date</th>
        </tr>
        <tr>
            <td>1</td>
            <td>The Great Gatsby</td>
            <td>F. Scott Fitzgerald</td>
            <td>Fiction</td>
            <td>Available</td>
            <td>$10.99</td>
            <td>2023-01-15</td>
        </tr>
    </table>
    <br>
    <button class="button back-button">Back</button>
    <button class="button logout-button">Logout</button>
</body>
</html>