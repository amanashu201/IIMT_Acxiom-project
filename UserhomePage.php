<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Home Page</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
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
        margin-top: 20px;
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
</style>
<body>
    <div class="header">
        <h1>User Home Page</h1>
    </div>

    <div class="container">
        
        <div class="section"></div>
            <h2>
            
                <a href="Reports.html">Reports</a>
                <a href="Transaction.html">Transactions</a>

    
            </h2>
            <form>
                <table>
                    <tr>
                        <th>Code No From</th>
                        <th>Code No To</th>
                        <th>Category</th>
                    </tr>
                    <tr>
                        <td><input type="text" id="codeNoFrom" name="codeNoFrom"></td>
                        <td><input type="text" id="codeNoTo" name="codeNoTo"></td>
                        <td><input type="text" id="category" name="category"></td>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align: center;"></td>
                            <input type="submit" value="Submit">
                        </td>
                    </tr>
                </table>
            </form>
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
