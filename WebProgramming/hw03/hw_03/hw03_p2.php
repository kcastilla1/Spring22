<?php
/*
Kendall Castilla
WebPro Spring 2022
HW03 - Part 2
*/

echo "<div style='position:relative; height:100%'>";
echo "<div style='width:50%; height:50%; margin:auto; position:absolute; top:0; left: 0; bottom: 0; right: 0'>";

echo "<table width='300px' border='1px' cellpadding='1px' cellspacing='1px' style='margin:auto; top:0; bottom:0'>";
for ($rank = 0; $rank < 8; $rank++) {
	echo "<tr>";
	for ($file = 0; $file < 8; $file++) {
		$square = $rank + $file;
		if($square % 2 == 0)
			echo "<td height='35px' width='35px' bgcolor='red'></td>";
		else
			echo "<td height='35px' width='35px' bgcolor='black'></td>";
	}
	echo "</tr>";
}
echo "</table>";
echo "</div>";
echo "</div>";

?>