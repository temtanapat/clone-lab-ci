<?php
class status extends CI_Model {

var $id; //รหัสของสถานะ
var $statusProduct; //สถานะสินค้า

function __construct()
{
parent::__construct();
}

		###### SET : id (รหัสของสถานะ) ######
	function setId($id)
	{
		$this->id = $id;
	}

	###### GET : id (รหัสของสถานะ) ######
	function getId()
	{
		return $this->id;
	}

		###### SET : statusProduct (สถานะสินค้า) ######
	function setStatusProduct($statusProduct)
	{
		$this->statusProduct = $statusProduct;
	}

	###### GET : statusProduct (สถานะสินค้า) ######
	function getStatusProduct()
	{
		return $this->statusProduct;
	}

}
?>
