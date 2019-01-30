<?php

if(isset($_POST) && !empty($_POST)){
	  if ($_FILES['photo']['error'] == 0) {

	    if ($_FILES['photo']['size'] > 2000000) {
	      $error = "votre image est trop lourde";
	  	  echo $error;
	    }

	    $extension = strrchr($_FILES['photo']['name'], '.');
	    if ($extension =! ('.jpg' || '.png')) {
	      $error = "votre image n'est pas conforme.";
	      echo $error;
	    }

	    if (!isset($error)) {
	      move_uploaded_file($_FILES['photo']['tmp_name'], 'images/min/'.$_FILES['photo']['name']);
	    }

	  }
	  else{
	    $error = 'problème de formulaire';
	    echo $error;
	  }
	}

?>
