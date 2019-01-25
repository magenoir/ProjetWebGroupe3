@include('header')

<form action="/inscription" method="post">

<label for="Name"><b>Prénom</b></label>
<input type="text" name=name placeholder="Prénom">

<label for="FName"><b>Nom</b></label>
<input type="text" name=firstname placeholder="Nom">

<label for="center"><b>Centre</b></label>
<input type="text" name=centre placeholder="Centre">

<label for="E-mail"><b>E-mail</b></label>
<input type="text" name=email placeholder="Email">
                  
<label for="psw"><b>Mot de passe</b></label>
<input type="password" name=password placeholder="Mot de passe">
                  

<input type="submit" value="M'inscrire" >

</form>         



@include('footer')

