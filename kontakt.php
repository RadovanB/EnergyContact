<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['posalji'])){

  $name = htmlspecialchars($_POST['ime']);
  $surname = htmlspecialchars($_POST['prezime']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['telefon']);
  $message = htmlspecialchars($_POST['pitanje']);

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer();                              // Passing `true` enables exceptions
// try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'kif.verat.net';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'info@energycontact.rs';                 // SMTP username
    $mail->Password = '?';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to
    $mail->SMTPOptions = array(
      'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
      )
  );

    //Recipients
    $mail->setFrom('info@energycontact.rs');
    $mail->addAddress('radovanbastic@gmail.com', 'Energy Contact');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('radovanbastic@gmail.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'PORUKA SA KONTAKT FORME ENERGYCONTACT.RS';
    $mail->Body    = '<html>
    <head>
    </head>
  		<body>
        <table width="60%" cellspacing="2" cellpadding="2">
  				<tr>
  					<td colspan="2" align="left" valign="middle"style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#fff; background-color:#0072c6;">Poruka sa sajta ENERGY CONTACT</td>
  				</tr>
  				<tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Ime i Prezime</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $name . ' ' . $surname . '</td>
  				</tr>
  				<tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Telefon</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $phone . '</td>
  				</tr>
  				<tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Email adresa</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $email . '</td>
  				</tr>
  				<tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Pitanje, ideja..</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $message . '</td>
  				</tr>
        </table>
        </body>
       </html>';

    $mail->send();

    // echo 'Message has been sent';

}

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Kontakt | ENERGY CONTACT MONT DOO</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="icon" type="image/png" sizes="32x32" href="./img/logo3.png">
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<body>
  
  <!-- Header START -->
  <header class="clearfix">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="top-line">
        <div class="container">
          <div class="row">
            <div class="col-md-7 pull-right text-right">
              <p>
                <span><i class="fas fa-phone-volume fa-lg"></i> +381 34 353835</span>
                <span><i class="far fa-envelope fa-lg"></i> info@energycontact.rs</span>
                <span><i class="far fa-clock fa-lg"></i> Pon - Pet 08:00 - 17:00, Sub 08:00 - 14:00</span>
              </p>
            </div>	
            <div class="col-md-5">
              
            </div>	
          </div>
        </div>
      </div>
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><img src="img/logo3.png" class="img-responsive"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
          <li><a href="/">Početna</a>
            </li>
            
            <li class="drop"><a href="onama.php">O nama</a>
            </li>
            <li class="drop"><a href="prodaja.php">Proizvodi</a>
            </li>
            <li class="drop"><a href="novine.php">Novine</a>
            </li>
            <li class="drop"><a href="izvodjenjeradova.php">Izvođenje radova</a>
            </li>
            <li class="drop"><a href="dokumenti.php">Dokumenti</a>
            </li>
            
            <li><a class="active" href="kontakt.php">Kontakt</a></li>
            <!-- <li class="search drop"><a href="#" class="open-search"><i class="fa fa-search"></i></a>
              <form class="form-search">
                <input type="search" placeholder="Search:">
                <button type="submit">
                  <i class="fa fa-search"></i>
                </button>
              </form>
            </li> -->
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
  </header>
  <!-- Header END -->

   <!-- Google Map Start -->
   <section class="section-map">
    <iframe src="https://maps.google.com/maps?q=Perice%20Maksimovi%C4%87a%202%20Kragujevac&t=&z=17&ie=UTF8&iwloc=&output=embed"
      width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
  </section>
  <!-- Google Map End -->

  <!-- Kontakt Section START -->

  <section class="contact-section">
    <div class="container">
      <div class="project-title title">
        <span class="sm-title">Uvek smo na raspolaganju</span>
        <h2 class="box-header">OSTANIMO U KONTAKTU</h2>
        <p>Za sva pitanja i nedoumice nas možete kontaktirati na brojeve telefona, putem mejla ili jednostavno možete popuniti 
        kontakt formu i klikom na jedno dugme poslati svoju poruku. Svim svojim klijentima se trudimo da odgovorimo 
        u najkraćem mogućem roku.</p>
      </div>
      <div class="col-md-8">
        <form id="contact-form">
          <div class="row">
            <div class="col-md-6">
              <input name="ime" id="name" type="text" placeholder="Vaše Ime">
            </div>
            <div class="col-md-6">
              <input name="prezime" id="lastname" type="text" placeholder="Vaše Prezime">
            </div>
          </div>

          <div class="row">
            
            <div class="col-md-6">
              <input name="email" id="mail" type="email" placeholder="Email Adresa">
            </div>
            <div class="col-md-6">
              <input name="telefon" id="name" type="phone" placeholder="Kontakt Telefon">
            </div>
          </div>
          

          <textarea name="comment" rows="10" id="comment" placeholder="Poruka"></textarea>
          <input name="posalji" type="submit" id="submit_contact" value="Pošalji poruku">
          <div id="msg" class="message"></div>
        </form>
      </div>
      <div class="col-md-4">
        <div class="contact-info">
          <h2>Kontakt podaci</h2>
          <p>Možete nas kontaktirati ili posetiti u našoj kancelariji od Ponedeljka do Petka u periodu 8:00 - 17:00</p>
          <ul class="information-list">
            <li><span><i class="fa fa-map-marker fa-2x"></i>&nbsp;&nbsp;&nbsp;&nbsp;Perice Maksimovića 2 Kragujevac</span></li>
            <li><span><i class="fa fa-phone fa-2x"></i>&nbsp;&nbsp;&nbsp;&nbsp;+381 34 353835, +381 34 353845</span></li>
            <li><span><i class="far fa-envelope fa-2x"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">info@energycontact.rs</a></span></li>
            <li><span><i class="far fa-file fa-2x"></i> &nbsp;&nbsp;&nbsp;&nbsp; PIB 111685455</span></li>
            <li><span><i class="far fa-file fa-2x"></i> &nbsp;&nbsp;&nbsp;&nbsp; MB 21522295</span></li>
            
          </ul>						
        </div>
      </div>

    </div>
  </section>

  <!-- Kontakt Section END -->


  <!-- Footer START -->
  <footer class="mainfooter" role="contentinfo">
    <div class="footer-middle">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <!--Column1-->
          <div class="linkovi">
            <h4>BRZI LINKOVI</h4>
            <ul>
            <li><a href="/">Početna</a><i class="fas fa-angle-right"></i></li>
            <li><a href="onama.php">O nama</a><i class="fas fa-angle-right"></i></li>
            <li><a href="prodaja.php">Proizvodi</a><i class="fas fa-angle-right"></i></li>
            <li><a href="novine.php">Novine</a><i class="fas fa-angle-right"></i></li>
            <li><a href="izvodjenjeradova.php">Izvođenje radova</a><i class="fas fa-angle-right"></i></li>
            <li><a href="dokumenti.php">Dokumenti</a><i class="fas fa-angle-right"></i></li>
            <li><a href="kontakt.php">Kontakt</a><i class="fas fa-angle-right"></i></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 social">
        		
      </div>
        <div class="col-md-4 col-sm-6">
          <!--Column1-->
          <div class="footer-pad">
            <h4>KONTAKT INFORMACIJE</h4>
            <p class="first-paragraph">Možete nas pozvati ili posetiti tokom radnog vremena</p>
            <p class="other-par"><span>Tel: </span> +381 34 353835</p>
            <p class="other-par"><span>Email: </span> info@energycontact.rs</p>
            <p class="other-par radnovreme"><span>Radno vreme: </span> Pon - Pet 08:00 - 17:00, Sub 08:00 - 14:00</p>
          </div>
        </div>
        
      </div>
    <div class="row">
      <div class="col-md-12 copy">
        <p class="text-center">&copy; Copyright 2020 - <a href="">Smart Web Art</a>  Sva prava zadržana.</p>
      </div>
    </div>
  
    <a id="button" class="hidden-xs"></a>
    </div>
    </div>
  </footer>
  <!-- Footer END -->


  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <script>
      var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});
  
  </script>
</body>
</html>