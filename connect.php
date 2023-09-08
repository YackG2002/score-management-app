<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'score-management-app';

    $connection = mysqli_connect($servername, $username, $password, $database);

    if(!$connection){
        die('Erreur : ' .mysqli_connect_error());
    }
    
?>