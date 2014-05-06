<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class homeshipping extends CI_Controller {

 function __construct()
 {
   parent::__construct();

   $this->load->helper(array('form','url'));
 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $this->load->view('homeshipping', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('loginshipping', 'refresh');
   }
 }

 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('loginshipping','refresh');
 }

  function setShipping()
 {
   $this->load->view('setshipping');
 }

   function Shipping()
 {
   $this->load->view('adminshipping');
 }

  	public function addorder(){
			
		$this->load->database();
		$this->load->model("deliveryorder");
			
		$this->deliveryorder->setIdProduct($this->input->post('idProduct'));
		$this->deliveryorder->setNameProduct($this->input->post('nameProduct'));
		$this->deliveryorder->setTypeProduct($this->input->post('typeProduct'));
		$this->deliveryorder->setAmountProduct($this->input->post('amountProduct'));
		$this->deliveryorder->setCustomerSend($this->input->post('customerSend'));
		$this->deliveryorder->setCustomerReceive($this->input->post('customerReceive'));
		$this->deliveryorder->setNameCCO($this->input->post('nameCCO'));
		$this->deliveryorder->setNameTransporter($this->input->post('nameTransporter'));
		$this->deliveryorder->setNameVehicle($this->input->post('nameVehicle'));
		$this->deliveryorder->setSendCC($this->input->post('sendCC'));
		$this->deliveryorder->setReceiveCC($this->input->post('receiveCC'));
		$this->deliveryorder->setSendDate($this->input->post('sendDate'));
		$this->deliveryorder->setReceiveDate($this->input->post('receiveDate'));
		$this->deliveryorder->setStatusProduct($this->input->post('statusProduct'));

			
		$this->load->view('reserveaddorder');

		$this->deliveryorder->add();
			
	}

	function showorder(){

		
		$this->load->database();
		$this->load->model("deliveryorder");

		$data['order'] = $this->deliveryorder->showorder();
	
		$this->load->view('showallorder', $data);

	}

	function search()
	{
		
		$this->load->database();
		$this->load->model("deliveryorder");

		$idProduct = $this->input->post('idProduct');
		
		$data['order']=$this->deliveryorder->search($idProduct);
		$this->load->view('showallorder', $data);		
	}

	function customersearch()
	{
		
		$this->load->database();
		$this->load->model("deliveryorder");

		$idProduct = $this->input->post('idProduct');
		
		$data['order']=$this->deliveryorder->search($idProduct);
		$this->load->view('customersearch', $data);		
	}

	function deleteProduct($idProduct)
	{
		
		$this->load->database();
		$this->load->model("deliveryorder");

		$this->deliveryorder->deleteProduct($idProduct);
		
		redirect("/homeshipping/showorder","refresh");
		exit();
	}

	function receiveProduct()
	{
		$this->load->database();
		$this->load->model("deliveryorder");

		$data['order'] = $this->deliveryorder->showorder();

		$this->load->view('receiveproduct');
	}
	
	function transporterSearch($username)
	{
		
		$this->load->database();
		$this->load->model("deliveryorder");

		$data['order']=$this->deliveryorder->transportersearch($username);
		$this->load->view('receiveproduct', $data);		
	}
	
	
}

?>

