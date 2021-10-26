<?php
	echo "<meta charset='utf8'>";
	echo "<h3>Bài 12</h3>";
//Câu a//
	echo "<b>Câu a:</b>"."<br>";
	$random = rand(1,100); // hoặc xài Hàm mt_rand () tạo ra một số nguyên ngẫu nhiên bằng cách sử dụng thuật toán Mersenne Twister.//
	// So sánh giữa 2 hàm rand() và mt_rand() //
	// Hai hàm này có chức năng như nhau, dùng để tạo các số ngẫu nhiên. Điểm khác biệt duy nhất là hàm mt_rand() nhanh hơn 4 lần so với hàm rand().//
	// Và không gian ngẫu nhiên của nó cũng rộng hơn //
	$array = array();
	$dem = 0;
	$tong = 0;
	
	for ($n=0; $n < 5 ; $n++){ 
		$array[$n] = rand(1,100).'&nbsp';
	}
	
	for ($n=0; $n < count($array) ; $n++){ 
		echo "$array[$n]";
		// Hàm is_int () kiểm tra xem một biến có kiểu số nguyên hay không //
			if (is_int($array[$n]/2)){
				$dem = $dem + 1 ;
			}else{
				$tong = $tong + $array[$n];
			}
	}
	// Gán min và max cho 2 biến a và b //
	$a = min($array);
	$b = max($array);
	
	//sort($array); Sắp xếp một mảng//
	
//Câu b//	
	echo "<br>"."<b>Câu b:</b>"."<br>";
	echo "Số chẵn trong mảng là: $dem số";
//Câu c//	
	echo "<br>"."<b>Câu c:</b>"."<br>";
	echo "Tổng các số lẻ trong mảng là: $tong";
//Câu d//
	echo "<br>"."<b>Câu d:</b>"."<br>";
	echo "Min và Max của mảng lần lượt là: $a , $b";
//Câu e//
	echo "<br>"."<b>Câu e:</b>"."<br>";
	print_r(array_reverse($array));
?>