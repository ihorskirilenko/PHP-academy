<?php
$a = false;
$b = 3.654;
$c = '-2 items';
$d = ' 0.5kg';
$e = 'Added 10 points ';

// 0, 3, -2, 0.5, 0
var_dump( (int)$a, (int)$b, (int)$c, (float)$d, (float)$e );
	//Add while loop below
    $coin_coup = 0;
    $coin_H = 0;
    while ($coin_H < 3) {
		$h = rand(0,1);
		$coin_coup = $coin_coup + 1;
        if ($h == 1) {
            $coin_H = $coin_H + 1;
            echo "H";
        }
		else {
			echo "T";
		}
    }
	echo "Coin coup = $coin_coup";
        $i = 1;
        do {
            echo "<br> $i";
            $i + 1;
        } while ($i == 5);
// $mystring = 'somesing';
// $mystring = $myvar + 10;
// echo $mystring;
// echo "STATUS";
// LINE
// FILE
// DIR
?>
