Создать класс со статическим свойством, которое будет содержать значение количества созданных экземпляров (использовать self)<br><br>

<?php

class TestStatic {
	
	private static $objectQuant = 0;
	
	public function __construct() {
		echo 'Creating an object...<br>';
		self::$objectQuant++;
	}
	
	public static function showObjectQuant() {
		return self::$objectQuant;
	}

}

$a = new TestStatic;
echo TestStatic::showObjectQuant() . '<br>';
$b = new TestStatic;
echo TestStatic::showObjectQuant() . '<br>';
$c = new TestStatic;
echo TestStatic::showObjectQuant() . '<br>';

?>