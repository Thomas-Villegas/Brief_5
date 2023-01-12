<?php
if (isset($_POST['category-delete'])) {
    $CARD_ID = $_POST['category-delete'];
    
    $sql_delete_categorie = "DELETE FROM categorie WHERE categorie_ID = ?";
    $rs_delete_cat = $connexion -> prepare($sql_delete_categorie);

    if ($rs_delete_cat) {
        $rs_delete_cat->execute(array($CARD_ID));
    } else {
        $erreur = $connexion -> errorInfo();  
    }
}
?>
