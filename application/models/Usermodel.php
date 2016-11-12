<?php 

class Usermodel extends CI_Model
{
    function insertdata($data)

     {
        print_r($data);
    }
    function insert_venue($data)
    {
   $query =  $this->db->insert('venue_details',$data);
    return $query;
    }
    function checkusername($name,$query)
    {
    	$this->db->select('user,pass');
    	$this->db->where('user',$name);
    	$this->db->where('pass',$query);
    	
    	$this->db->from('venue_details');
    	$this->db->limit('1');
    	$query = $this->db->get();
          if($query->num_rows()==1)
          {
          	return  $query->row();
          }
          else
          {
          	return FALSE ;
          }
    }


    function checkstatus($pass,$email)
    {


    	$this->db->select('user,pass');
    	$this->db->where('user',$email);
    	$this->db->where('pass',$pass);
    	$this->db->where('status','1');
    	$this->db->from('venue_details');
    	$this->db->limit('1');
    	$query = $this->db->get();
          if($query->num_rows()==1)
          {
          	return  $query->row();
          }
          else
          {
          	return FALSE ;
          }




    }
   
   
} 