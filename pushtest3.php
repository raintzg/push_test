<?php
$animals = array('Rat', 'Ox', 'Tiger', 'Rabbit', 'Dragon', 'Snake', 'Horse', 'Sheep', 'Monkey', 'Rooster', 'Dog', 'Boar');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>課題20</title>
</head>
<body>
<h1>十二支</h1>
<?php
foreach ($animals as $value) {
	echo $value;
}
?>
</body>
</html>
