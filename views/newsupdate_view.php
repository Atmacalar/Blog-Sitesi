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

<?php foreach ($shw as $al) { ?>
 


<div class="container mt-1">
<form method="POST" action="<?php echo base_url("index.php/admin/guncellehaber/?id=").$al['id'] ?>">
  <div class="form-group">
    <label for="exampleFormControlInput1">Başlık</label>
    <input type="text" class="form-control" name="baslik" value="<?php echo $al['baslik'] ?>" >
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlInput2">İntro</label>
    <input type="text" class="form-control" name="intro" value="<?php echo $al['intro'] ?>" >
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Metin</label>
    <textarea class="form-control" style="height: 200px;" name="metin" rows="3"> <?php echo $al['metin'] ?> </textarea>
  </div>

  <button type="submit" class="btn btn-primary y-1" style="float: right; border-radius: 5px; " >Gönder</button>
</form>
 <?php } ?>
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