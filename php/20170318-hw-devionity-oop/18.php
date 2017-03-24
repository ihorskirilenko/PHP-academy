Создать класс со статическим свойством, которое будет содержать значение количества созданных экземпляров.

<?php

class staticProperty {
	
	private static $count = 0;
	
	public function __construct() {
		
		self::$count++;
		$this->property = 'test ' . self::$count;
		
	}
	
	public static function getCount() {
		
		return self::$count;
		
	}
	
}

$a = new staticProperty;
$b = new staticProperty;

echo '<pre>';
print_r($a);
print_r($b);
echo staticProperty::getCount();
echo '<pre>';

?>