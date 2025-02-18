<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
        header {
            background-color: #040504;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        main {
            flex: 1;
            padding: 20px;
            display: flex;
            justify-content: space-around;
        }
        section {
            border: 1px solid #ccc;
            padding: 20px;
            width: 30%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        button.logout {
            background-color: #120808;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <h1>Transaction Dashboard</h1>
        <button class="logout">Logout</button>
    </header>
    <main>
        <section>
            <h2>Transaction</h2>
            <p>Details about transactions will go here.</p>
        </section>
        <section>
            <h2>Cancel Transaction</h2>
            <p>Details about canceling transactions will go here.</p>
        </section>
        <section>
            <h2>Confirmation Transaction</h2>
            <p>Details about confirming transactions will go here.</p>
        </section>
    </main>
</body>
</html>