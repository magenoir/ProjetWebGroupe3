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
              @include('option_connect')

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
                      <span onclick="document.getElementById('choice').style.display='none'" class="close" title="Close Modal">&times;</span>
                      <button type="button" onclick="document.getElementById('choice').style.display='none', document.getElementById('inscrit').style.display='block'" class="choicebtn">S'inscrire</button>
                    </div>
                    <!-- bouton connexion-->
                    <div class="container" style="background-color:#f1f1f1">
                      <button type="button" onclick="document.getElementById('choice').style.display='none', document.getElementById('connect').style.display='block'" class="choicebtn">Connect</button>
                    </div>
            </div>

            <!-- div pour le formulaire de connexion -->
            <div id="connect" class="modal">
              <form class="modal-content animate" method="GET" action="/Connection">
                <div class="fcontainer">
                  <span onclick="document.getElementById('connect').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>
                <div class="container">
                  <label for="E-mail"><b>E-mail</b></label>
                  <input class="con" type="text" placeholder="Enter E-mail" name="E-mail" required>

                  <label for="psw"><b>Password</b></label>
                  <input class="con" type="password" placeholder="Enter Password" name="psw" required>
                    
                  <button type="submit">Login</button>
                </div>
                <div class="container" style="background-color:#f1f1f1">
                  <button type="button" onclick="document.getElementById('connect').style.display='none', document.getElementById('choice').style.display='block'" class="cancelbtn">Cancel</button>
                  <span class="psw">Mot de passe oublié? <a href="#">Contactez le support.</a></span>
                </div>
              </form>
            </div>

            <!-- div pour le formulaire d'inscription -->
            <div id="inscrit" class="modal">
              <form class="modal-content animate" method="POST" action="/">
                @csrf
                <div class="fcontainer">
                  <span onclick="document.getElementById('inscrit').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>
                <div class="container">
                  <label for="Name"><b>Name</b></label>
                  <input class="ins" type="text" placeholder="Enter your Name" name="Name" required>

                  <label for="FName"><b>First-Name</b></label>
                  <input class="ins" type="text" placeholder="Enter your Name" name="FName" required>

                  <label for="E-mail"><b>E-mail</b></label>
                  <input class="ins" type="text" placeholder="Enter E-mail" name="E-mail" required>

                  <label for="Center"><b>Centre</b></label>
                  <select class="ins" name="Center">
                      <option value="1">Arras</option>
                      <option value="2">Lille</option>
                      <option value="3">Reims</option>
                      <option value="4">Strasbourg</option>
                  </select>

                  <label for="psw"><b>Password</b></label>
                  <input class="ins" type="password" placeholder="Enter Password" name="psw" required>

                  <label for="confpsw"><b>Confirm Password</b></label>
                  <input class="ins" type="password" placeholder="Confirm Password" name="confpsw" required>
                    
                  <button type="submit">Create</button>
                </div>
                <div class="container" style="background-color:#f1f1f1">
                  <button type="button" onclick="document.getElementById('inscrit').style.display='none', document.getElementById('choice').style.display='block'" class="cancelbtn">Cancel</button>
                </div>
              </form>
            </div>
        </header>
        <main>