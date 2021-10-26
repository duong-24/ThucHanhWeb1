<?php
	echo "<meta charset='utf8'>";
	echo "<h3>Bài 6</h3>";
	function UCLN($x,$y) {
    if ($y == 0) return $x;
    return UCLN($y, $x % $y);
}
	function BCNN($x,$y) {
    return ($x * $y) / UCLN($x, $y);
}
	$y = rand();
	$x = rand();
	echo "Số ngẫu nhiên \$x là: $x";
	echo "<br>Số ngẫu nhiên \$y là: $y" . "<br>";
	echo ("UCLN của \$x và \$y là: " . UCLN($x,$y)) . "<br>";
	echo ("BCNN của \$x và \$y là: " . BCNN($x,$y));
?>