Создать экземпляр класса User с конкретными значениями свойств и клонировать его в новую переменную.<br>
Свойствам нового экземпляра присвоить новые значения. Сравнить полученные экземпляры класса.<br>

<?php

class User {

	protected $login;
	protected $password;
	protected $email;
	protected $rating = 0;
	protected $isLogged = false;

	public function login() {
		$this->isLogged = true;
		echo 'Login<br>';
	}

	public function logout() {
		$this->isLogged = false;
		echo 'Logout<br>';
	}
	
	public function setProtperties(...$args) {
		foreach ($args[0] as $k => $v) {
			property_exists($this, $k) ? $this->$k = $v : false;
		}
	}

}

$u1 = new User;
$u1->setProtperties(array('login' => 'manager1', 'password' => '***', 'email' => 'manager1@company.com'));

$u2 = clone $u1;
$u2->setProtperties(array('login' => 'manager2', 'password' => '******', 'email' => 'manager2@company.com'));

echo '<pre>';
print_r($u1);
print_r($u2);
var_dump($u1 === $u2);
echo '</pre>';

?>