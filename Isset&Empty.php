<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="checkbox" name="pizza" value="pizza"> Pizza <br>
        <input type="checkbox" name="hamburger" value="hamburger"> Hamburger <br>
        <input type="checkbox" name="hotdog" value="hotdog"> Hotdog <br>

        <input type="submit" name="submit">
    </form>
</body>

</html>

<?php

$posts = $_POST;

if (isset($posts["submit"])) {
    foreach ($posts as $input => $value) {
        echo "{$input}: {$value} <br>";
    }
}
