<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Site du bde CESI Arras, actualité, événement, boutique">
        <meta name="keywords" content="actualités, événements, photos, boutique, boite à idées, commentaires, inscription">

        <title>SITE du BDE CESI</title>

        <!-- Fonts links css -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/styleform.css">
        <link rel="stylesheet" type="text/css" href="css/stylecarousel.css">
    </head>
    <body>
        <header>

          <!-- Bar de navigation du site-->
            <div class="topnav" id="myTopnav">
              <a href="/" class="active">
                <img class="img" src="images/logo_cesi_1.png" alt="CESI">
              </a>

              <!--bouton de connection -->
              @if(Auth::user())
              @include('option_disconnect')
              @else
              @include('option_connect')
              @endif
              <!-- menu des pages -->
              <a class="menu" href="/">Actualités</a>
              <a class="menu" href="événement">Événements</a>
              <a class="menu" href="galerie">Galerie</a>
              <a class="menu" href="boite_idee">Boite a Idées</a>
              <a class="menu" href="boutique">Boutique</a>

              <!-- hamburger -->
              <a href="javascript:void(0);" style="font-size:25px;" class="icon" onclick="myFunction()">&#9776;</a> 

              
            </div>

            <!-- div qui s'affiche pour choisir l'inscriprion ou la connexion au site -->
            <div id="choice" class="modal">
                    <!-- bouton inscription-->
                    <div class="container" style="background-color:#f1f1f1">
                    <!-- <span  onclick="document.getElementById('choice').style.display='none'" class="close" title="Close Modal">&times;</span> -->
                      <!--"document.getElementById('choice').style.display='none', document.getElementById('inscrit').style.display='block'" class="choicebtn" -->
                      <a href="register">S'inscrire</a>
                      
                    </div>
                    <!-- bouton connexion-->
                    <div class="container" style="background-color:#f1f1f1">
                      <!--<button type="button" onclick="document.getElementById('choice').style.display='none', document.getElementById('connect').style.display='block'" class="choicebtn">Connection</button> -->
                      <a href="login">Se connecter </a>
                    </div>
            </div>
        </header>
<main>