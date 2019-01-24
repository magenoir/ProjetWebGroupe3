@include('header')


<style type="text/css">
	.desc {
	  width: 100%;
	  height: 100px;
	  padding: 12px 20px;
	  margin: 8px 0;
	  display: inline-block;
	  border: 1px solid #999;
	  border-radius: 0.2em;
	  box-sizing: border-box;
	}

	.contient {
	  padding: 16px;
	  text-align: center;
	}
</style>


<form class="modal-content animate" method="POST" action="/boite_idee">
	@csrf
	<div class="contient">
    	<label for="Name"><b>Name</b></label>
     	<input class="ins" type="text" placeholder="Enter your Name" name="Name" required>

    	<label for="FName"><b>First-Name</b></label>
    	<input class="ins" type="text" placeholder="Enter First-Name" name="FName" required>

    	<label for="idea"><b>Description idée</b></label>
    	<TEXTAREA class="desc" name="Desc" placeholder="Description" onkeyup="javascript:capaTextarea(this, 250);"></TEXTAREA>
                    
    	<button type="submit">Create</button>
	</div>
</form>

<div class="evenement">
	<img src="images/evenement.jpg" alt="Avatar" >
	<p><span>Événement 2</span>Rôle play</p>
	<p>Une soirée JDR est organiser par l'association Role Exia</p>
</div>

<div class="evenement">
  <img src="images/evenement.jpg" alt="Avatar" >
  <p><span>Événement 1</span>Lan CS GO</p>
  <p>un tournois counter strike global offensive est organiser par Exia Lan.</p>
</div>

<div class="evenement">
	<img src="images/evenement.jpg" alt="Avatar" >
	<p><span>Événement 2</span>Rôle play</p>
	<p>Une soirée JDR est organiser par l'association Role Exia</p>
</div>

@include('footer')