<?php
class transporter extends CI_Model {

var $id; //ÃËÑÊª×èÍ¾¹Ñ¡§Ò¹¢¹Êè§
var $name; //ª×èÍ¾¹Ñ¡§Ò¹¢¹Êè§

function __construct()
{
parent::__construct();
}

		###### SET : id (ÃËÑÊª×èÍ¾¹Ñ¡§Ò¹¢¹Êè§) ######
	function setId($id)
	{
		$this->id = $id;
	}

	###### GET : id (ÃËÑÊª×èÍ¾¹Ñ¡§Ò¹¢¹Êè§) ######
	function getId()
	{
		return $this->id;
	}
	###### SET : name (ª×èÍ¾¹Ñ¡§Ò¹¢¹Êè§) ######
	function setName($name)
	{
		$this->name = $name;
	}

	###### GET : name (ª×èÍ¾¹Ñ¡§Ò¹¢¹Êè§) ######
	function getName()
	{
		return $this->name;
	}

}
?>
