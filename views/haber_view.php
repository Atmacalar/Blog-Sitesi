<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salih Atmacalar</title>

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url("assets/css/styles.css");?>" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
   <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo base_url("index.php/Anasayfa/hakkimizda") ?>">hakkımızda</a></li>
          <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo base_url("index.php/Anasayfa/haberler"); ?>">Haber İçerikleri</a></li>
                       
                     <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo base_url("index.php/Anasayfa/proje") ?>">Projeler</a></li>     
                       <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo base_url("index.php/Anasayfa/iletisim") ?>">İLETİŞİM</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead" style="background-image: url('<?php echo base_url("assets/img/home-bg.jpg"); ?>')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Salih Atmacalar</h1>
                            <span class="subheading">İlerlemenin Sırrı Başlamaktır</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

<div class="container"  style="border:1px solid black;">

<?php  if(isset($ver)){

    foreach($ver as $ve)  { ?>

<h4 style="align:center"> <b><?php echo $ve['baslik'] ?></b></h4>


<p><i><?php echo $ve['metin'] ?></i></p>


    <?php } } 

  else{

   ?> <h4> WEB İNŞAA ETMEK</h4> 

      <p><i>Frontend alanı son zamanlarda çok popüler hale geldi. Bu popülerleğin nedeni ise kesinlikle Javascript' dir. Çünkü sadece html ve css güzel tasarımlar yapabiliriz ancak tasarımımıza hareketlilik kazandırmak istediğimizde ise Javascript kullanmamız gerekir. Örneğin açılır popup kutusu gibi.

Ayrıca son zamanlarda api üzerinden bilgi alışverişi popüler hale geldiğinden dolayı popüler Javascript kütüphanelerinden olan Jquer, Angular, React, VueJs, KnockoutJs vb. Javascript kütüphanelerini bilmek kesinlikle bize büyük artı katar.

Programlama yani backend tarafından baktığımızda ise karşımıza bir çok alternatif çıkmaktadır. Bu alternatiflerden en popülerleri ise Asp.net , Php , Java , Python , NodeJs dilleridir. Bu alternatiflerden en doğru olanı seçmek için bazı kriterler mevcuttur tabi ki bunlar beklentilerle değişiklik gösterebilir.

Örneğin ; her hangi bir firmaya bağlı kalmadan freelancer olarak kendi kendinize çalışıyor iseniz bu durumda hangi web programlama türünü öğrenmeniz aslına bakarsanız önemli değil çünkü bir web sitesinin yapımında hangi web programlama türünün kullanıldığı müşterinizi pek ilgilendirmez çünkü müşteri için önemli olan bir web sitesinin düzgün çalışmasıdır.</i></p>

  <?php } 

     ?>

    

  
<div class="resm">

        <img src=" "></div>



</div>





<footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2022</div>
                    </div>
                </div>
            </div>

        </footer>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="<?php echo base_url("assets/js/scripts.js");?>" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>