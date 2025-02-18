<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions Page</title>
    <style>
        .header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        body {
            font-family: Arial, sans-serif;
        }
        .excel-options {
            margin-top: 20px;
        }
        .excel-options table {
            width: 100%;
            border-collapse: collapse;
        }
        .excel-options th, .excel-options td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }
        .excel-options td button {
            width: 100%;
            padding: 10px;
        }
        .logout {
            text-align: right;
            margin-top: 20px;
        }
        .logout button {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Transaction</h1>
    </div>
    <div class="section">
     <h2>   
    <nav>
        <a href="#chart">Chart</a>
        <a href="Transaction.html">Transactions</a>
        <a href="UserhomePage.html">Home</a>
    </nav>
    </h2>


    <div class="excel-options">
        <table>
            <tr>
                <td><button><a href="Bookavailable.html"> Is Book Available</a></button></td>
            </tr>
            <tr>
                <td><button><a href="Bookissue.html">Issue Book</a></button></td>
            </tr>
            <tr>
                <td><button><a href="Returnbook.html">Return Book</a></button></td>
            </tr>
            <tr>
                <td><button><a href="Payfine.html">Pay Fine</a></button></td>
            </tr>
        </table>

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
        </script>

</body>
</html>