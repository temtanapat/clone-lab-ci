<?php
class controlcenter extends CI_Model {

var $id; //�����ٹ��Ǻ���
var $name; //�����ٹ��Ǻ���

function __construct()
{
parent::__construct();
}

		###### SET : id (�����ٹ��Ǻ���) ######
	function setId($id)
	{
		$this->id = $id;
	}

	###### GET : id (�����ٹ��Ǻ���) ######
	function getId()
	{
		return $this->id;
	}
	###### SET : name (�����ٹ��Ǻ���) ######
	function setName($name)
	{
		$this->name = $name;
	}

	###### GET : name (�����ٹ��Ǻ���) ######
	function getName()
	{
		return $this->name;
	}

}
?>
