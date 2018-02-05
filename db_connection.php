<?php

function openConnection()
{
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $db = "test";

    $connection = mysqli_connect($dbHost, $dbUser, $dbPass, $db) or die("Connect failed: %s\n" . $connection->error);
    return $connection;
}

function closeConnection($connection)
{
    $connection->close();
}