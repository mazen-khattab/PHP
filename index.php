<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./index.php" method="get">
        <label for="username">User name</label> <br>
        <input type="text" id="username" name="userName"><br><br>

        <label for="pass">password</label> <br>
        <input type="password" id="pass" name="password">
        <br><br>

        <button type="submit">Login</button>
    </form>
</body>

</html>

<?php
$number = rand();

echo $number
?>