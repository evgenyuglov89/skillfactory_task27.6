<?php
session_start();
include "app/connect.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <title>Спец. страница</title>
</head>
<body>
<div class="container py-3">
    <p>Lorem ipsum </p>
    <?php 
        if($_SESSION['user']['role'] == 'vk') {
    ?>
    <img src="img/1692806899Качество1.jpg" alt="">
    <?php 
        }
    ?>
</div>
</body>
</html>