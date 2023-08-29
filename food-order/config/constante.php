<?php

define('SITEURL', 'http://localhost/pizzaria/');


  $conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
        $db_select = mysqli_select_db($conn, 'admin') or die(mysqli_error());


?>