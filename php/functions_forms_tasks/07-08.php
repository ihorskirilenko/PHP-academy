<?php

//Переменные
$home = $_SERVER['DOCUMENT_ROOT'];
$msg = '/PHP-Academy/temp/messages.txt';
$msg_file = $home . $msg;
$msg_arr = array();
$msg = $_POST;

//Получение существующих сообщений

function getMessages($file) {
	global $msg_arr;
	if (is_readable($file)) {
		$handle = fopen($file, 'r');
		$msg_arr = fread($handle, filesize($file));
		$msg_arr = explode(PHP_EOL, $msg_arr);
		$msg_arr = array_diff($msg_arr, array(''));
		$msg_arr = array_reverse($msg_arr);
		fclose($handle);
	}
	return $msg_arr;
}

//Добавление нового сообщения с перезаписью файла данных

function addMessage ($m) {
	global $msg_file;
	global $msg_arr;
	if ($m['username'] && $m['message']) {
		$newmsg['username'] = strip_tags($m['username']);
		$newmsg['message'] = strip_tags($m['message'], '<b>');
		$msg_add = serialize($newmsg) . PHP_EOL;
		$handle = fopen($msg_file, 'a');
		fwrite($handle, $msg_add);
		fclose($handle);

	} else {
		echo 'Заполните все поля!';
	} 
}

//Вывод сообщений

function showMessages ($list) {
	$words = '/qwer|asdf|zxcv/';
	foreach ($list as $rec) {
		$rec = unserialize($rec);
		if (preg_match($words, $rec['message'])) {
			echo 'Некорректный комментарий';
		}
		else {
			echo '<p>Пользователь: <b>' . $rec['username'] . '</b> пишет:</p>';
			echo '<p>' . $rec['message'] . '</p>';
		}
	}
}

if ($msg) {
	addMessage($msg);
	unset($msg_arr);
	getMessages($msg_file);
	showMessages($msg_arr);
}
else {
	getMessages($msg_file);
	showMessages($msg_arr);
}

?>

<body style="font: 90% Tahoma">
	<div>
		<form method="post" action="07-08.php">
			<!--required-->
			<input name="username" type="text" required placeholder="Username"/><br>
			<br><textarea name="message" required placeholder="Comment..." cols=50 rows=5></textarea><br><br>
			<input type="submit" name="submit"/>
		</form>
	</div>
	<div>
		<p>7. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
		Все добавленные комментарии выводятся над текстовым полем.</p>
		<p>8. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
		Все добавленные комментарии выводятся над текстовым полем. Реализовать проверку на наличие в тексте запрещенных слов, матов.
		При наличии таких слов - выводить сообщение "Некорректный комментарий". Реализовать удаление из комментария всех тегов,
		кроме тега &ltb&gt.</p><br>
	</div>
</body>
