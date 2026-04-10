<?php
header('Content-Type: application/json; charset=utf-8');

// Подключение к БД
include_once "pdo.php";
$db = new DB();
$pdo = $db->connect();


if ($_POST !== null) {
    // Получаем данные из формы
    $fam1 = $_POST['fam1'];
    $name1 = $_POST['name1'];
    $email1 = $_POST['email1'] ;
    $phone1 = $_POST['phone1'] ;
    $message1 = $_POST['message1'];

  
    // Вставка нового пользователя
    $stmt = $pdo->prepare("
        INSERT INTO contacts (fam1, name1, email1, phone1, message1) 
        VALUES (?, ?, ?, ?, ?)
    ");
        $stmt->bindParam(1, $fam1);
        $stmt->bindParam(2, $name1);
        $stmt->bindParam(3, $email1);
        $stmt->bindParam(4, $phone1);
        $stmt->bindParam(5, $message1);
        $stmt->execute();

} else {
    return false;
}

?>