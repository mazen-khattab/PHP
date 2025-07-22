<?php

/**
 * Cookie = information about a user stored in a user's web-browser 
 *          targeted advertisements , browsing preferences, and other non-sensitive data
 */

setcookie("cookie1", "cookie", time() + 86400, "/");
setcookie("cookie2", "cookie", time() + 86400, "/");

foreach($_COOKIE as $key => $value) {
    echo "{$key} = {$value} <br>";
} 

echo $_COOKIE["cookie1"];