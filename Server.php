<?php

/**
 * $_SERVER = SGV that contains headers, paths, and script locations.
 *            The entries in this array are created by the web server.
 *            Shows nearly everything you need to know about the current web page environment 
 * 
 */

foreach($_SERVER as $key => $value) {
    echo "$key = $value <br>";
}