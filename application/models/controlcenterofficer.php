<?php
class controlcenterofficer extends CI_Model {

var $id; //รหัสชื่อเจ้าหน้าที่ศูนย์ควบคุม
var $name; //ชื่อเจ้าหน้าที่ศูนย์ควบคุม

function __construct()
{
parent::__construct();
}

		###### SET : id (รหัสชื่อเจ้าหน้าที่ศูนย์ควบคุม) ######
	function setId($id)
	{
		$this->id = $id;
	}

	###### GET : id (รหัสชื่อเจ้าหน้าที่ศูนย์ควบคุม) ######
	function getId()
	{
		return $this->id;
	}
	###### SET : name (ชื่อเจ้าหน้าที่ศูนย์ควบคุม) ######
	function setName($name)
	{
		$this->name = $name;
	}

	###### GET : name (ชื่อเจ้าหน้าที่ศูนย์ควบคุม) ######
	function getName()
	{
		return $this->name;
	}

}
?>
