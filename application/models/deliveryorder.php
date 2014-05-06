<?php
class deliveryorder extends CI_Model {

var $idProduct;
var $nameProduct;
var $typeProduct;
var $amountProduct;
var $customerSend;
var $customerReceive;
var $nameCCO;
var $nameTransporter;
var $nameVehicle;
var $sendCC;
var $receiveCC;
var $sendDate;
var $receiveDate;
var $statusProduct; //สถานะของสินค้า


function __construct()
{
parent::__construct();
}

	###### SET : idProduct (รหัสสินค้า) ######
	function setIdProduct($idProduct)
	{
		$this->idProduct = $idProduct;
	}

	###### GET : idProduct (รหัสสินค้า) ######
	function getIdProduct()
	{
		return $this->idProduct;
	}

		###### SET : nameProduct (ชื่อสินค้า) ######
	function setNameProduct($nameProduct)
	{
		$this->nameProduct = $nameProduct;
	}

	###### GET : nameProduct (ชื่อสินค้า) ######
	function getNameProduct()
	{
		return $this->nameProduct;
	}

		###### SET : typeProduct (ประเภทของสินค้า) ######
	function setTypeProduct($typeProduct)
	{
		$this->typeProduct = $typeProduct;
	}

	###### GET : typeProduct (ประเภทของสินค้า) ######
	function getTypeProduct()
	{
		return $this->typeProduct;
	}

		###### SET : amountProduct (จำนวนสินค้า) ######
	function setAmountProduct($amountProduct)
	{
		$this->amountProduct = $amountProduct;
	}

	###### GET : amountProduct (จำนวนสินค้า) ######
	function getAmountProduct()
	{
		return $this->amountProduct;
	}

		###### SET : customerSend (ชื่อลูกค้าที่ส่งสินค้า) ######
	function setCustomerSend($customerSend)
	{
		$this->customerSend = $customerSend;
	}

	###### GET : customerSend (ชื่อลูกค้าที่ส่งสินค้า) ######
	function getCustomerSend()
	{
		return $this->customerSend;
	}

		###### SET : customerReceive (ชื่อลูกค้าที่รับสินค้า) ######
	function setCustomerReceive($customerReceive)
	{
		$this->customerReceive = $customerReceive;
	}

	###### GET : customerReceive (ชื่อลูกค้าที่รับสินค้า) ######
	function getCustomerReceive()
	{
		return $this->customerReceive;
	}

		###### SET : nameCCO (ชื่อเจ้าหน้าที่ศูนย์ควบคุม) ######
	function setNameCCO($nameCCO)
	{
		$this->nameCCO = $nameCCO;
	}

	###### GET : nameCCO (ชื่อเจ้าหน้าที่ศูนย์ควบคุม) ######
	function getNameCCO()
	{
		return $this->nameCCO;
	}

		###### SET : nameTransporter (ชื่อพนักงานขนส่ง) ######
	function setNameTransporter($nameTransporter)
	{
		$this->nameTransporter = $nameTransporter;
	}

	###### GET : nameTransporter (ชื่อพนักงานขนส่ง) ######
	function getNameTransporter()
	{
		return $this->nameTransporter;
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

		###### SET : sendCC (ศูนย์ที่ส่งสินค้า) ######
	function setSendCC($sendCC)
	{
		$this->sendCC = $sendCC;
	}

	###### GET : sendCC (ศูนย์ที่ส่งสินค้า) ######
	function getSendCC()
	{
		return $this->sendCC;
	}

		###### SET : receiveCC (ศูนย์ที่รับสินค้า) ######
	function setReceiveCC($receiveCC)
	{
		$this->receiveCC = $receiveCC;
	}

	###### GET : receiveCC (ศูนย์ที่รับสินค้า) ######
	function getReceiveCC()
	{
		return $this->receiveCC;
	}

		###### SET : sendDate (วันที่ส่งสินค้า) ######
	function setSendDate($sendDate)
	{
		$this->sendDate = $sendDate;
	}

	###### GET : sendDate (วันที่ส่งสินค้า) ######
	function getSendDate()
	{
		return $this->sendDate;
	}

		###### SET : receiveDate (วันที่รับสินค้า) ######
	function setReceiveDate($receiveDate)
	{
		$this->receiveDate = $receiveDate;
	}

	###### GET : receiveDate (วันที่รับสินค้า) ######
	function getReceiveDate()
	{
		return $this->receiveDate;
	}

		###### SET : statusProduct (สถานะของสินค้า) ######
	function setStatusProduct($statusProduct)
	{
		$this->statusProduct = $statusProduct;
	}

	###### GET : statusProduct (สถานะของสินค้า) ######
	function getStatusProduct()
	{
		return $this->statusProduct;
	}

	function add()
		{
		$data = array(
			'idProduct' => $this->idProduct,
			'nameProduct' => $this->nameProduct,
			'typeProduct' => $this->typeProduct,
			'amountProduct' => $this->amountProduct,
			'customerSend' => $this->customerSend,
			'customerReceive' => $this->customerReceive,
			'nameCCO' => $this->nameCCO,
			'nameTransporter' => $this->nameTransporter,
			'nameVehicle' => $this->nameVehicle,
			'sendCC' => $this->sendCC,
			'receiveCC' => $this->receiveCC,
			'sendDate' => $this->sendDate,
			'receiveDate' => $this->receiveDate,
			'statusProduct' => $this->statusProduct,
			);
			$this->db->insert('deliveryorder',$data);
	}

	public function showorder()
			{
				$this->db->select('idProduct,nameProduct,typeProduct,amountProduct,customerSend,customerReceive,nameCCO,nameTransporter,
												nameVehicle,sendCC,receiveCC,sendDate,receiveDate,statusProduct');
				$query = $this->db->get('deliveryorder');
				return $query;

			}

	function search($idProduct)
	{
		$this->db->like('idProduct', $idProduct);		
		$query = $this->db->get('deliveryorder');
		
		return $query;
	}

	function transportersearch($username)
	{
		$this->db->like('nameTransporter', $username);		
		$query = $this->db->get('deliveryorder');
			
		return $query;
	}

	function deleteProduct($idProduct)
	{
		$this->db->delete('deliveryorder', array('idProduct' => $idProduct));
	}
	
}
?>
