<?php
    session_start();
    if (isset($_SESSION['user'])) {
        header('Location: index.php');
    }
    include "app/config.php";

    // Параметры приложения
    $clientId     = ID; // ID приложения
    $clientSecret = SECRET; // Защищённый ключ
    $redirectUri  = URL; // Адрес, на который будет переадресован пользователь после прохождения авторизации

    // Формируем ссылку для авторизации
    $params = array(
        'client_id'     => $clientId,
        'redirect_uri'  => $redirectUri,
        'response_type' => 'code',
        'v'             => '5.126',
        'scope'         => 'photos,offline',
    );
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body class="registr">
    <form>
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите адрес своей почты">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button type="submit" class="register-btn">Зарегистрироваться</button>
        <p>
            У вас уже есть аккаунт? - <a href="/autorization.php">авторизируйтесь</a>!
        </p>        
        <p class="msg none">Lorem ipsum.</p>
        <a href="http://oauth.vk.com/authorize?' . http_build_query( $params ) . '">Авторизоваться через VK..</a>
        <a href="/index.php">Вернуться на главную страницу</a>
    </form>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>