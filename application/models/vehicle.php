<?php
class vehicle extends CI_Model {

var $id; //�����ҹ��˹�
var $nameVehicle; //�����ҹ��˹�

function __construct()
{
parent::__construct();
}
		###### SET : id (�����ҹ��˹�) ######
	function setId($id)
	{
		$this->id = $id;
	}

	###### GET : id (�����ҹ��˹�) ######
	function getId()
	{
		return $this->id;
	}

		###### SET : nameVehicle (�����ҹ��˹�) ######
	function setNameVehicle($nameVehicle)
	{
		$this->nameVehicle = $nameVehicle;
	}

	###### GET : nameVehicle (�����ҹ��˹�) ######
	function getNameVehicle()
	{
		return $this->nameVehicle;
	}

}
?>
