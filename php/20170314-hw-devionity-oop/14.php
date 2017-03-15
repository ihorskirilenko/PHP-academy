Изменить область видимости свойств класса User на protected. Унаследовать от класса User классы Manager, Admin.<br>
Создать объекты менеджера и админа, задать значения для свойств объектов.<br>

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

class Manager extends User {

}

class Admin extends User {

}

$m = new Manager;
$m->setProtperties(array('login' => 'manager1', 'password' => '***', 'email' => 'manager1@company.com', 'bla' => 'bla'));

$a = new Admin;
$a->setProtperties(array('login' => 'GrandeOdmin', 'password' => '*****************', 'email' => 'admin@company.com', 'bla' => 'bla'));

echo '<pre>';
print_r($m);
print_r($a);
echo '</pre>';

?>