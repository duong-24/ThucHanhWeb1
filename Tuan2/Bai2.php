<!DOCTYPE html>
	<?php
		include "xuly.php";
		$s = new Tuan2();
	?>
	<?php
		if(isset($_POST["submit"])) // or $request //
		{
			if(isset($_POST["bankinh"]) && $_POST["bankinh"] > 0 )
			{
				$dientich = $s -> DientichHT ($_POST["bankinh"]);
                $chuvi = $s -> ChuviHT ($_POST["bankinh"]);
			}
		}
	?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2</title>
    <link rel="stylesheet" type="text/css" href="../Tuan2/style.css">
</head>
<body>
	<h1>Tuần 2 - Bài 2: Tính diện tích và chu vi hình tròn</h1>
    <div id="khung">
        <div id="head">
			DIỆN TÍCH VÀ CHU VI HÌNH TRÒN
		</div>
        <div id="content">
            <form action="#" name="hcn" method="post">
                <table>
                    <tr>
                        <td class="left">Bán kính:</td>
                        <td class="right">
                            <input type="text" name="bankinh"
							Value="<?php if(isset($_POST["bankinh"]) && $_POST["bankinh"] > 0) echo $_POST["bankinh"] ?>" />
                        </td>
                    </tr>
                     <tr>
                        <td class="left">Diện tích:</td>
                        <td class="right">
                            <input type="text" name="dientich" disabled="true"
							Value="<?php if(isset($dientich)) echo $dientich ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Chu vi:</td>
                        <td class="right">
                            <input type="text" name="chuvi" disabled="true"
							Value="<?php if(isset($chuvi)) echo $chuvi ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" id="mix">
                            <input type="submit" name="submit" value="Tính" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>