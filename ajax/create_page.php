<?php
require_once 'config.php';

$id = $_POST['id'];
$title = $_POST['title'];
$text = $_POST['text'];

$sql = "INSERT INTO `page` (`date`, `name`, `text`) VALUES (CURRENT_TIMESTAMP, '$title', '$text')";
//$sql = "UPDATE `page` SET `name` = '$title', `text` = '$text' WHERE `page`.`id` = '$id'";

$result = $db->query($sql);

if ($result) {
    echo json_encode($res = 'Страница создана');
//    echo json_encode($res = 'Cсылка на страницу: ?pages=' . $id . ' (Скопируйте для вставки в меню)');
}
