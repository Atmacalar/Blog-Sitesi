<?php


class News_model extends CI_Model {

public $tablename="";

function __construct() {
parent::__construct();
$this->tableName="news";

}

public function haber_getir() 
{
$this->db->select('*')->from('news')->order_by('id','DESC');

$getir = $this->db->get();

if($getir ->num_rows() > 0)
return $getir->result_array();
else
return 0;
}



public function haber()
{

      if(isset($_GET['id']))
   {

       $this->db->select('*')->from('news')->where('id',$_GET['id']);
           
           $getir = $this->db->get();

       if($getir ->num_rows() > 0)
         return $getir->result_array();
          else
          return 0 ;



           

   }

 
}



public function sil($id)
{  
    $this->db->delete('news',array('id'=> $id));
    


}


  public function showupdate($id)
  {
   
   $this->db->select('*')->from('news')->where('id',$id);
   $getir=$this->db->get();

     if($getir->num_rows() > 0)
    return $getir->result_array();
    else return 0;


  }


  public function updatenews($id)
  {
    $baslik=$this->input->post("baslik");
    $intro=$this->input->post("intro");
    $metin=$this->input->post("metin");

    $data= array(
    
    "baslik"=>$baslik,
    "intro"=>$intro,
    "metin"=>$metin

    );

   $this->db->where("id",$id)->update("news",$data);

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