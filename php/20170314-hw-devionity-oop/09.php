Для класса User из предыдущего занятия создать методы login(), logout(),<br>
которые просто выводят на экран соответствующее сообщение. Создать экземпляр класса, вызвать созданные методы.<br>

<?php

class User {
	
	public $login;
	public $password;
	public $email;
	public $rating = 0;
	
	public function login() {
		echo 'Login<br>';
	}

	public function logout() {
		echo 'Logout<br>';
	}
	
}

$a = new User;
$a->login = 'Alexander';
$a->password = '*';
$a->email = 'Alexander@gmail.com';

echo '<pre>';
print_r($a->login());
print_r($a->logout());
echo '<pre>';

?>