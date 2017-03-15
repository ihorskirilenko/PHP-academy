Унаследовать от класса Car из предыдущих занятий класс WaterCar со свойством waterSpeed.<br><br>

<?php
	
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

class waterCar extends Car {
	
	public $waterSpeed;
	
}

$y = new waterCar;
$y->brand = 'Yamaha';
$y->model = 'VX Cruiser';
$y->year = 2017;
echo '<pre>';
print_r($y);
echo '</pre>';

?>