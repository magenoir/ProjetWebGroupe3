<?php

session_start();

$select = array(); 
$select['id'] = "phlevis501"; 
$select['qnt'] = 2; 
$select['taille'] = "56"; 
$select['prix'] = 84.95; 

ajout($select);

/*verification si le panier existe*/
if(!isset($_SESSION['panier'])) 
{ 

	$_SESSION['panier'] = array();

	$_SESSION['panier']['id_article'] = array();
	$_SESSION['panier']['qnt'] = array();
	$_SESSION['panier']['taille'] = array();
	$_SESSION['panier']['prix'] = array();
}

/*fonction qui ajoute a un panier*/
function ajout($select) 
{ 
    array_push($_SESSION['panier']['id_article'],$select['id']); 
    array_push($_SESSION['panier']['qnt'],$select['qnt']); 
    array_push($_SESSION['panier']['taille'],$select['taille']); 
    array_push($_SESSION['panier']['prix'],$select['prix']); 
} 

function verif_panier($ref_article) 
{ 
    /* On initialise la variable de retour */ 
    $present = false; 
    /* On vérifie les numéros de références des articles et on compare avec l'article à vérifier */ 
    if( count($_SESSION['panier']['id_article']) > 0 && array_search($ref_article,$_SESSION['panier']['id_article']) !== false) 
    { 
        $present = true; 
    } 
    return $present; 
}  

function modif_qte($ref_article, $qte) 
{ 
    /* On compte le nombre d'articles différents dans le panier */ 
    $nb_articles = count($_SESSION['panier']['id_article']); 
    /* On initialise la variable de retour */ 
    $ajoute = false; 
    /* On parcoure le tableau de session pour modifier l'article précis. */ 
    for($i = 0; $i < $nb_articles; $i++) 
    { 
        if($ref_article == $_SESSION['panier']['id_article'][$i]) 
        { 
            $_SESSION['panier']['qte'][$i] = $qte; 
            $ajoute = true; 
        } 
    } 
    return $ajoute; 
} 

function supprim_article($ref_article, $reindex = true) 
{ 
    $suppression = false; 
    $aCleSuppr = array_keys($_SESSION['panier']['id_article'], $ref_article); 

    /* sortie la clé a été trouvée */ 
    if (!empty ($aCleSuppr)) 
    { 
        /* on traverse le panier pour supprimer ce qui doit l'être */ 
        foreach ($_SESSION['panier'] as $k=>$v) 
        { 
            foreach($aCleSuppr as $v1) 
            { 
                unset($_SESSION['panier'][$k][$v1]);    // remplace la ligne foireuse 
            } 
            /* si la réindexation est indispensable pour la suite de l'appli, faire ici: */ 
            if($reindex == true) 
            { 
                $_SESSION['panier'][$k] = array_values($_SESSION['panier'][$k]); 
            } 
            $suppression = true; 
        } 
    } 
    else 
    { 
        $suppression = "absent"; 
    } 
    return $suppression; 
} 

function montant_panier() 
{ 
    /* On initialise le montant */ 
    $montant = 0; 
    /* Comptage des articles du panier */ 
    $nb_articles = count($_SESSION['panier']['id_article']); 
    /* On va calculer le total par article */ 
    for($i = 0; $i < $nb_articles; $i++) 
    { 
        $montant += $_SESSION['panier']['qte'][$i] * $_SESSION['panier']['prix'][$i]; 
    } 
    /* On retourne le résultat */ 
    return $montant; 
} 

function vider_panier() 
{ 
    $vide = false; 
    unset($_SESSION['panier']); 
    if(!isset($_SESSION['panier'])) 
    { 
        $vide = true; 
    } 
    return $vide; 
} 

?>