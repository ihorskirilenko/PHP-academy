В класс Car из предыдущих заданий добавить private свойство price, а также публичные геттер и сеттер для него.<br>
Геттер должен зависеть от одного параметра. В зависимости от того, было ли в функцию геттера передано true,<br>
выводить отформатированную цену, либо же в обычном виде (использовать функцию number_format).<br>
Сеттер должен приводить входящий параметр к числу, у которого не более 2 знаков после запятой (использовать round).<br><br>

<form method="post" action="12.php">
	<input type="text" name="price" placeholder="Price"/><br>
	<input type="text" name="formated" placeholder="Do you need a format? (0/1)"/><br>
	<input type="submit" name="submit"/>
</form>

<?php

if($_POST) {

	$post1 = ($_POST['price']);
	$post2 = ($_POST['formated']);
	$post3 = ($_POST['submit']);

}
	
class Car {
	
	public $brand;
	public $model;
	public $year;
	public $driver;
	private $price;
	
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

if($_POST) {

	$t->setPrice($post1);
	$t->getPrice($post2);
	
}

?>