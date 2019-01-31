@include('header')

<form class="modal-content animate" method="POST" action="/boite_idee">
	@csrf
	<div class="contient">

		<label for="E-mail"><b>E-Mail</b></label>
    	<input class="ins" type="text" placeholder="Entre ton E-mail" name="E-mail" required>

    	<label for="Name_event"><b>Name event</b></label>
     	<input class="ins" type="text" placeholder="Entre le nom de l'event" name="Name_event" required>

    	<label for="lieu"><b>Location</b></label>
    	<input class="ins" type="text" placeholder="Entre ton lieu d'événement" name="lieu" required>

    	<label for="date"><b>Date</b></label>
    	<input class="ins" type="text" name="date" placeholder="format : AAAA-MM-JJ" required>

    	<label for="idea"><b>Description idée</b></label>
    	<TEXTAREA class="desc" name="Desc" placeholder="Description" onkeyup="javascript:capaTextarea(this, 250);"></TEXTAREA>
                    
    	<button type="submit">Create</button>
	</div>
</form>

<div class="evenement">
	<img class="info" src="images/evenement.jpg" alt="Avatar" >
	<p><span>Événement 2</span>Rôle play</p>
	<p>Une soirée JDR est organiser par l'association Role Exia</p>
	<img src="images/like.png" style="width: 50px;height: 50px;">
</div>

@include('footer')