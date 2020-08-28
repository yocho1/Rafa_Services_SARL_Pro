<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link rel="shortcut icon" type="image/png" href="img/logo.png">
<link rel="stylesheet" href="contact.css">
</head>
<body>
<!-- nav bar -->
<?php $nav_path = $_SERVER['DOCUMENT_ROOT'];
      $nav_path = '../html-sections/nav.php'; 
      include ($nav_path); ?>

<!-- :::::::::::::::  Contact  :::::::::::::::::::: -->
<div class="container">
<h2 class="text-center mb-4">Contact</h2>
<h4 class="text-center text-capitalize text-success">Bienvenue dans notre espace contact !</h4>
<p class="text-muted pb-3 w-75 mx-auto text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et nisi perspiciatis
     inventore suscipit. Eius ipsa aperiam odit </p>

<!-- start form -->
<form>
    <div class="form-group w-75">
      <!-- <label for="exampleInputEmail1">Email address</label> -->
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom Complet">    
    </div>
    <div class="form-group w-75">
      <!-- <label for="exampleInputPassword1">Password</label> -->
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Email">
    </div>
    <div class="form-group w-75">
        <!-- <label for="exampleInputPassword1">Password</label> -->
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Numéro de télephone">
      </div>
      <div class="form-group w-75">
        <!-- <label for="exampleInputPassword1">Password</label> -->
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="SUJET">
      </div>
        <div class="form-group">
          <!-- <label for="exampleFormControlTextarea1">Example textarea</label> -->
          <textarea class="form-control" id="exampleFormControlTextarea1"  placeholder="MESSAGE ICI" rows="9"></textarea>
        </div>
        <center>
        <div class="mx-auto justify-content-center pb-4">
        <img src="img/1.png" alt="photo" class="one">
         <button type="button" class="btn btn-dark">ENVOYER</button>
        </div>
    </center>
  </form>
<!-- end form -->

    </div>

    <img src="img/local.png" alt="photo" class="img-fluid image-responsive w-100 pt-2 two">
    <?php $footer_path = $_SERVER['DOCUMENT_ROOT'];
          $footer_path = '../html-sections/footer.php'; 
          include ($footer_path);?>



  
     <!-- :::::::::::::::::::::: -->
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
  <script>
    AOS.init();
  </script>
  
  </body>
  </html>
    