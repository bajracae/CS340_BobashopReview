<?php
    // Define database connection constants
    define('DB_HOST', 'classmysql.engr.oregonstate.edu');
    define('DB_USER', 'cs340_ohste');
    define('DB_PASSWORD', 'XXXX');  // change this to the actual password from Slack
    define('DB_NAME', 'cs340_ohste');
    define('CON_STRING', 'mysql:host=classmysql.engr.oregonstate.edu;dname=cs340_ohste');

    $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
    OR die('Could not connect to MySQL: ' .
    mysqli_connect_error());
?>

