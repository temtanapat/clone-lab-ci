<?php
class status extends CI_Model {

var $id; //���ʢͧʶҹ�
var $statusProduct; //ʶҹ��Թ���

function __construct()
{
parent::__construct();
}

		###### SET : id (���ʢͧʶҹ�) ######
	function setId($id)
	{
		$this->id = $id;
	}

	###### GET : id (���ʢͧʶҹ�) ######
	function getId()
	{
		return $this->id;
	}

		###### SET : statusProduct (ʶҹ��Թ���) ######
	function setStatusProduct($statusProduct)
	{
		$this->statusProduct = $statusProduct;
	}

	###### GET : statusProduct (ʶҹ��Թ���) ######
	function getStatusProduct()
	{
		return $this->statusProduct;
	}

}
?>
