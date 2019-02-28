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

              <!--bouton de post -->
              @if(Auth::user())
              @include('option_post')
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

                    
            <!-- div pour le formulaire de connexion -->
            <div id="post" class="modal">
                <form class="modal-content animate" method="POST" action="{{route('Poster')}}">
                  @csrf
                  <div class="contient">

                    <label id="E-mail"><b>E-Mail</b></label>
                      <input class="ins" type="text" placeholder="Entre ton E-mail" name="E-mail" required>

                      <label id="Name_event"><b>Name event</b></label>
                      <input class="ins" type="text" placeholder="Entre le nom de l'event" name="event_name" required>

                      <label id="lieu"><b>Location</b></label>
                      <input class="ins" type="text" placeholder="Entre ton lieu d'événement" name="Location" required>

                      <label id="date"><b>Date</b></label>
                      <input class="ins" type="text" name="date" placeholder="format : AAAA-MM-JJ" required>

                      <label id="idea"><b>Description idée</b></label>
                      <TEXTAREA class="desc" name="Desc" placeholder="Description" onkeyup="javascript:capaTextarea(this, 250);"></TEXTAREA>

                      <label id="date"><b>Image</b></label>
                      <input class="ins" type="text" name="Image" placeholder="Voulez vous insérer une image ?" >
                                    
                      <button type="submit">Poster un(e) idée/événement</button>
                  </div>
                  <div class="container" style="background-color:#f1f1f1">
                  <button type="button" onclick="document.getElementById('post').style.display='none', document.getElementById('choice').style.display='block'" class="cancelbtn">Annuler</button>
                </div>
                </form>
            </div>           
        </header>
<main>