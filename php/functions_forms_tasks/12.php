<p>12. �������� �������, ������� � �������� ��������� ��������� ������, � ����������� �� ����� �������, ��� ����������� ���� � �������� �������.
������:

������� ������: '� ������ ������� �� ���. � ��� � ���� ���. � �� ������ ��� �� ��������, ��� � ��������� �� ��������.
� ������-�� � �����. � ������ ������ ����������. � ��� ���� ����� �� �����.';</p>

<form method="post" action="12.php">
	<textarea name="text1" cols=50 rows=5></textarea>
	<br><input type="submit"/>
</form>

<?php
header ("Content-Type: text/html; charset=windows-1251");
setlocale(LC_ALL, 'ru_RU.CP1251', 'rus_RUS.CP1251', 'Russian_Russia.1251');
$a = ($_POST['text1']);

function getSentReplace ($a) {
	$a = preg_replace('@[.]+@', '' , explode('. ', $a));
	$a = array_reverse($a);
	return implode('. ', ($a)) . '.';
}

echo "<pre>";
print_r(getSentReplace($a));
echo "</pre>";

?>