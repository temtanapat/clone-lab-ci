<?php
class transporter extends CI_Model {

var $id; //���ʪ��;�ѡ�ҹ����
var $name; //���;�ѡ�ҹ����

function __construct()
{
parent::__construct();
}

		###### SET : id (���ʪ��;�ѡ�ҹ����) ######
	function setId($id)
	{
		$this->id = $id;
	}

	###### GET : id (���ʪ��;�ѡ�ҹ����) ######
	function getId()
	{
		return $this->id;
	}
	###### SET : name (���;�ѡ�ҹ����) ######
	function setName($name)
	{
		$this->name = $name;
	}

	###### GET : name (���;�ѡ�ҹ����) ######
	function getName()
	{
		return $this->name;
	}

}
?>
