<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "todolist";

    $connection = mysqli_connect($server, $username, $password, $dbname);
    if (!$connection){
            die("Connection Failed:".mysqli_connect_error());
        }
?>