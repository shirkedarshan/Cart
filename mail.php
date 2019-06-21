
<?php
$possible = '23456789bcdfghjkmnpqrstvwxyz';
$text = '';
$i = 0;
while ($i < 5) { 
	$text .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
	$i++;
}


?>