<?php 

class mesaj_model extends CI_Model{

   function __construct(){

	parent::__construct();

}

public function mesajgetir()
{
  $this->db->select('*')->from('tbl_mesaj')->order_by('id','DESC');

  $getir=$this->db->get();
  if($getir ->num_rows() > 0)
return $getir->result_array();
else
return 0;
 

}


public function ekle()
{
  
 $adsoyad=$this->input->post("adsoyad");
   $mesaj=$this->input->post("mesaj");
  $veri=array(

"adsoyad"=>$adsoyad,
"mesaj"=>$mesaj

   );
   
  
  $this->db->insert('tbl_mesaj',$veri);

}


public function sil($id)
{ 
   

      $this->db->delete('tbl_mesaj',array('id' =>$id));
   

}



}

?>