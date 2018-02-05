<?php
include 'db_connection.php';
include 'insert_data.php';
include 'get_data.php';
$connection = openConnection();
createTable($connection);
insertImage($connection, "https://raw.githubusercontent.com/Oghlukyan/slider/master/images/1.jpg");
insertImage($connection, "https://raw.githubusercontent.com/Oghlukyan/slider/master/images/2.jpg");
insertImage($connection, "https://raw.githubusercontent.com/Oghlukyan/slider/master/images/3.jpg");
getImages($connection);
closeConnection($connection);
