<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['maulana', 'maulana', 'khawarizmi', 'khawarizmi'];
	array_unshift($name, 'maulana', 'is');
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>