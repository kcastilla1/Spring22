<?PHP

/*
* Kendall Castilla
* WebPro Spring 2022
* 25 February 2022
* CW04 Part I
*/

#Exercise 1
function hello_world() {
	echo "Hello world!";
}

#Exercise 2
for($i=0; $i<5; $i++) {
	for($j=0; $j<$i+1; $j++) {
		echo "*";
	}
	echo "<br>";
}

#Exercise 3
function triangle(int $h) {
	for($i=0; $i<$h; $i++) {
		for($j=0; $j<$i+1; $j++) {
			echo "*";
		}
		echo "<br>";
	}
}

#Exercise 4
function word_count($str) {
	if(strlen($str) < 1) {
		return 0;
	}
	$count = 1;
	for($i=0; $i < strlen($str); $i++) {
		$ch = $str[$i];
		if ($ch==" ") {
			$count++;
		}
	}
	return $count;
}

#Exercise 5
function countWords($str) {
	$arr = array();
	$word = "";
    $len = strlen($str);
	for($i=0; $i < $len; $i++) {
		$ch = $str[$i];
		if ($ch==" " || $i==($len-1)) {
        	if($i==($len-1)) {
            	$word = $word.$ch;
            }
			if (array_key_exists($word, $arr)) {
				$arr[$word]++;
			}
			else {
				$arr[$word] = 1;
			}
            $word="";
		}
		else {
			$word = $word.$ch;
		}
	}
	return $arr;
}

#Exercise 6
function remove_all($str, $ch) {
	$newstr = "";
	for($i=0; $i < strlen($str); $i++) {
		if($str[$i] != $ch) {
			$newstr = $newstr.$str[$i];
		}
	}
	return $newstr;
}


?>