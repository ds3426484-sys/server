<?php
header('Content-Type: application/json; charset=utf-8');

// Подключение к БД
include_once "pdo.php";
$db = new DB();
$pdo = $db->connect();


if ($_POST !== null) {
    // Получаем данные из формы
    $fam = $_POST['fam'];
    $name = $_POST['name'];
    $ote = $_POST['ote'];
    $username =$_POST['username'] ;
    $email = $_POST['email'] ;
    $phone = $_POST['phone'] ;
    $password = $_POST['password'];

  
    // Вставка нового пользователя
    $stmt = $pdo->prepare("
        INSERT INTO users (fam, name, ote, username, email, phone, password) 
        VALUES (?, ?, ?, ?, ?, ?, ?)
    ");
        $stmt->bindParam(1, $fam);
        $stmt->bindParam(2, $name);
        $stmt->bindParam(3, $ote);
        $stmt->bindParam(4, $username);
        $stmt->bindParam(5, $email);
        $stmt->bindParam(6, $phone);
        $stmt->bindParam(7, $password);
        $stmt->execute();

} else {
    return false;
}

?>

