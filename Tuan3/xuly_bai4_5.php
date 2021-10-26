<?php
    // Bài 4//
    if(isset($_GET['n']))
    {
        $n=$_GET['n'];
        $tong=0;
        for($i=1;$i<=$n;$i++)
        {
            $tong+=$i;
        }          
    }
    // Bài 5//
    function tinhgiaithua($n) 
    {
        $giai_thua = 1;
        if ($n == 0 || $n == 1) {
            return $giai_thua;
        } else {
            for($i = 2; $i <= $n; $i ++) {
                $giai_thua *= $i;
            }
            return $giai_thua;
        }
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 4-5</title>
</head>
<body>
    <h1>Tuần 3 - Bài 4-5</h1>
    <form action="xuly_bai4_5.php">
        <table>
            <tr>
                <td colspan="2">
                    <p style="text-align: center;">1+2+3+…+n</p>
                </td>
            </tr>
            <!-- Bài 4 --> 
            <tr>
                <td>Tổng n:</td>
                <td>
                    <input type="text" value="<?php echo $tong?>" name="" id="">
                </td>
            </tr> 
            <!-- Bài 5 --> 
            <tr>
                <td>Giai thừa:</td>
                <td>
                    <input type="text" value="<?php echo  tinhgiaithua($n)?>" name="" id="">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>