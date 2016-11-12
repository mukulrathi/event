<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_controller
{
	 function __construct()
    {
    	parent::__construct();
    	$this->load->model('Usermodel');
    }	
function index()
{
	
$this->load->view('listingform');


}
function checkform()
{
$this->form_validation->set_rules('name1','Name','required|trim');
$this->form_validation->set_rules('number1','Contact Number','required|trim');
$this->form_validation->set_rules('email1','Email','required|trim');
$this->form_validation->set_rules('venuename1','Venue name','required|trim');
$this->form_validation->set_rules('address1','Address Details','required|trim');
$this->form_validation->set_rules('price1','Costing','required|trim');
$this->form_validation->set_rules('user','User','required|trim',array('required'=>'Enter username'));
$this->form_validation->set_rules('pass','Password','required|trim');
$this->form_validation->set_rules('pass1','Confirm password','required|trim|matches[pass]');
if($this->form_validation->run() == FALSE)
{
	$this->index();

}
else
{
	$data = array('name'=>$this->input->post('name1'),
                  'number'=>$this->input->post('number1'),
                  'email'=>$this->input->post('email1'),
                  'venuename'=>$this->input->post('venuename1'),
                  'address'=>$this->input->post('address1'),
                  'price'=>$this->input->post('price1'),
                  'user'=>$this->input->post('user'),
                  'status'=>('0'),
                  'pass'=>$this->input->post('pass'));


$query = $this->Usermodel->insert_venue($data);
echo $query ?'inserted'  :'not ';
}
}
function checkdetails()
{
	$this->form_validation->set_rules('name11','Username','required|trim|callback_usernamecheck');
	$this->form_validation->set_rules('name21','Password','required|trim|callback_checkstatus');
	if($this->form_validation->run() == FALSE)
	{
		$this->index();
	}
	else
	{

	}
}
function usernamecheck($name)
{
	$pass = $this->input->post('name21');
	$query = $this->Usermodel->checkusername($name,$pass);
  if($query)
  {
$data = array('id'=>$query->id,'name'=>$query->name);
$this->load->library('session');
$data  = $this->session->set_userdata($data);
redirect('client/profileview');
  }
  else{
  	$this->form_validation->set_message('usernamecheck','Invalid username/password combination');
  	return false ;
  }
}
function checkstatus($pass)
{
	$pass = $this->input->post('name21');	
	$email = $this->input->post('name11');
	$query = $this->Usermodel->checkstatus($pass, $email);
	if($query)
	{
		print_r($query);

	}
	else{
  	$this->form_validation->set_message('checkstatus','Account is not verified till');
  	return false ;
  }
}
function profileview()
{
	echo 'error';
}

}