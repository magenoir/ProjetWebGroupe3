<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SITE du BDE CESI</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/styleform.css">
    </head>
    <body>
        <header>
            <div class="content">
                <div class="navbar" id="myNavbar">
                    <a href="#home" class="active">Home</a>
                    <input class="rech" type="text" placeholder="Search..">
                    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
                    <button class="button" onclick="document.getElementById('connect').style.display='block'" style="width:auto;">Sign Up</button>
                </div>

                <div class="title m-b-md">
                    CESI BDE
                </div>

                <div class="bar">
                    <a href="">Actualités</a>
                    <a href="">Événements</a>
                    <a href="">Boite a idées</a>
                    <a href="">Boutique</a>
                </div>
            </div>
        </header>

        <main>
            <div id="connect" class="formu" style="display : none;">
              <span onclick="document.getElementById('connect').style.display='none'" class="close" title="Close Modal">&times;</span>
              <form class="modal-content" action="/action_page.php">
                <div class="container">
                  <h1>Sign Up</h1>
                  <p>Please fill in this form to create an account.</p>
                  <hr>
                  <label for="email"><b>Email</b></label>
                  <input class="ins" type="text" placeholder="Enter Email" name="email" required>

                  <label for="psw"><b>Password</b></label>
                  <input class="ins" type="password" placeholder="Enter Password" name="psw" required>

                  <label for="psw-repeat"><b>Confirmed Password</b></label>
                  <input class="ins" type="password" placeholder="Repeat Password" name="psw-repeat" required>
                  
                  <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                  </label>

                  <div class="clearfix">
                    <button type="button" onclick="document.getElementById('connect').style.display='none'" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signupbtn">Sign Up</button>
                  </div>
                </div>
              </form>
            </div>
        </main>

        <footer>
            
        </footer>
        <script type="text/javascript" src="js/responsive.js"></script>
        <script type="text/javascript" src="js/form.js"></script>

    </body>
</html>
