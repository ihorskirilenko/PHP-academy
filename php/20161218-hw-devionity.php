<?php
echo "<b>";
echo "Задание части 19, Ассоциативные массивы";
echo "</b>, <br>";
echo "(https://devionity.com/ru/courses/php-fundamentals/php-associative-arrays)";
$states = array('USA' => 'Washingstone', 'UK' => 'London', 'Germany' => 'Berlin', 'Poland' => 'Warshaw', 'Australia' => 'Canberra');
echo '<pre>';
print_r($states);
echo '</pre>';
echo "<b>";
echo "Задание части 20, Многомерные массивы";
echo "</b>, <br>";
echo "https://devionity.com/ru/courses/php-fundamentals/php-multidimentional-arrays";
$b_name = array('S' => '"Архипелаг Гулаг"', 'D' => '"Сестра Кэрри"', 'R' => '"Три товарища"');
$b_author = array('S' => 'Солженицын', 'D' => 'Драйзер', 'R' => 'Ремарк');
$b_price = array('S' => 10.00, 'D' => 15.00, 'R' => 8.50);
$books = array($b_name, $b_author, $b_price);
echo '<pre>';
print_r($books);
echo '</pre>';
echo "<b>";
echo "Задание части 22, Константы";
echo "</b>, <br>";
echo "https://devionity.com/ru/courses/php-fundamentals/php-constants";
define('LANG_USA', 'English');
define('SQUARE_POLAND', 312679);
define('IS_MONARCHY', true);
$states_2 = array(LANG_USA, SQUARE_POLAND, IS_MONARCHY);
echo '<pre>';
print_r($states_2);
echo '</pre>';
echo "<b>";
echo "Задание части 23, Переменные переменных";
echo "</b>, <br>";
echo "https://devionity.com/ru/courses/php-fundamentals/php-variable-variables";
$hello = 'one_23';
$one_23 = 'two_23';
$two_23 = 'three_23';
$three_23 = 'four_23';
$four_23 = 'Hello, variables';
echo '<br>';
echo $$$$$hello;
?>