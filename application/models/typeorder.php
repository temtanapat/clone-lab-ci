<?php
class typeorder extends CI_Model {

var $id; //���ʻ������Թ���
var $typeorder; //�������Թ���

function __construct()
{
parent::__construct();
}

		###### SET : id (���ʻ������Թ���) ######
	function setId($id)
	{
		$this->id = $id;
	}

	###### GET : id (���ʻ������Թ���) ######
	function getId()
	{
		return $this->id;
	}
	###### SET : typeorder (�������Թ���) ######
	function setTypeorder($typeorder)
	{
		$this->typeorder = $typeorder;
	}

	###### GET : typeorder (�������Թ���) ######
	function getTypeorder()
	{
		return $this->typeorder;
	}

}
?>
