<?php
/*
Kendall Castilla
WebPro Spring 2022
HW03 - Part 2
*/

echo "<head><style>p{font-size:70px; font-family:verdana; text-align:center; margin-top:auto; margin-bottom:auto}</style></p></head>";

function isBitten() {
	$result = rand(1, 2);
	if ($result == 1) {
		return TRUE;
	}
	else {
		return FALSE;
	}
}

$bit = isBitten();
if($bit==TRUE) {
	echo "<p>Charlie ate my lunch!</p>";
}
else {
	echo "<p>Charlie did not eat my lunch!</p>";
}

?>