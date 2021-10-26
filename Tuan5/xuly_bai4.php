<?php 
	if(isset($_REQUEST["upload"]))
	{
		$file = $_FILES["myfile"];
		// file ảnh - Kích thước <= 8MB //
        // câu a
		if($file["type"] == "image/jpeg")
		{
            // câu b
			if($file["size"] <= 8*1024*1024)
			{
                $dir = "image/Upload/"; // câu d
                //câu c
				$newname = $dir.date('Ydm')."_".$file["name"];
				$upload = move_uploaded_file($file["tmp_name"],$newname);
				if($upload)
					echo("Upload hình ảnh thành công !"."<br>");
				else
					echo("Không thể upload hình ảnh!"."<br>");
			}else{
				echo("Chỉ được upload hình ảnh nhỏ hơn 8MB !");
				}
		}else{
			echo("Chỉ được upload file jpeg !");
			}
		echo("Type: ".$file["type"]."<br>");
		echo("Name: ".$file["name"]."<br>");
		echo("Size: ".$file["size"]."<br>");
		echo("Temp: ".$file["tmp_name"]."<br>");
	}
?>