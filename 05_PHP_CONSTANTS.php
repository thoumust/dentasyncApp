<!DOCTYPE html>
<html>
<head>
	<title>05 PHP CONSTANTS</title>
</head>
<body>
	<?php
	//const eg
	define("MINSIZE", 50);
	echo MINSIZE;
	echo constant("MINSIZE");

	// Valid constant names
	define("ONE", "first thing");
	define("TWO2", "second thing");
	define("THREE_3", "third thing");

	?>
</body>
</html>