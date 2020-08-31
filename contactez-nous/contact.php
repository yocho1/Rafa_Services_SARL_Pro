<?php

$message_sent = false;
include('db.php');
if(isset($_POST['email']) && $_POST['email'] != ""){
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        
        $query="INSERT INTO contact (cname,cemail,csubject,cmessage) "; 
        $query.="VALUES('$name','$email','$subject','$message')";
        $run = mysqli_query($db,$query);
        if($run){
            $message_sent = true;
        }
    }
}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- js -->
    <script src="main.js"></script>
</head>

<body class="bgrnd" data-spy='scroll' data-target="#navbarResponsive">
<div id="home">
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="../index.php"><img src="../images/logomini.png" alt="logo"></a>
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
                    <a class="nav-link" href="#">CONTACTEZ-NOUS</a>
                </li>
                <form class="form-inline">
                    <i class="fas fa-search" aria-hidden="true" style="color : #fff"></i>
                </form>
                
            </ul>
        </div>

    </nav>
    </div>

    <!-- form -->
    <?php if($message_sent): ?>
    <div class="suc">Thanks, we'll be in touch</div>
    <?php else: ?>
    <div class="container">
        <form action="contact.php" method="POST" class="form">
            <h2>Contact</h2>
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="name" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email" tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="subject" tabindex="3" required>
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
    <?php endif; ?>



    <!--google maps -->
    <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53991.30557888606!2d-8.560655203672853!3d32.24579502057716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdaefcd3cdac94a5%3A0x2cfe67e059e518d!2sYoussoufia!5e0!3m2!1sen!2sma!4v1598690248469!5m2!1sen!2sma" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>

    <!-- footer -->
    <?php include '../html-sections/footer.php'; ?>
</body>

</html>