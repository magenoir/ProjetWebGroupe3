<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SITE du BDE CESI</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/styleform.css">
        <link rel="stylesheet" type="text/css" href="css/stylecarousel.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
      
        <header>
            <div class="topnav" id="myTopnav">
              <a href="/" class="active">
                <img class="img" src="images/logo_cesi_1.png">
              </a>
              <button class="button" onclick="document.getElementById('choice').style.display='block'" style="width:auto;">Connect</button>
              <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
              <input id="rech" class="search" type="text" placeholder="Search..">
            </div>
            <div class="sidebar">
              <a class="active" href="/">Actualités</a>
              <a href="événement">Événements</a>
              <a href="boite_idee">Boite a Idées</a>
              <a href="boutique">Boutique</a>
            </div>
            <div id="choice" class="modal">
                    <div class="fcontainer">
                      <span onclick="document.getElementById('choice').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>
                    <div class="container" style="background-color:#f1f1f1">
                      <button type="button" onclick="document.getElementById('choice').style.display='none', document.getElementById('inscrit').style.display='block'" class="choicebtn">S'inscrire</button>
                    </div>
                    <div class="container" style="background-color:#f1f1f1">
                      <button type="button" onclick="document.getElementById('choice').style.display='none', document.getElementById('connect').style.display='block'" class="choicebtn">Connect</button>
                    </div>
            </div>

            <div id="connect" class="modal">
              <form class="modal-content animate" method="GET" action="/">
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

            <div id="inscrit" class="modal">
              <form class="modal-content animate" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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

                  <label for="psw"><b>Password</b></label>
                  <input class="ins" type="password" placeholder="Enter Password" name="psw" required>

                  <label for="confpsw"><b>Confirm Password</b></label>
                  <input class="ins" type="password" placeholder="Confirm Password" name="confpsw" required>
                    
                  <button type="submit" name="submit">Create</button>
                </div>
                <div class="container" style="background-color:#f1f1f1">
                  <button type="button" onclick="document.getElementById('inscrit').style.display='none', document.getElementById('choice').style.display='block'" class="cancelbtn">Cancel</button>
                </div>
              </form>
            </div>
        </header>
         
<main>