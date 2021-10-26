<!DOCTYPE html>
	<?php
		include "xuly.php";
		$s = new Tuan2();
	?>
	<?php
		if(isset($_POST["submit"])) // or $request //
		{
			if(isset($_POST["batdau"]) && isset($_POST["ketthuc"]) && $_POST["batdau"] >= 0  && $_POST["ketthuc"] >= 0)
			{
				$tien = $s -> Tinhtien ($_POST["batdau"],$_POST["ketthuc"]);
			}
		}
	?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 8</title>
    <link rel="stylesheet" type="text/css" href="../Tuan2/style2.css">
</head>
<body>
	<h1>Tuần 2 - Bài 8: Tính tiền KARAOKE</h1>
    <div id="khung">
        <div id="head">
            Tính tiền KARAOKE
		</div>
        <div id="content">
            <form action="#" name="hcn" method="post">
                <table>
                    <tr>
                        <td class="left">Giờ bắt đầu:</td>
                        <td class="right">
                            <input type="text" name="batdau" size="13"
                            Value="<?php if(isset($_POST["batdau"]) && $_POST["batdau"] >= 0) echo $_POST["batdau"] ?>" />
                            (h)
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Giờ kết thúc:</td>
                        <td class="right">
                            <input type="text" name="ketthuc" size="13"
							Value="<?php if(isset($_POST["ketthuc"]) && $_POST["ketthuc"] >= 0) echo $_POST["ketthuc"] ?>" />
                            (h)
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Tiền thanh toán:</td>
                        <td class="right">
                            <input type="text" name="tien" disabled="true" size="13"
							Value="<?php if(isset($tien)) echo $tien ?>" />
                            (VNĐ)
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" id="mix">
                            <input type="submit" name="submit" value="Tính tiền" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>