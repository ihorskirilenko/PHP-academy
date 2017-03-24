Создать класс Fraction, который моделирует простую дробь с числителем и знаменателем.<br>
Определить методы конструктор, сокращения дроби и представления дроби в десятичном виде.<br>
Определить статические методы для арифметических операций с двумя дробями.<br><br>

<?php

class Fraction {
	
	public function __construct($numerator, $denominator) {
		if(is_int((int)$numerator) && is_int((int)$denominator)) {
			try {
				if ($numerator == 0 || $denominator ==0) {
					throw new Exception('ZERO!!');
				}
			}
			catch(Exception $e) {
				echo $e->getMessage();
			}			

			$this->n = $numerator;
			$this->d = $denominator;
		}
		else {
			echo die('Неверный формат ввода!');
		}
	}
	
	public function showFraction() {
		return $this->n . '/' . $this->d;
	}
	
	public function showFractionDecimal() {
		return $this->n / $this->d;
	}
	
	public function gcd() {
		$a = abs($this->n);
		$b = abs($this->d);
		return $this->gcd_r($a, $b);
	}
	
	private function gcd_r($a, $b) {
		return ($a % $b) ? $this->gcd_r($b, $a % $b) : $b;
	}

	public function fractionReduction() {
		return $this->n / $this->gcd() . '/' . $this->d / $this->gcd();
	}

	public static function f_Add($a, $b) {
		$res = new Fraction(1, 1);
		$res->n = ($a->n * $b->d) + ($b->n * $a->d);
		$res->d = ($a->d * $b->d);
		return $res->fractionReduction();
	}

	public static function f_Sub($a, $b) {
		$res = new Fraction(1, 1);
		$res->n = ($a->n * $b->d) - ($b->n * $a->d);
		$res->d = ($a->d * $b->d);
		return $res->fractionReduction();
	}

	public static function f_Mult($a, $b) {
		$res = new Fraction(1, 1);
		$res->n = ($a->n * $b->n);
		$res->d = ($a->d * $b->d);
		return $res->fractionReduction();
	}
	
	public static function f_Div($a, $b) {
		$res = new Fraction(1, 1);
		$res->n = ($a->n * $b->d);
		$res->d = ($a->d * $b->n);
		return $res->fractionReduction();
	}

}

$a = new Fraction(30, 18);
$b = new Fraction(3, 5);
echo 'Показать дробь: ' . $a->showFraction() . '<br>';
echo 'Показать десятичную дробь: ' . $a->showFractionDecimal() . '<br>';
echo 'Показать НОД дроби: ' . $a->gcd() . '<br>';
echo 'Показать сокращенную дробь: ' . $a->fractionReduction() . '<br>';
echo Fraction::f_Div($a, $b);

?>