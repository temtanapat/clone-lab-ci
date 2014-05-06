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
var $statusProduct; //ʶҹТͧ�Թ���


function __construct()
{
parent::__construct();
}

	###### SET : idProduct (�����Թ���) ######
	function setIdProduct($idProduct)
	{
		$this->idProduct = $idProduct;
	}

	###### GET : idProduct (�����Թ���) ######
	function getIdProduct()
	{
		return $this->idProduct;
	}

		###### SET : nameProduct (�����Թ���) ######
	function setNameProduct($nameProduct)
	{
		$this->nameProduct = $nameProduct;
	}

	###### GET : nameProduct (�����Թ���) ######
	function getNameProduct()
	{
		return $this->nameProduct;
	}

		###### SET : typeProduct (�������ͧ�Թ���) ######
	function setTypeProduct($typeProduct)
	{
		$this->typeProduct = $typeProduct;
	}

	###### GET : typeProduct (�������ͧ�Թ���) ######
	function getTypeProduct()
	{
		return $this->typeProduct;
	}

		###### SET : amountProduct (�ӹǹ�Թ���) ######
	function setAmountProduct($amountProduct)
	{
		$this->amountProduct = $amountProduct;
	}

	###### GET : amountProduct (�ӹǹ�Թ���) ######
	function getAmountProduct()
	{
		return $this->amountProduct;
	}

		###### SET : customerSend (�����١��ҷ�����Թ���) ######
	function setCustomerSend($customerSend)
	{
		$this->customerSend = $customerSend;
	}

	###### GET : customerSend (�����١��ҷ�����Թ���) ######
	function getCustomerSend()
	{
		return $this->customerSend;
	}

		###### SET : customerReceive (�����١��ҷ���Ѻ�Թ���) ######
	function setCustomerReceive($customerReceive)
	{
		$this->customerReceive = $customerReceive;
	}

	###### GET : customerReceive (�����١��ҷ���Ѻ�Թ���) ######
	function getCustomerReceive()
	{
		return $this->customerReceive;
	}

		###### SET : nameCCO (�������˹�ҷ���ٹ��Ǻ���) ######
	function setNameCCO($nameCCO)
	{
		$this->nameCCO = $nameCCO;
	}

	###### GET : nameCCO (�������˹�ҷ���ٹ��Ǻ���) ######
	function getNameCCO()
	{
		return $this->nameCCO;
	}

		###### SET : nameTransporter (���;�ѡ�ҹ����) ######
	function setNameTransporter($nameTransporter)
	{
		$this->nameTransporter = $nameTransporter;
	}

	###### GET : nameTransporter (���;�ѡ�ҹ����) ######
	function getNameTransporter()
	{
		return $this->nameTransporter;
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

		###### SET : sendCC (�ٹ�������Թ���) ######
	function setSendCC($sendCC)
	{
		$this->sendCC = $sendCC;
	}

	###### GET : sendCC (�ٹ�������Թ���) ######
	function getSendCC()
	{
		return $this->sendCC;
	}

		###### SET : receiveCC (�ٹ�����Ѻ�Թ���) ######
	function setReceiveCC($receiveCC)
	{
		$this->receiveCC = $receiveCC;
	}

	###### GET : receiveCC (�ٹ�����Ѻ�Թ���) ######
	function getReceiveCC()
	{
		return $this->receiveCC;
	}

		###### SET : sendDate (�ѹ������Թ���) ######
	function setSendDate($sendDate)
	{
		$this->sendDate = $sendDate;
	}

	###### GET : sendDate (�ѹ������Թ���) ######
	function getSendDate()
	{
		return $this->sendDate;
	}

		###### SET : receiveDate (�ѹ����Ѻ�Թ���) ######
	function setReceiveDate($receiveDate)
	{
		$this->receiveDate = $receiveDate;
	}

	###### GET : receiveDate (�ѹ����Ѻ�Թ���) ######
	function getReceiveDate()
	{
		return $this->receiveDate;
	}

		###### SET : statusProduct (ʶҹТͧ�Թ���) ######
	function setStatusProduct($statusProduct)
	{
		$this->statusProduct = $statusProduct;
	}

	###### GET : statusProduct (ʶҹТͧ�Թ���) ######
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
