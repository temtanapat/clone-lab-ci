<?php
class vehicle extends CI_Model {

var $id; //รหัสยานพาหนะ
var $nameVehicle; //ชื่อยานพาหนะ

function __construct()
{
parent::__construct();
}
		###### SET : id (รหัสยานพาหนะ) ######
	function setId($id)
	{
		$this->id = $id;
	}

	###### GET : id (รหัสยานพาหนะ) ######
	function getId()
	{
		return $this->id;
	}

		###### SET : nameVehicle (ชื่อยานพาหนะ) ######
	function setNameVehicle($nameVehicle)
	{
		$this->nameVehicle = $nameVehicle;
	}

	###### GET : nameVehicle (ชื่อยานพาหนะ) ######
	function getNameVehicle()
	{
		return $this->nameVehicle;
	}

}
?>
