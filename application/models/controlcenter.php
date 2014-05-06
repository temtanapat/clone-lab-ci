<?php
class controlcenter extends CI_Model {

var $id; //ÃËÑÊÈÙ¹Âì¤Çº¤ØÁ
var $name; //ª×èÍÈÙ¹Âì¤Çº¤ØÁ

function __construct()
{
parent::__construct();
}

		###### SET : id (ÃËÑÊÈÙ¹Âì¤Çº¤ØÁ) ######
	function setId($id)
	{
		$this->id = $id;
	}

	###### GET : id (ÃËÑÊÈÙ¹Âì¤Çº¤ØÁ) ######
	function getId()
	{
		return $this->id;
	}
	###### SET : name (ª×èÍÈÙ¹Âì¤Çº¤ØÁ) ######
	function setName($name)
	{
		$this->name = $name;
	}

	###### GET : name (ª×èÍÈÙ¹Âì¤Çº¤ØÁ) ######
	function getName()
	{
		return $this->name;
	}

}
?>
