@include('header')

<?php

include 'photo.php';

// Paramètres
$images_dir = 'images/min/';
$thumbs_dir = 'images/min/';

// Largeur des images
$thumbs_width = 200;

// Nombres d'images par ligne
$images_per_row = 6;

// Récupération de la liste des images
$image_files = get_files($images_dir);

// S'il y a au moins 1 image on rentre dans le script
if(count($image_files)) {
  $index = 0;
  
  // Traitement des images
  foreach($image_files as $index=>$file) {
    $index++;
    $thumbnail_image = $thumbs_dir.$file;
    
    if(!file_exists($thumbnail_image)) {
      $extension = get_file_extension($thumbnail_image);
      
      // Si l'extension est reconnue alors on génère l'image
      if($extension) {
        make_thumb($images_dir.$file.$thumbnail_image.$thumbs_width);
      }
    }
    // Une fois que les images ont été générées la boucle foreach prépare le code html pour chaque image
    echo '<div class="photo">
	<div class="photo_col">
		<img src="'.$thumbnail_image.'" />
	</div></div>';
    echo "\n";
    
    // On place à la fin de chaque ligne un clear pour que tout soit bien aligné
    if($index % $images_per_row == 0) { echo '<div class="clear"></div>'; echo "\n"; }
  }
  echo '<div class="clear"></div>';
}

else {
  // Si aucune image n'a été trouvé
  echo '<p>Aucune image dans cette galerie.</p>';
}

?>

<!-- formulaire pour ajouter une photo -->
<div>
	<form class="modal-content animate" method="post" action="uploadImg.php" enctype="multipart/form-data">
        <div class="container">
            <label for="photo"><b>Publier une photo</b></label>
            <input class="ins" type="file" placeholder="choisir votre fichier" name="photo" required>      
            <input type="submit" name="envois" placeholder="envoyer">
        </div>
    </form>
</div>






@include('footer')