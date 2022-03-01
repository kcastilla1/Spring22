<?php
/*
Kendall Castilla
WebPro Spring 2022
HW03 - Part 3
*/

echo "<div style='position:relative; height:100%'>";
echo "<div style='width:85%; height:50%; margin:auto; position:absolute; 
    top:0; left: 0; bottom: 0; right: 0; font-size:30px; font-family:verdana'>";

$month = array('January', 'February', 'March', 'April',
 'May', 'June', 'July', 'August',
 'September', 'October', 'November', 'December');

 #Standard for-loop
 echo "<b>Printing using standard for-loop (original and alphabetically sorted):<br>1. </b>";
for ($m=0; $m<count($month); $m++) {
    echo "$month[$m] ";
}
echo "<br><b>2. </b>";

sort($month);
for ($m=0; $m<count($month); $m++) {
    echo "$month[$m] ";
}

echo "<br><br>";

$month = array('January', 'February', 'March', 'April',
 'May', 'June', 'July', 'August',
 'September', 'October', 'November', 'December');

#Foreach-loop
echo "<b>Printing using foreach-loop (original and alphabetically sorted):<br>1. </b>";
foreach($month as $m)
    echo "$m ";
echo "<br><b>2. </b>";
sort($month);
foreach($month as $m)
echo "$m ";

echo "</div>";
echo "</div>";

?>