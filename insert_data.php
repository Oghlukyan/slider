<?php

function createTable($connection)
{
    $sql = "CREATE TABLE Images(id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                                url VARCHAR(300) NOT NULL)";
    mysqli_query($connection, $sql);
}

function insertImage($connection, $url){
    $sql = "INSERT INTO Images(url)
            VALUES ('$url')";
    mysqli_query($connection, $sql);
}