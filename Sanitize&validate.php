<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        UserName: <br>
        <input type="text" name="username"><br>

        Age: <br>
        <input type="text" name="age"><br>

        Email: <br>
        <input type="text" name="email"><br>

        <input type="submit" name="login" value="login"><br>
        <input type="submit" name="log" value="log">
    </form>
</body>

</html>

<?php

if (isset($_POST["login"])) {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    echo "Hello {$username} <br>";
    echo "You are {$age} years old <br>";
    echo "Your email is {$email}";
}

if (isset($_POST["log"])) {
    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

    if (!empty($age)) {
        echo "You are $age years old <br>";
    }

}
//<script> alert("You have a VIRUS!"); </script> 