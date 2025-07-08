<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./Get&Post.php" method="post">
        <label>Quantity</label> <br>
        <input type="number" name="quantity"><br><br>
        <input type="submit" value="total">
    </form>
</body>

</html>


<?php

$quantity = $_POST["quantity"];
$price = 5;
$totalPrice = $quantity * $price;
echo "Total price is: {$totalPrice}";

/*
$_GET: 
    1- Data is appended to the URL
    2- NOT secure
    3- char limit => Browsers and servers limit URL length (usually around 2000 characters).
    4- Bookmark is possible w/ values
    5- better for search page
    6- GET requests can be cached


$_POST: 
    1- Data is packaged inside the body of the HTML request
    2- MORE secure 
    3- no data limit
    4- cannot bookmart
    5- POST requests are not cahed 
    6- better for submitting credentials
 */
?>