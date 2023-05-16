<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

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

    public function login()
    {
          
         
         $this->load->view("login_view");

    } 

    public function kontrol()
    {
           $eposta=  $this->input->post("eposta");
            $sifre=  $this->input->post("sifre");
            $this->load->model("admin_model");
            $data["admin"]=$this->admin_model->admingtr();
          foreach($data["admin"] as $al )
          {
              if($eposta==$al['eposta'] && $sifre==$al['sifre'])
               {
                redirect("admin/index");
                 

               }
                
                else 
                {
                    redirect("admin/login");

                }
        

          }



    }

	public function index()
    {      
            $this->load->model("news_model");
        $viewData = new stdClass();
        $viewData->articles = $this->news_model->GetAll(); //Makalelerin veritabanından çekilmesi...
        $this->load->view("adminana_view",$viewData); //Verinin view' e gönderilmesi...
    }

      //$this->load->view('adminana_view',$data);
    
            //$this->load->view("login_view");

	
    


public function haber()
{
	 $this->load->model("News_model");
     
     $data["haber"]=$this->News_model->haber_getir();



	$this->load->view("adminhaber_view",$data);
}
      


 public function proje()
{ 

	$this->load->model("proje_model");
	$data['prj']=$this->proje_model->proje_getir();


     $this->load->view("adminproje_view",$data);      	


}
         




public function hakkimda()
{

	$this->load->model("hakkimda_model");
	$data['hkm']=$this->hakkimda_model->hakkimda_getir();

	$this->load->view("adminhakkimda_view",$data);
}

public function mesaj()
{ 
	$this->load->model("mesaj_model");
	$data['msj']=$this->mesaj_model->mesajgetir();

	$this->load->view("adminmesaj_view",$data);
}


public function silmesaj()
{

	  $this->load->model("mesaj_model");

    $this->mesaj_model->sil($_GET['id']);

	  redirect("admin/mesaj");

}



public function silhaber()
{

	  $this->load->model("news_model");

    $this->news_model->sil($_GET['id']);

	  redirect("admin/haber");

}


public function silproje()
{

	  $this->load->model("proje_model");

    $this->proje_model->sil($_GET['id']);

	  redirect("admin/proje");


}


public function silhakkimda()
{

	  $this->load->model("hakkimda_model");

    $this->hakkimda_model->sil($_GET['id']);

	  redirect("admin/hakkimda");

}
	

public function shownews()
{

 $this->load->model("news_model");
$data['shw']=$this->news_model->showupdate($_GET['id']);

$this->load->view("newsupdate_view",$data);


}

public function guncellehaber()
{ 
	$this->load->model("news_model");
	$this->news_model->updatenews($_GET['id']);

	redirect("admin/haber");

} 

  public function showabout()
	{
		$this->load->model("hakkimda_model");
		$data['gtr']=$this->hakkimda_model->show($_GET['id']);
     $this->load->view("aboutupdate_view",$data);

	}

	public function updateabout()
	{
     
     $this->load->model("hakkimda_model");
     $this->hakkimda_model->updateab($_GET['id']);
    
     redirect("admin/hakkimda");


	}

public function showprojects()
{
	$this->load->model("proje_model");
	$data['shw']=$this->proje_model->show($_GET['id']);

	$this->load->view("projectupdate_view",$data);


}

public function updateprojects()
{
  $this->load->model("proje_model");
 
  $this->proje_model->updatepr($_GET['id']);

  redirect("admin/proje");
  

}

public function resimyukle()
{    
   
  if (isset($_FILES["img"]["name"])){
            //Dosya yüklenmek isteniyorsa...
            $config["allowed_types"] = "jpg|jpeg|png";
            $config["upload_path"] = "assets/img/"; //Dosyanın yüklenmesini istediğim yol
            //$config['allowed_types']        = 'gif|jpg|png|pdf|'; Yüklenmeksine izin verdiğimiz dosya türleri
            //$config['allowed_types']        = '*'; Bu kullanım da tüm dosya türlerinin yüklenmesine müsade eder.  Fakat bu konfigürasyonu hiç yapmasak ta tüm dosya formatlarının yüklenmesine izin vermiş oluruz...
            $config["file_name"] = uniqid() . $_FILES["img"]["name"]; //uniqid() => Yüklenecek dosyaların benzer isimde olmasını önlemek için kullandığım uniq degerler üreten eden bir metod
            $this->load->library("upload", $config); //upload kütüphanesinin yüklenmesi ve istediğimiz konfigürasyonların parametre geçilmesi...
            $upload = $this->upload->do_upload("img"); //Dosya yüklendi ise 1 değerini döndüren upload kütüphanesine ait do_upload metodu
            if ($upload){ //Upload işlemi olduysa kayıt veritabanına eklenecek
                $uploaded_filename = $this->upload->data("file_name"); //Dosyanın isminin $uploaded_filename değişkenine atanması
                $this->load->model("news_model"); //Model dosyasının yüklenmesi
                $article = array(
                    "baslik"      => $this->input->post("baslik"),
                    "intro"    => $this->input->post("intro"),
                     "metin"    => $this->input->post("metin"),
                    "img"   =>"assets/img/". $uploaded_filename
                );
 
                $result=$this->news_model->Add($article);
                if ($result){ //Kayıt ekleme işlemi başarılı ise Home Controller' ın Index Action' una yönlendirileceğiz.
                redirect("admin/index");


                }else{
                    echo "Kayıt veritabanına eklenemedi...";
                }
            }
        }

  else echo "nanay";

}


public function projeyukle()
{

	if (isset($_FILES["image"]["name"])){
            //Dosya yüklenmek isteniyorsa...
            $config["allowed_types"] = "jpg|jpeg|png";
            $config["upload_path"] = "assets/img/"; //Dosyanın yüklenmesini istediğim yol
            //$config['allowed_types']        = 'gif|jpg|png|pdf|'; Yüklenmeksine izin verdiğimiz dosya türleri
            //$config['allowed_types']        = '*'; Bu kullanım da tüm dosya türlerinin yüklenmesine müsade eder.  Fakat bu konfigürasyonu hiç yapmasak ta tüm dosya formatlarının yüklenmesine izin vermiş oluruz...
            $config["file_name"] = uniqid() . $_FILES["image"]["name"]; //uniqid() => Yüklenecek dosyaların benzer isimde olmasını önlemek için kullandığım uniq degerler üreten eden bir metod
            $this->load->library("upload", $config); //upload kütüphanesinin yüklenmesi ve istediğimiz konfigürasyonların parametre geçilmesi...
            $upload = $this->upload->do_upload("image"); //Dosya yüklendi ise 1 değerini döndüren upload kütüphanesine ait do_upload metodu
            if ($upload){ //Upload işlemi olduysa kayıt veritabanına eklenecek
                $uploaded_filename = $this->upload->data("file_name"); //Dosyanın isminin $uploaded_filename değişkenine atanması
                $this->load->model("proje_model"); //Model dosyasının yüklenmesi
                $article = array(
                    "baslik"      => $this->input->post("baslik"),
                    "text"    => $this->input->post("text"),
                   
                    "image"   =>"assets/img/". $uploaded_filename
                );
 
                $result=$this->proje_model->Add($article);
                if ($result){ //Kayıt ekleme işlemi başarılı ise Home Controller' ın Index Action' una yönlendirileceğiz.
                redirect("admin/index");


                }else{
                    echo "Kayıt veritabanına eklenemedi...";
                }
            }
        }

  else echo "nanay";


}




      }
?>