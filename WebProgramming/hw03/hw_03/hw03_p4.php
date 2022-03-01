<?php
/*
Kendall Castilla
WebPro Spring 2022
HW03 - Part 4
*/
echo "<head><style> table{margin-left:auto; margin-right:auto; margin-top:auto; margin-bottom:50px; 
    top:0; bottom:0; font-size:25px; font-family:verdana} </style></head>";
echo "<div style='position:relative; height:100%'>";
echo "<div style='width:75%; height:50%; margin:auto; position:absolute; 
    top:0; left: 0; bottom: 0; right: 0'>";

$rants = array('Fogo de Chão'=>40.50, 'Aviva by Kameel'=>15.00,
    "Bone's Restaurant"=>65.00, 'Umi Sushi Buckhead'=>40.50, 
    'Fandangles'=>30.00, 'Capital Grille'=>60.50, 'Canoe'=>35.50,
    'One Flew South'=>21.00, 'Fox Bros. BBQ'=>15.00,
    'South City Kitchen Midtown'=>29.00);

echo "<table width='100%' border='1px' cellpadding='1px' cellspacing='1px'>";
echo"<caption><b>Restaurants and Average Prices</b></caption>";
$arrlen = count($rants);
$rants_k = array_keys($rants);
echo "<tr>";
foreach ($rants_k as $k)
    echo "<td>$k</td>";
echo "</tr> <tr>";
foreach ($rants_k as $k)
    echo "<td>$$rants[$k]</td>";

echo "</tr> </table>";

#Function sort_keys() returns array sorted by keys
function sort_keys($arr) {
    $keys = array_keys($arr);
    $new_arr = array();

    sort($keys);
    foreach ($keys as $k)
        $new_arr[$k] = $arr[$k];
    
    return $new_arr;
}

$rants_sorted_k = sort_keys($rants);
echo "<table width='100%' border='1px' cellpadding='1px' cellspacing='1px'>";
echo"<caption><b>Sorted by Restaurants</b></caption>";

echo "<tr>";
foreach ($rants_sorted_k as $k => $v)
    echo "<td>$k</td>";
echo "</tr> <tr>";
foreach ($rants_sorted_k as $k => $v)
    echo "<td>$$v</td>";

echo "</tr>"; 
echo "</table>";


#Function sort_vals() returns array sorted by values
function sort_vals($arr) {
    $vals = array_values($arr);
    $new_arr = array();
    $temparr = array();

    foreach($arr as $k => $v) {
        $temparr[$v] = $k;
    }
    sort($vals);
    foreach ($vals as $v)
        $new_arr[$v] = $temparr[$v];
    
    return $new_arr;
}

$rants_sorted_v = sort_vals($rants);
echo "<table width='100%' border='1px' cellpadding='1px' cellspacing='1px'>";
echo"<caption><b>Sorted by Average Prices</b></caption>";

echo "<tr>";
foreach ($rants_sorted_v as $v => $k)
    echo "<td>$k</td>";
echo "</tr> <tr>";
foreach ($rants_sorted_v as $v => $k)
    echo "<td>$$v</td>";

echo "</tr>"; 
echo "</table>";

echo "</div>";
echo "</div>";

?>