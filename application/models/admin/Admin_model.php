<?php 

class Admin_model extends CI_Model
{
 function check_login_admin_details($email,$pass){

 $this->db->select('*');
 $this->db->where('username',$email);
 $this->db->where('password',$pass);
 $this->db->from('admin');
 $query =$this->db->get();
if($query->num_rows() ==1)
{
return $query->row();
}
else
{
	return FALSE;
}
}

function checkclient()
{
	$this->db->select('*');
	$this->db->from('venue_details');
    $this->db->where('status','0');
$query =	$this->db->get();
return $query ;
}

   function countclient()
   {
  $query =  $this->db->count_all('venue_details');
  return $query;
   }
     function update_status($var)
     {
     	$this->db->set('status','1');
     	$this->db->where('id',$var);
     $query= 	$this->db->update('venue_details');
     return $query ;

     } 
  
}