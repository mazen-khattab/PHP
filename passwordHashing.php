<?php
/**
 * hashing = transforming sensitive data (password) into letters, numbers, and/or
 *           symbols vai a mathematical process. (similar to encryption) 
 *           Hides the original data from 3rd parties.
 */

$password = "mak.01023839637";
$hash = password_hash($password, PASSWORD_DEFAULT);

if (password_verify("mak.01023839637", $hash)) {
    echo "You are logged in !";
} else {
    echo "Incorrect password"; 
}