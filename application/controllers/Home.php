<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
 
    function __construct()
    {
    	parent::__construct();
    	$this->load->model('usermodel');
    }	
	public function index()
	{

		$this->load->view('newhome');
	}
	function listyourevent()
	{
  
    $this->load->view('listingform');
   }
   function listingform()
   {

    $this->form_validation->set_rules('name1','name','required|trim|callback_username',array('required'=>'please provide us the %s '));
    $this->form_validation->set_rules('name2','name2','required|trim');
    $this->form_validation->set_rules('name3','name3','required|trim');
    
    if($this->form_validation->run() == False)
    {
    	 $this->load->view('listingform');
    }
  else
  {
     
    $data = array('name1' =>$this->input->post('name'),
    	          'name2'  =>$this->input->post('name2')


    	);
$this->usermodel->insertdata($data);
  }
   } 

   function username($name)
   {
   	if($name =='test')
   	{
   		$this->form_validation->set_message('username','Cannot start with word test');
   		return FALSE;
   	}
   }

function alredyregisterd()
{
	 $this->form_validation->set_rules('name11','name1','trim|callback_usernamelogin',array('required'=>'please provide us the %s '));
    $this->form_validation->set_rules('name21','name21','trim',array('requierd'=>array($this->usermodel,'valid')));
    $this->form_validation->set_rules('name31','name31','trim');
    
    if($this->form_validation->run() == False)
    {
    	 $this->load->view('listingform');
    }
  else
  {
  	echo 'all set';
  }
}
function usernamelogin($name)
   {
   	if($name =='demo')
   	{
   		$this->form_validation->set_message('usernamelogin','Cannot start with word test');
   		return FALSE;
   	}
   }
function info()
{
    $this->load->view('placeinfophp');
}
}
