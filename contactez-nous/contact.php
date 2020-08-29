<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7db0581a81.js" crossorigin="anonymous"></script>
    <!-- js -->
    <script src="main.js"></script>
</head>

<body class="bgrnd" data-spy='scroll' data-target="#navbarResponsive">
<div id="home">
         <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.html"><img src="../images/logomini.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle='collapse' data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">ACCUEIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">À PROPOS DE NOUS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactez-nous/contact.php">CONTACTEZ-NOUS</a>
                </li>
                <form class="form-inline">
                    <i class="fas fa-search" aria-hidden="true" style="color : #fff"></i>
                </form>
                
            </ul>
        </div>

    </nav>
    </div>
<<<<<<< HEAD
=======
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
>>>>>>> 3b39740e57f39529f69b346c50d0c7fa3d69131b


    <div class="container">
        <form action="webform.php" method="POST" class="form">
            <h2>Contact</h2>
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="jane@doe.com" tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Hello There!" tabindex="3" required>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
            </div>
            <div>
                <button type="submit" class="btn">Send Message!</button>
            </div>
        </form>
    </div>



    <!--google maps -->
    <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53991.30557888606!2d-8.560655203672853!3d32.24579502057716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdaefcd3cdac94a5%3A0x2cfe67e059e518d!2sYoussoufia!5e0!3m2!1sen!2sma!4v1598690248469!5m2!1sen!2sma" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>

    <!-- footer -->
    <?php include '../html-sections/footer.php'; ?>
</body>

</html>