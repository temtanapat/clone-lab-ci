<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!DOCTYPE HTML>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>SlideShow</title>
      <link href="css/style.css" rel="stylesheet" type="text/css" />
<title></title>
</head>

<body>

<form method="post" action="/~b552535009/index.php/homeshipping/search">ค้นหาจาก รหัสสินค้า
<input type="text" name="idProduct"><input type="submit" name="search" value="ค้นหา"></form><br>

<?php 

	
		foreach($order->result() as $orderall)
			{	
			?>	
				รหัสสินค้า : <?php echo $orderall->idProduct ;echo"<br />"; ?> 
							
				ชื่อสินค้า : <?php echo $orderall->nameProduct;echo"<br />"; ?>
							
				ประเภทสินค้า : <?php echo $orderall->typeProduct;echo"<br />"; ?>

				จำนวน : <?php echo $orderall->amountProduct;echo"<br />"; ?>

				ชื่อลูกค้าที่ส่งสินค้า : <?php echo $orderall->customerSend;echo"<br />"; ?>

				ชื่อลูกค้าที่รับสินค้า : <?php echo $orderall->customerReceive;echo"<br />"; ?>

				ชื่อเจ้าหน้าที่ศูนย์ควบคุม : <?php echo $orderall->nameCCO;echo"<br />"; ?>

				ชื่อพนักงานขนส่ง : <?php echo $orderall->nameTransporter;echo"<br />"; ?>

				ยานพาหนะ : <?php echo $orderall->nameVehicle;echo"<br />"; ?>

				ศูนย์ที่ส่งสินค้า : <?php echo $orderall->sendCC;echo"<br />"; ?>

				ศูนย์ที่รับสินค้า : <?php echo $orderall->receiveCC;echo"<br />"; ?>
 
				วันที่จัดส่งสินค้า : <?php echo $orderall->sendDate;echo"<br />"; ?>

				วันที่รับสินค้า : <?php echo $orderall->receiveDate;echo"<br />"; ?>

				สถานะของสินค้า : <?php echo $orderall->statusProduct;echo"<br />";

				
				echo anchor("/homeshipping/deleteProduct/".$orderall->idProduct,"ลบ",array
					("onclick"=>"javascript:return confirm('คุณต้องการลบหรือไม่ ?');"));

				
				
				echo"<br />";
				
			}
?>
			<a href="Shipping">กลับ</a>
		
</form>
</body>
</html>
