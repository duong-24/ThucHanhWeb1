<!DOCTYPE html>
	<?php
		include "xuly.php";
		$s = new Tuan2();
	?>
	<?php
		if(isset($_POST["submit"])) // or $request //
		{
			if(isset($_POST["toan"]) && isset($_POST["ly"]) && isset($_POST["hoa"]) && $_POST["toan"] >= 0  && $_POST["ly"] >= 0  && $_POST["hoa"] >= 0)
			{
				$tong = $s -> Diemdaihoc ($_POST["toan"],$_POST["ly"],$_POST["hoa"],$diemchuan,$tongdiem,$ketqua);
			}
		}
	?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 7</title>
    <link rel="stylesheet" type="text/css" href="../Tuan2/style1.css">
</head>
<body>
	<h1>Tuần 2 - Bài 7: Kết quả thi đại học</h1>
    <div id="khung">
        <div id="head">
            Kết quả thi đại học
		</div>
        <div id="content">
            <form action="#" name="hcn" method="post">
                <table>
                    <tr>
                        <td class="left">Toán:</td>
                        <td class="right">
                            <input type="text" name="toan"
                            Value="<?php if(isset($_POST["toan"]) && $_POST["toan"] >= 0) echo $_POST["toan"] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Lý:</td>
                        <td class="right">
                            <input type="text" name="ly"
							Value="<?php if(isset($_POST["ly"]) && $_POST["ly"] >= 0) echo $_POST["ly"] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Hóa:</td>
                        <td class="right">
                            <input type="text" name="hoa"
							Value="<?php if(isset($_POST["hoa"]) && $_POST["hoa"] >= 0) echo $_POST["hoa"] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Điểm chuẩn:</td>
                        <td class="right">
                            <input type="text" name="diemchuan"
							Value="<?php if(isset($_POST["diemchuan"]) && $_POST["diemchuan"] >= 0) echo $_POST["diemchuan"] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Tổng điểm:</td>
                        <td class="right">
                            <input type="text" name="tong" disabled="true"
							Value="<?php if(isset($tongdiem)) echo $tongdiem ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Kết quả thi:</td>
                        <td class="right">
                            <input type="text" name="ketqua" disabled="true"
							Value="<?php if(isset($ketqua)) echo $ketqua ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" id="mix">
                            <input type="submit" name="submit" value="Xem kết quả" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>