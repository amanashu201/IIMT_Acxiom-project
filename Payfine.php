<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay Fine</title>
    <style>
        label {
            display: block;
            margin-bottom: 5px;
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 15px;
        }
        input.small {
            width: calc(100% - 10px);
        }
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: black;
            color: white;
            cursor: pointer;
            margin-right: 10px;
        }
        .logout {
            float: right;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Pay Fine </h1>
    </div>

    <h2>   
        <nav>
            <a href="#chart">Chart</a>
            <a href="#transactions">Transactions</a>
            <a href="#home">Home</a>
        </nav>
    </h2>

    <div class="container">
        <form>
            <div class="form-group">
                <label for="bookName">Book Name</label>
                <input type="text" id="bookName" name="bookName" class="small">
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" id="author" name="author" class="small">
            </div>
            <div class="form-group">
                <label for="serialNo">Serial No</label>
                <input type="text" id="serialNo" name="serialNo" class="small">
            </div>
            <div class="form-group">
                <label for="issueDate">Issue Date</label>
                <input type="date" id="issueDate" name="issueDate" class="small">
            </div>
            <div class="form-group">
                <label for="returnDate">Return Date</label>
                <input type="date" id="returnDate" name="returnDate" class="small">
            </div>
            <div class="form-group">
                <label for="actualReturnDate">Actual Return Date</label>
                <input type="date" id="actualReturnDate" name="actualReturnDate" class="small">
            </div>
            <div class="form-group">
                <label for="fineCalculated">Fine Calculated</label>
                <input type="text" id="fineCalculated" name="fineCalculated" class="small">
            </div>
            <div class="form-group"></div>
                <label for="finePaid">Fine Paid</label>
                <input type="text" id="finePaid" name="finePaid" class="small">
            </div>
            <div class="form-group">
                <label for="remarks">Remarks</label>
                <input type="text" id="remarks" name="remarks" class="small">
            </div>
            <div class="form-actions">
                <button type="button">Cancel</button>
                <button type="submit">Confirm</button>
                <button type="button" class="logout">Logout</button>
            </div>
        </form>
    </div>
</body>
</html>
