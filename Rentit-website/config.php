<?php

$servername = 'localhost';
$db ='finalprojectphp';
$username = 'root';
$pwd='';

$connect = mysqli_connect($servername,$username,$pwd,$db);

// Check connection
if (!$connect) {
    die("Connection failed: " );

}

 ?>
