<?php
if (isset($_POST['category-new-name'])) {
    $CARD_ID = $_POST['category-id'];
    $CARD_NEW_NAME = $_POST['category-new-name'];
    
    $sql_update_categorie = "UPDATE categorie SET categorie_name = :categorie_name WHERE categorie_ID = :categorie_id";
    $rs_update_cat = $connexion -> prepare($sql_update_categorie);

    if ($rs_update_cat) {
        $rs_update_cat -> execute(['categorie_name' => $CARD_NEW_NAME,
                                    'categorie_id' => $CARD_ID,]);
    } else {
        $erreur = $connexion -> errorInfo();  
    }
}
?>