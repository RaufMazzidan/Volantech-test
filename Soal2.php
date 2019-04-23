<?php
$a = 'programmerit';
$x =  array("pro", "gram", "merit", "program", "it", "programmer");
for ($i=0; $i < count($x) ; $i++) { 
	if (strrpos($a, $x[$i]) !== false) {
		echo $x[$i].' ';
	}
}
?>