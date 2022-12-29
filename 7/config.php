<?php

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "db_book"; /* Database name */

$con = mysqli_connect('localhost', 'root', '','db_book');

// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
?>
