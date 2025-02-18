<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Book</title>
    <style>
        label {
            display: block;
            margin-bottom: 8px;
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        input, textarea {
            width: 99%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-family: Arial, sans-serif;
        }
        button {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: blue;
            color: white;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Return Book </h1>
    </div>

    <h2>   
        <nav>
            <a href="#chart">Chart</a>
            <a href="#transactions">Transactions</a>
            <a href="#home">Home</a>
        </nav>
    </h2>
    
    <form>
        <label for="bookName">Enter Book Name</label>
        <input type="text" id="bookName" name="bookName" required>

        <label for="author">Enter Author</label>
        <input type="text" id="author" name="author" required>

        <label for="serialNo">Serial No</label>
        <input type="text" id="serialNo" name="serialNo" required>

        <label for="issueDate">Issue Date</label>
        <input type="date" id="issueDate" name="issueDate" required>

        <label for="returnDate">Return Date</label>
        <input type="date" id="returnDate" name="returnDate" required>

        <label for="remarks">Remarks</label>
        <textarea id="remarks" name="remarks" rows="4"></textarea>

        <button type="button" class="cancel">Cancel</button>
        <button type="submit" class="confirm">Confirm</button>
    </form>
</body>
</html>
