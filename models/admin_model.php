<?php 

class admin_model extends CI_Model{


function __construct() {
parent::__construct();
}



public function admingtr()
{
   	$this->db->select('*')->from('admin')->order_by('id','DESC');

	$al = $this->db->get();

	if($al->num_rows() >0)
		return $al->result_array();

	    else return 0;

}










}

?>