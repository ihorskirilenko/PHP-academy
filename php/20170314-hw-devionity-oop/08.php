Создать класс Car. Записать в этот класс свойства brand, model, year, driver.<br>
Создать экземпляры машин Toyota Corolla (2000), Mazda 6 (2015), Ford Taurus (1995).<br>
В рамках предыдущего задания создать экземпляры класса User для нескольких пользователей системы.<br>
В свойство driver объектов класса Car записать объекты класса User. Вывести объекты класса Car на экран при помощи var_dump(), print_r()<br>

<?php

class Car {
	
	public $brand;
	public $model;
	public $year;
	public $driver;
	
}

$toyota = new Car;
$toyota->brand = 'Toyota';
$toyota->model = 'Corolla';
$toyota->year = 2000;
	
$mazda = new Car;
$mazda->brand = 'Mazda';
$mazda->model = '6';
$mazda->year = 2015;
	
$ford = new Car;
$ford->brand = 'Ford';
$ford->model = 'Taurus';
$ford->year = 1995;

class User {
	
	public $login;
	public $password;
	public $email;
	public $rating = 0;
	
}

$a = new User;
$a->login = 'Alexander';
$a->password = '*';
$a->email = 'Alexander@gmail.com';

$b = new User;
$b->login = 'Bob';
$b->password = '**';
$b->email = 'Bob@gmail.com';

$c = new User;
$c->login = 'Can';
$c->password = '***';
$c->email = 'Can@gmail.com';

$toyota->driver = $a;
$mazda->driver = $b;
$ford->driver = $c;

echo '<pre>';
var_dump($toyota);
var_dump($mazda);
var_dump($ford);
print_r($toyota);
print_r($mazda);
print_r($ford);
echo '<pre>';

?>
