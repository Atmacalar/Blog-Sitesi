<?php 
class proje_model extends CI_Model {

	public $tablename="";

function __construct() {
parent::__construct();
$this->tableName="projeler";
}



public function proje_getir()
{ 
	$this->db->select('*')->from('projeler')->order_by('id','DESC');

	$al=$this->db->get();

	if($al->num_rows()>0)
		return $al->result_array();
	else return 0;


}


public function sil($id)
{

   $this->db->delete('projeler',array('id'=>$id));

}

public function show($id)
{ 
	$this->db->select('*')->from('projeler')->where('id',$id);
   $getir=$this->db->get();

     if($getir->num_rows() > 0)
    return $getir->result_array();
    else return 0;


}


public function updatepr($id)
{ 
	$baslik=$this->input->post("baslik");
	$text=$this->input->post("text");

	$data=array(
     
     "baslik"=>$baslik,
     "text"=>$text

	);
    
    $this->db->where("id",$id)->update("projeler",$data);

}


public function GetAll()
   {
        return $this->db->get($this->tableName)->result();
   }




public function Add($article = array())
{
        return $this->db->insert($this->tableName,$article);

          }


}



?>