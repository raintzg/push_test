<?php
$pet = array('animal' => '犬', 'name' => 'ポチ', 'owner' => '花子');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>課題20</title>
</head>
<h1>pet</h1>
<?php echo $pet['animal'] . 'の' . $pet['name'] . 'は' . $pet['owner'] . 'のペットです。'; ?>
</body>
</html>
