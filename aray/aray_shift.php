<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['maulana', 'maulana', 'khawarizmi', 'khawarizmi'];
	array_shift($name);
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>