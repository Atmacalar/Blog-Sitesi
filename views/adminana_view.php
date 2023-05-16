<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>ADMİN</title>
  </head>
  <body style="background:rgb(220, 220, 220);">
   


   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo base_url("index.php/Anasayfa/index") ?>"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
</svg></a>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url("index.php/admin/index");?>">Anasayfa<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url("index.php/admin/haber");?>">Haber İçerikleri</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url("index.php/admin/proje");?>">Projeler</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="<?php echo base_url("index.php/admin/mesaj");?>">Mesajlar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="<?php echo base_url("index.php/admin/hakkimda");?>">Hakkımda</a>
      </li>
    </ul>
  </div>
</nav>




<div class="container mt-3" >
     <b>Yeni Haber Ekleyin</b>
  <form method="POST" action="<?php echo base_url("index.php/admin/resimyukle") ?>" enctype="multipart/form-data" >
  
  <div class="form-group mt-2">
    <label for="exampleFormControlSelect1">Başlık</label>
   <input class="form-control" type="text" name="baslik" placeholder="Default input">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">İntro</label>
    <input class="form-control" type="text" name="intro" placeholder="Default input">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Metin İçeriği</label>
    <textarea class="form-control" name="metin"  rows="3"></textarea>
  </div> 

  <div class="form-group">
    <label for="exampleFormControlFile1">Resim Yükle</label>
    <input type="file" class="form-control-file" name="img" id="imageUrl" >
  </div>
 
  <button type="submit" class="btn btn-primary " style="float: right; border-radius: 5px; " >Gönder</button>

 </form>
  

</div>



<div class="container mt-5" >
     
 <b style="margin-top: 10px;">Yeni Proje Ekleyin</b>
  <form method="POST" action="<?php echo base_url("index.php/admin/projeyukle")?>" enctype="multipart/form-data" >
  
  <div class="form-group mt-2">
    <label for="exampleFormControlSelect1">Başlık</label>
   <input class="form-control" type="text" name="baslik" placeholder="Default input">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">İntro</label>
    <input class="form-control" type="text" name="text" placeholder="Default input">
  </div>


  <div class="form-group">
    <label for="exampleFormControlFile1">Resim Yükle</label>
    <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
  </div>
 <button type="submit" class="btn btn-primary " style="float: right; border-radius: 5px; " >Gönder</button>
 </form>
</div> 

   

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>