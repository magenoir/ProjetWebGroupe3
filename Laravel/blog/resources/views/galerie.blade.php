@include('headercopy')

<h1 class="titre">Galerie</h1>

<!-- première ligne de la galerie -->
<div class="photo">
<div class="photo_col">
 <img src="images/evenement.jpg" alt="evenement">
</div>
<div class="photo_col">
 <img src="images/event1.jpg" alt="evenement 2">
</div>
<div class="photo_col">
 <img src="images/event2.jpg" alt="evenement 3">
</div>
<div class="photo_col">
 <img src="images/event3.jpg" alt="evenement 4">
</div>
</div>

<!-- deuxième ligne de la galerie -->
<div class="photo">
<div class="photo_col">
 <img src="images/evenement.jpg" alt="evenement">
</div>
<div class="photo_col">
 <img src="images/event1.jpg" alt="evenement 2">
</div>
<div class="photo_col">
 <img src="images/event2.jpg" alt="evenement 3">
</div>
<div class="photo_col">
 <img src="images/event3.jpg" alt="evenement 4">
</div>
</div>
<div>
<form class="modal-content animate" method="GET" action="">
        <div class="container">
            <label for="photo"><b>Publier une photo</b></label>
            <input class="ins" type="file" placeholder="choisir votre fichier" name="photo" required>
                   
            <button type="submit">Envoyer</button>
        </div>
    </form>
</div>

@include('footer')