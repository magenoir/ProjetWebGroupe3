<?php

if (!empty($_FILES)){
	print_r($_FILES);	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<form class="modal-content animate" method="post">
	        <div class="container">
	            <input class="ins" type="file" placeholder="choisir votre fichier" name="photo" required> 
	            <input type="submit" class="ins" placeholder="Envoyer"> 
	        </div>
	    </form>
	</div>
</body>
</html>
