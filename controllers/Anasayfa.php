<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anasayfa extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()

	{       
      
         $this->load->model("news_model");
         $this->load->model("proje_model");

          $data["news"]=$this->news_model->haber_getir();
         $data["proje"]=$this->proje_model->proje_getir();

               $this->load->view('Anasayfa_view',$data);



		


          }
	

        public function hakkimizda()
        {     
        	$this->load->model("hakkimda_model");
        	$veri["hak"]=$this->hakkimda_model->hakkimda_getir();
        	$veri["sozgtr"]=$this->hakkimda_model->soz_getir();




        	$this->load->view('hakkimizda_view',$veri);
        }



       public function proje()
       {
               $this->load->model("proje_model");

               $data["projes"]=$this->proje_model->proje_getir();
               $this->load->view('proje_view',$data);

       }




public function haber()
{
$this->load->model("news_model");
$veri["ver"]=$this->news_model->haber();



$this->load->view('haber_view',$veri);




}


public function iletisiminsert()
{
	$this->load->model("mesaj_model");


      $this->mesaj_model->ekle();

	

    
$this->load->model("mesaj_model");
	$data["msj"]=$this->mesaj_model->mesajgetir();
	

  $this->load->view('iletisim_view',$data);
}



public function iletisim()
{  
	  $this->load->model("mesaj_model");
	$data["msj"]=$this->mesaj_model->mesajgetir();
	
      
$this->load->view('iletisim_view',$data);
 }



public function haberler()
{ 
	$this->load->model("news_model");
	$data["news"]=$this->news_model->haber_getir();

	$this->load->view('haberler_view',$data);
}





}
