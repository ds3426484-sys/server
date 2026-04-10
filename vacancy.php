<?php

// Подключение к БД
include_once "pdo.php";
$db = new DB();
$pdo = $db->connect();


if ($_POST !== null) {
    // Получаем данные из формы
    $fam1 = $_POST['fam'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];


    // Вставка нового пользователя
    $stmt = $pdo->prepare("
        INSERT INTO contacts (fam, name, email, phone, message) 
        VALUES (?, ?, ?, ?, ?)
    ");
    $stmt->bindParam(1, $fam);
    $stmt->bindParam(2, $name);
    $stmt->bindParam(3, $email);
    $stmt->bindParam(4, $phone);
    $stmt->bindParam(5, $message);
    $stmt->execute();

} else {
    return false;
}