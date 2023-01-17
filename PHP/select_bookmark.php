<?php
//Préparation de la requete SQL avec la méthode "prepare"
$sql_select_bookmark = "SELECT * FROM bookmark WHERE categorie_ID = :category_ID";
$rs_select_bookmark = $connexion->prepare($sql_select_bookmark);

//Execution de la requête SQL avec la méthode "execute"
if ($rs_select_bookmark) {
    $rs_select_bookmark->execute(['category_ID' => $CAT_ID]);
};

//Boucle de création des cards pour chaque bookmark
while ($data = $rs_select_bookmark->fetch(PDO::FETCH_ASSOC)) {
    $card = creationCardBookmark($data['bookmark_name'], 
                                $data['bookmark_description'], 
                                $data['bookmark_url'], 
                                $data['bookmark_ID'], 
                                $data['categorie_ID']);
    echo $card;
};
?>