<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body, input {
            font-family: system-ui;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>CRUD</h1>

        <table class="table">
            <tbody>
                <?php include 'read.php'; ?>
            </tbody>
        </table>

        <form action="create.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
            <label for="score">Score:</label>
            <input type="number" id="score" name="score">
            <input type="submit" value="Add">
        </form>
    </div>
</body>

</html>