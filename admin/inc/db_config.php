<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'hotel_db';
    
    $_GLOBALS['conn'] = mysqli_connect($host, $user, $pass, $db);

    if (!$_GLOBALS['conn']) {
        die("Cannot Connect to Database".mysqli_connect_error());
    }


?>