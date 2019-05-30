<?php
function multiplie($a,$b,$c,$to_words = true) {
$multiplie = $a * $b * $c ;
if ($to_words) {
echo "<p>result is .$multiplie <p/>" ;
}
	else {
		echo "it is not a number";
}
return $multiplie;
}
	
$multiplie1 = multiplie(1,3);
$multiplie1 = multiplie(4,5);

$multiplie1 = multiplie(1,"raten",false);
$multiplie1 = multiplie(5,4,5);
$multiplie1 = multiplie(3,4,5);

/*
echo "1 * 3 = " .multiplie(1,3). "<br/>";
echo "4 * 5 =" .multiplie(4,5). "<br/>";
echo "1 * raten =" . multiplie(1,raten). "<br/>";
echo "5 * 4* 5 = " .multiplie(1,3). "<br/>";
echo "3 * 4 * 5 * $$ = " .multiplie(1,3). "<br/>";
*/

