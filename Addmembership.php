<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Membership</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .buttons button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-right: 10px;
        }
        .confirm-btn {
            background-color: blue;
            color: white;
        }
        .cancel-btn {
            background-color: red;
            color:
        .logout-btn {
            background-color: black;
            color: white;
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Add Membership </h1>
    </div>
    <h2>   
        <nav>
            <a href="#chart">Add</a>
            <a href="#transactions">Update</a>
            <a href="#home">Home</a>
        </nav>
    </h2>

    <div class="container">
        <form>
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName" required>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName" required>
            </div>
            <div class="form-group">
                <label for="contactName">Contact Name</label>
                <input type="text" id="contactName" name="contactName" required>
            </div>
            <div class="form-group">
                <label for="contactAddress">Contact Address</label>
                <input type="text" id="contactAddress" name="contactAddress" required>
            </div>
            <div class="form-group">
                <label for="adharCardNo">Adhar Card NO</label>
                <input type="text" id="adharCardNo" name="adharCardNo" required>
            </div>
            <div class="form-group">
                <label for="startDate">Start Date</label>
                <input type="date" id="startDate" name="startDate" required>
            </div>
            <div class="form-group">
                <label for="endDate">End Date</label>
                <input type="date" id="endDate" name="endDate" required>
            </div>
            <div class="form-group">
                <label for="membership">Membership</label>
                <input type="text" id="membership" name="membership" required>
            </div>
            <div class="buttons">
                <button type="submit" class="confirm-btn">Confirm</button>
                <button type="reset" class="cancel-btn">Cancel</button>
            </div>
        </form>
    </div>
    <button class="logout-btn">Logout</button>
</body>
</html>
