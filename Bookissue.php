<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Issue</title>
    <style>
        label {
            display: block;
            margin-top: 10px;
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        input, textarea {
            display: block;
            margin-top: 5px;
            margin-bottom: 10px;
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        button {
            background-color: blue;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin-right: 10px;
        }
        button:hover {
            background-color: darkblue;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Book Issue </h1>
    </div>
    <h2>   
        <nav>
            <a href="#chart">Chart</a>
            <a href="#transactions">Transactions</a>
            <a href="#home">Home</a>
        </nav>
    </h2>
    
    <form>
        <label for="bookName">Book Name:</label>
        <input type="text" id="bookName" name="bookName" required>

        <label for="authorName">Author Name:</label>
        <input type="text" id="authorName" name="authorName" required>

        <label for="issueDate">Issue Date:</label>
        <input type="date" id="issueDate" name="issueDate" required>

        <label for="returnDate">Return Date:</label>
        <input type="date" id="returnDate" name="returnDate" required>

        <label for="remarks">Remarks:</label>
        <textarea id="remarks" name="remarks"></textarea>

        <button type="button" onclick="cancelForm()">Cancel</button>
        <button type="submit">Confirm</button>
    </form>

    <script>
        function cancelForm() {
            document.querySelector('form').reset();
        }
    </script>
</body>
</html>
