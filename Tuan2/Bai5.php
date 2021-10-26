<!DOCTYPE html>
	<?php
		include "xuly.php";
		$s = new Tuan2();
	?>
	<?php
		if(isset($_POST["submit"])) // or $request //
		{
			if(isset($_POST["soa"]) && isset($_POST["sob"]))
			{
				$nghiem = $s -> ptb1 ($_POST["soa"],$_POST["sob"]);
			}
		}
	?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 5</title>
    <link rel="stylesheet" type="text/css" href="../Tuan2/style.css">
</head>
<body>
	<h1>Tuần 2 - Bài 5: Giải phương trình bậc nhất</h1>
    <div id="khung">
        <div id="head">
            Giải phương trình bậc nhất
		</div>
        <div id="content">
            <form action="#" name="hcn" method="post">
                <table>
                    <tr>
                        <td class="left">Phương trình:</td>
                        <td class="right">
                            <input type="text" name="soa" size="1"
							Value="<?php if(isset($_POST["soa"])) echo $_POST["soa"] ?>" />
                            x +
                            <input type="text" name="sob" size="1"
							Value="<?php if(isset($_POST["sob"])) echo $_POST["sob"] ?>" />
                            = 0
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Nghiệm:</td>
                        <td class="right">
                            <input type="text" name="nghiem" disabled="true"
							Value="<?php if(isset($nghiem)) echo $nghiem ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" id="mix">
                            <input type="submit" name="submit" value="Giải phương trình" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>