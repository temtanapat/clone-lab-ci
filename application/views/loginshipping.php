<!DOCTYPE>

<html xmlns="http://www.w3.org/1999/xhtml">

 <head>

   <title>Shipping & Delivery</title>

 </head>

 <body>

   <center><h1>Shipping & Delivery</h1></center>

	<center><form method="post" action="index.php/homeshipping/customersearch/">���Ҩҡ �����Թ���
	<input type="text" name="idProduct"><input type="submit" name="search" value="����"></form></center><br>

   <?php echo validation_errors(); ?>
   <?php echo form_open('verifyloginshipping'); ?><br>
	

	***੾�о�ѡ�ҹ��ҹ��***<br>
     <label for="username">Username:</label>

     <input type="text" size="20" id="username" name="username"/>

    <br/>

     <label for="password">Password:</label>

     <input type="password" size="20" id="passowrd" name="password"/>

     <br/>

     <input type="submit" value="Login"/>

   </form>

 </body>

</html>
