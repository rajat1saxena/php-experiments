<?php
$a = true;
$b = true;
$c = false;
if ($a && $b && $c) {
	echo "1";
} elseif ($a && $b && !$c) {
	echo "2";
} elseif (!$a && !$b && $c) {
	echo "3";
} else {
	echo "4";
}
?>
