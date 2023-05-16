<?php  


class hakkimda_model extends CI_Model{


function __construct() {
parent::__construct();
}



public function hakkimda_getir()
{

	$this->db->select('*')->from('tbl_hakkimda')->order_by('id','DESC');

	$al = $this->db->get();

	if($al->num_rows() >0)
		return $al->result_array();

	    else return 0;



}


public function soz_getir()
{
   $this->db->select('*')->from('gununsoz')->where('id', '1');
   $getir=$this->db->get();

   if($getir->num_rows() >0)
		return $getir->result_array();

	    else return 0;

}


public function show($id)
{
   $this->db->select('*')->from("tbl_hakkimda")->where('id',$id);
   $getir=$this->db->get();

   if($getir->num_rows() >0)
		return $getir->result_array();

	    else return 0;


}

public function updateab($id)
{
 $mylife=$this->input->post("mylife");

  $data=array(
      "mylife"=>$mylife

     );

  $this->db->where("id",$id)->update("tbl_hakkimda",$data);
}




}

?>