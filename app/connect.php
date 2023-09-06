<?php

    $connect = mysqli_connect('localhost', 'root', '', 'module_27');
    // $connect = new PDO("mysql:host=localhost;dbname=module_25", 'root', '');

    if (!$connect) {
        die('Error connect to DataBase');
    }