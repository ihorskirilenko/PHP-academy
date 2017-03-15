Создать массив, который описывает сообщение ключами name, email, message с соответствующими значениями.<br>
Привести массив к объекту. Проанализировать результат при помощи var_dump.<br>

<?php

$arr = array('name' => 'User', 'email' => 'user@gmail.com', 'message' => 'message-message-message');
$obj = (object)$arr;

echo '<pre>';
var_dump($obj);
echo '<pre>';

?>