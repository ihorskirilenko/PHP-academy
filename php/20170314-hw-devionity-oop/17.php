В класс Car из предыдущих заданий добавить конструктор, который выводит сообщение Car created при создании нового экземпляра класса.<br><br>

<?php
	
class Car {
	
	public $brand;
	public $model;
	public $year;
	public $driver;
	private $price;
	
	public function __construct() {
		echo 'Car created<br>';
	}
	
	public function setPrice($price) {
		$price = round((float)$price, 2);
		(is_float($price)) ? $this->price = $price : false;
	}

	public function getPrice($formated) {
		echo ($formated) ? number_format($this->price, 2) : $this->price;
	}
	
	public function showBrand() {
		echo $this->brand . '<br>';
	}

	public function showModel() {
		echo $this->model . '<br>';
	}
	
}

$t = new Car;
$t->brand = 'Toyota';
$t->model = 'Rav 4';
$t->year = 2017;
echo '<pre>';
print_r($t);
echo '</pre>';

?>

Создать контактную форму. Создать скрипт обработчик контактной формы. Создать класс ContactForm со свойствами,<br>
значения которых совпадают с названиями полей формы. Создать экземпляр класса ContactForm по массиву $_POST при отправке формы.<br><br>

<form method="post" action="17.php">
	<input type="text" name="login" placeholder="Enter login"/><br>
	<input type="email" name="email" placeholder="Enter e-mail"/><br>
	<input type="password" name="pass1" placeholder="Enter password"/><br>
	<input type="password" name="pass2" placeholder="Confirm password"/><br>
	<input type="reset">
	<input type="submit">
</form>

<?php

class ContactForm {
	
	private $login;
	private $email;
	private $pass;
	
	public function addContact(...$args) {
		($args[0]['pass1'] == $args[0]['pass2']) ? $this->pass = $args[0]['pass1'] : die('Пароль не сповпадает');
		foreach ($args[0] as $k => $v) {
			property_exists($this, $k) ? $this->$k = $v : false;
		}
		
	
	}

}

if($_POST) {
	$contact = new ContactForm;
	$contact->addContact($_POST);
	echo '<pre>';
	print_r($contact);
	echo '</pre>';
}

?>