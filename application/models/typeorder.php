<?php
class typeorder extends CI_Model {

var $id; //รหัสประเภทสินค้า
var $typeorder; //ประเภทสินค้า

function __construct()
{
parent::__construct();
}

		###### SET : id (รหัสประเภทสินค้า) ######
	function setId($id)
	{
		$this->id = $id;
	}

	###### GET : id (รหัสประเภทสินค้า) ######
	function getId()
	{
		return $this->id;
	}
	###### SET : typeorder (ประเภทสินค้า) ######
	function setTypeorder($typeorder)
	{
		$this->typeorder = $typeorder;
	}

	###### GET : typeorder (ประเภทสินค้า) ######
	function getTypeorder()
	{
		return $this->typeorder;
	}

}
?>
