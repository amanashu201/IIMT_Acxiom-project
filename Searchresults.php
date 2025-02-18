<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        
        h1 {
            color: #333;
            text-align: center;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        input[type="text"], select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #0e35a9;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background-color: #0d3dbe;
        }
    </style>
</head>
<body>
    <h2>   
        <nav>
            <a href="Bookavailable.html">Chart</a>
            <a href="Transaction.html">Transactions</a>
            <a href="UserhomePage.html">Home</a>
        </nav>
    </h2>
    
    <form action="/search" method="get">
        <h1>Search Book Availability</h1>
        <table>
            <tr>
                <th><label for="bookName">Book Name:</label></th>
                <td><input type="text" id="bookName" name="bookName" required></td>
            </tr>
            <tr>
                <th><label for="authorName">Author Name:</label></th>
                <td><input type="text" id="authorName" name="authorName" required></td>
            </tr>
            <tr>
                <th><label for="serialNumber">Serial Number:</label></th>
                <td><input type="text" id="serialNumber" name="serialNumber" required></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="Search">
                </td>
            </tr>
        </table>
    </form>
    <table>
        <thead>
            <tr>
                <th>Select</th>
                <th>Book Name</th>
                <th>Author Name</th>
                <th>Serial Number</th>
                <th>Available</th>
            </tr>
        </thead>
        <tbody>
            <!-- Example row, replace with dynamic content -->
            <tr>
                <td><input type="radio" name="selectBook" value="123456"></td>
                <td>Example Book</td>
                <td>John Doe</td>
                <td>123456</td>
                <td>Yes</td>
            </tr>
        </tbody>
    </table>
</body>
</html>