<?php
include 'db_connection.php';
include 'insert_data.php';
include 'get_data.php';
$connection = openConnection();
 //createTable($connection);
//insertImage($connection, "https://twistedsifter.files.wordpress.com/2017/03/point-reyes-shipwreck.jpg");
getImages($connection);
closeConnection($connection);