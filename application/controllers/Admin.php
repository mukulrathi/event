<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller
{
function __construct()
{
     parent::__construct();
	$this->load->library('session');
	$this->load->model('admin/Admin_model');
}
function index()
{
	$this->load->view('admin/login');
}

function checklogin()
{


	$this->form_validation->set_rules('user','Username','required|trim|callback_check_username');
	$this->form_validation->set_rules('password','Password','required|trim');
	if($this->form_validation->run() == FALSE)
	{
		$this->index();

	}
	else
	{
	    
	//
	}
}
function mainbody()
{
	$this->load->view('admin/header');
	$query['count'] = $this->Admin_model->countclient();
    $query['result'] =$this->Admin_model->checkclient();
  	$this->load->view('admin/mainbody',$query);
	$this->load->view('admin/footer');

}

function updatestatus()
{
  $var = $this->uri->segment(3,0);
 $query =  $this->Admin_model->update_status($var);
if($query) {  ?>

<script>
  alert('Status Approved');
  window.history.back();
  </script>
<?php }

}

public function logout()
  {
    $this->session->unset_userdata($session);
    $this->session->sess_destroy();
    redirect(base_url().'admin');
  }
  function check_username($email){
            $pass  = $this->input->post('password');
             $query=   $this->Admin_model->check_login_admin_details($email,$pass);
            if($query)
            {
              //print_r($query);
             $data = array(id => $query->id,
                          username =>$query->username
            );
           // print_r( $this->session->userdata());
              $this->session->set_userdata($data);
                   redirect(base_url().'admin/mainbody');
            }
          else
          {
           $this->form_validation->set_message('check_username','Invalid username/password combination');
                return false ;
          }
        }

}
