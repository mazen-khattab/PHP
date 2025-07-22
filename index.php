<?php
include("./Database.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <h2>Registration Form</h2>
        <label for="fname">First Name:</label><br>
        <input type="text" name="fname" id="fname"> <br> 
        <label for="lname">Last Name:</label><br> 
        <input type="text" name="lname" id="lname"><br><br>

        <input type="submit" name="submit">
    </form>
</body>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = filter_input(INPUT_POST, "fname", FILTER_SANITIZE_SPECIAL_CHARS);
    $lname = filter_input(INPUT_POST, "lname", FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($fname)) {
        echo "pls enter you first name";
    } elseif (empty($lname)) {
        echo "pls enter you last name";
    } else {
        $sql = "insert into customer (first_name, last_name) values ('$fname', '$lname')";

        mysqli_query($conn, $sql);

        echo "a new customer has been added";
    }
} 


mysqli_close($conn);
?>