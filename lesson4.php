<?php setcookie('day', 'happy'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<pre>
<?php
print_r($_REQUEST);

function printSelect($myArray, $name, $options) {
	$val = $myArray[$name];

	$result = '';
	$selected = '';

	foreach ($options as $key => $text) {
		if ($key == $val) {
			$selected = 'selected';
		} else {
			$selected = '';
		}

		$result .= "<option " . $selected . " value=" . $key . ">" . $text . "</option>";
	}

	echo "<select name=" . $name . ">" . $result . "</select>";
}
?>
</pre>
	<form method="REQUEST">
		<label for="first-name">Имя:&nbsp;</label>
		<input value="<?php echo $_REQUEST['first-name']; ?>" name="first-name" id="first-name">
		<br>
		<label>Домашние животные: </label>
			<?php printSelect($_REQUEST, 'animals', array(
				'Dog' => 'Собака',
				'Cat' => 'Кошка',
			)); ?> 
		<br>
		<label>Автомобиль: </label>
			<?php printSelect($_REQUEST, 'cars', array(
				'BMW' => 'БМВ',
				'Mersedes' => 'Мерседес',
			)); ?>
		<br>
		<input type="submit" value="Send">
	</form>
</body>
</html>
