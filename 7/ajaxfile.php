<?php

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "db_book"; /* Database name */

$con = mysqli_connect('localhost', 'root', '', 'db_book');

if (!$con) {
    echo "Connection failed";
    die("Connection failed: " . mysqli_connect_error());
}

$return_arr = array();

$query = "SELECT * FROM `Book`";
$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    $title = $row['title'];
    $image = $row['image'];
    $url = $row['url'];

    $return_arr[] = array(
        "id" => $id,
        "title" => $title,
        "image" => $image,
        "url" => $url
    );
}

// Encoding array in JSON format
echo json_encode($return_arr);
