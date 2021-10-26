<?php 
    class Tuan2 {
            //Bài 1//
        function DientichHCN($dai, $rong)
        {
            return $dai * $rong;
        }
            //Bài 2//
        function DientichHT($bankinh)
        {
            return pi()*pow($bankinh,2);
        }
        function ChuviHT($bankinh)
        {
            return pi()*$bankinh*2;
        }
            //Bài 3//
        function Loaitamgiac($a,$b,$c)
        {
            if($a<$b+$c && $b<$a+$c && $c<$a+$b)
            {
                if($a*$a==$b*$b+$c*$c || $b*$b==$a*$a+$c*$c || $c*$c==$a*$a+$b*$b)
                    return "Tam giác vuông";
                else if($a==$b && $a==$c)
                    return "Tam giác đều";
                else if($a==$b && $a==$c && $b==$c)
                    return "Tam giác cân";
                else if($a*$a > $b*$b+$c*$c || $b*$b > $a*$a+$c*$c || $c*$c > $a*$a+$b*$b)
                    return "Tam giác tù";
                else 
                    return "Tam giác nhọn";
            }else
                return "Không phải là tam giác";
        }
            //Bài 4//
        function Tinhcanhhuyen($a,$b)
        {
            return sqrt(pow($a,2)+pow($b,2));
        }
            //Bài 5//
        function ptb1($a,$b)
        {
            if ($a==0){
                if ($b==0)
                    return "Vô số nghiệm";
                else
                    return "Vô nghiệm";
            }else
                return "x = ".(-$b/$a);
        }
            //Bài 6//
        function Ketquahoctap($hk1,$hk2, & $trungbinh, & $ketqua, & $xeploai)
        {
            $trungbinh = ($hk1 + $hk2 * 2)/3;
            if ($trungbinh >= 5)
                $ketqua = "Được lên lớp";
            else
                $ketqua = "Ở lại lớp";
            if ($trungbinh >= 8)
                $xeploai = "Giỏi";
            else if ($trungbinh >= 6.5)
                $xeploai = "Khá";
            else if ($trungbinh >= 5)
                $xeploai = "Trung bình";
            else
                $xeploai = "Yếu";
        }
            //Bài 7//
        function Diemdaihoc($toan, $ly, $hoa, $chuan, & $tong, & $ketqua)
        {
            $tong = $toan + $ly + $hoa;
            if ($tong < $chuan || $toan==0 || $ly==0 || $hoa==0)
                $ketqua = "Rớt";
            else
                $ketqua = "Đậu";
        }
            //Bài 8//
        function Tinhtien($giovao, $giora)
        {
            if($giora > $giovao){
                if($giovao<10 || $giora>24){
                    return "Đang là giờ nghỉ";
                }
                else if($giovao >= 10 && $giora <=17){
                    return ($giora - $giovao)*20000;
                }
                else if($giovao >= 17 && $giora <= 24){
                    return ($giora - $giovao)*45000;
                }
            }else {
                echo "Giờ kết thúc phải lớn hơn giờ bắt đầu";
            }
        }
    }
?>