<?php

/**
 * seesion = SGV used to store infromation on a suer to be used across multiple pages.
 *           A user is assigned a session-id 
 *           ex. login credentials
 */

 session_start();
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <p>This is the login page</p>
    <a href="Array.php">This goes to the array page</a>
 </body>
 </html>

 <?php
 $_SESSION["username"] = "mazen";
 $_SESSION["password"] = "123456";

 //session_destroy();  this is used to delete the sessions 

 echo $_SESSION["username"];
 echo $_SESSION["password"];