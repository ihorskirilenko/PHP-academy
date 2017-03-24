В класс User из предыдущих заданий добавить магические методы __get, __set для закрытых свойств,<br>
которые будут возвращать / присваивать соответствующие значения.<br><br>

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

	/*public function setProtperties(...$args) {
		foreach ($args[0] as $k => $v) {
			property_exists($this, $k) ? $this->$k = $v : false;
		}
	}*/
	
	public function __set($name, $val) {
		$this->$name = $val;
	}

	public function __get($name) {
		return $this->$name;
	}

}

$u1 = new User;
$u1->login = 'Vasia';
$u1->password = 'Pupkin';
$u1->email = 'pupkin@gmail.com';

echo $u1->login . '<br>' . $u1->password . '<br>' . $u1->email . '<br>' . $u1->rating . '<br>' . $u1->isLogged;

?>