<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rafa Services SARL</title>
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7db0581a81.js" crossorigin="anonymous"></script>
</head>
<body data-spy='scroll' data-target="#navbarResponsive">
    <div id="home">
         <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.html"><img src="images/logomini.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle='collapse' data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">ACCUEIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="a propos de nous/index.php">À PROPOS DE NOUS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactez-nous/contact.php">CONTACTEZ-NOUS</a>
                </li>
                <form class="form-inline">
                    <i class="fas fa-search" aria-hidden="true"></i>
                </form>
                
            </ul>
        </div>

    </nav>
    </div>
    <!-- image slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride='carousel' data-interval="70000">
        <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- slide1 -->
            <div class="carousel-item s1 active">
                <div class="carousel-caption text-center">
                    <h1 class="h">RAFA.MA</h1>
                    <p class="sh">Lorem qui fugiat vero animi quasi fugiat vero animi</p>
                    <a class="btn btn-outline-light btn-lg" href="contactez-nous/contact.php">Contactez-nous</a>
                </div>
            </div>
            <!-- slide 2 -->
            <div class="carousel-item s2">

            </div>
            <div class="carousel-item s3">

            </div>
            

        </div>
        <!-- prev -->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <!-- next -->
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>
    <section class="section-presentation">
        <div>
            <h2>Présentation</h2>
            <p>FIRMAMIZ , société marocaine fondée en 2019, situé  à Youssoufia dans la région de Marrakech Safi,<br> spécialisé dans les domaines de la construction métallique, le génie civil ainsi que la location du<br>matériel de construction.<br><br>
            Dans le cadre de d’accompagnement des entreprises locales par L’ OCP. Nous avons bien choisi de<br>s’implanter près du site Guentour pour mettre nos services au profit de l’OCP et ses partenaires et pour<br>contribuer au développement de cette région qui en a le plus besoin.</p>
        </div>
    </section>
    <section class='section-details wrp'>
    <div class="col1">
        <img src="assets/icons/configuration.png" alt="configuration">
        <h3>Construction métallique</h3>
        <p>Charpente métallique.<br><br>Chaudronnerie.<br><br>Inox.<br><br>Menuiserie  en aluminium.</p>
    </div>
    <div class="col2">
        <img src="assets/icons/engineer.png" alt="engineer">
        <h3>Construction métallique</h3>
        <p>Charpente métallique.<br><br>Chaudronnerie.<br><br>Inox.<br><br>Menuiserie  en aluminium.</p>
    </div>
    <div class="col3">
        <img src="assets/icons/welde.png" alt="welde">
        <h3>Construction métallique</h3>
        <p>Charpente métallique.<br><br>Chaudronnerie.<br><br>Inox.<br><br>Menuiserie  en aluminium.</p>
    </div>
    <div class="col4">
        <img src="assets/icons/welder.png" alt="welder">
        <h3>Construction métallique</h3>
        <p>Charpente métallique.<br><br>Chaudronnerie.<br><br>Inox.<br><br>Menuiserie  en aluminium.</p>
    </div>

    </section>


    <section class="projects-section">
        <div>
            <h2>Nos Projets</h2>
        </div>
        <ul class="projects-showcase">
            <li>
                <figure><img src="assets/projects/cafe.jpg" alt=""></figure>
            </li>
            <li>
                <figure><img src="assets/projects/piscine.jpg" alt=""></figure>
            </li>
            <li>
                <figure><img src="assets/projects/cafe3.jpg" alt=""></figure>
            </li>
            <li>
                <figure><img src="assets/projects/cafe4.jpg" alt=""></figure>
            </li>
            <li>
                <figure><img src="assets/projects/mariage.png" alt=""></figure>
            </li>
            <li>
                <figure><img src="assets/projects/piscine2.jpg" alt=""></figure>
            </li>
            <li>
                <figure><img src="assets/projects/cafe3.jpg" alt=""></figure>
            </li>
            <li>
                <figure><img src="assets/projects/cafe.jpg" alt=""></figure>
            </li>
        </ul>

    </section>
    <?php include 'service.php'; ?>
</div>
</body>
</html>