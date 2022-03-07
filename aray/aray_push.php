<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['maulana', 'maulana', 'khawarizmi', 'khawarizmi'];
	array_push($name, 'maulana');
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>