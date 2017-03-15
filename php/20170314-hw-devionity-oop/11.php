В класс Car из предыдущих заданий добавить методы showBrand(), showModel() которые выводят на экран значения свойств brand,<br>
model соответственно. В класс User из предыдущих заданий добавить свойство isLogged, которое принимает true, если пользователь<br>
успешно авторизировался, и false при выходе из системы. Задать значения для этого свойства в методах login(), logout().

<?php

class Car {
	
	public $brand;
	public $model;
	public $year;
	public $driver;
	
	public function showBrand() {
		echo $this->brand . '<br>';
	}

	public function showModel() {
		echo $this->model . '<br>';
	}
	
}

class User {

	public $login;
	public $password;
	public $email;
	public $rating = 0;
	public $isLogged = false;

	public function login() {
		$this->isLogged = true;
		echo 'Login<br>';
	}

	public function logout() {
		$this->isLogged = false;
		echo 'Logout<br>';
	}

}

$a = new User;
$a->login = 'Alex';
$a->password = '*';
$a->email = 'alex@gmail.com';

$t = new Car;
$t->brand = 'Toyota';
$t->model = 'Rav 4';
$t->year = 2017;
$t->driver = $a;

echo '<pre>';
echo $t->showBrand() . '<br>';
echo $t->showModel() . '<br>';
var_dump($a->isLogged) . '<br>';
$a->login();
var_dump($a->isLogged) . '<br>';
echo '<pre>';

?>