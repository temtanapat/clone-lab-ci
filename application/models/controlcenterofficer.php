<?php
class controlcenterofficer extends CI_Model {

var $id; //���ʪ������˹�ҷ���ٹ��Ǻ���
var $name; //�������˹�ҷ���ٹ��Ǻ���

function __construct()
{
parent::__construct();
}

		###### SET : id (���ʪ������˹�ҷ���ٹ��Ǻ���) ######
	function setId($id)
	{
		$this->id = $id;
	}

	###### GET : id (���ʪ������˹�ҷ���ٹ��Ǻ���) ######
	function getId()
	{
		return $this->id;
	}
	###### SET : name (�������˹�ҷ���ٹ��Ǻ���) ######
	function setName($name)
	{
		$this->name = $name;
	}

	###### GET : name (�������˹�ҷ���ٹ��Ǻ���) ######
	function getName()
	{
		return $this->name;
	}

}
?>
