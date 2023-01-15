<?php
if(isset($_POST['category-name'])) {
    $CATEGORIE_NAME = $_POST['category-name'];

    $sql_new_categorie = "INSERT INTO categorie (categorie_name) VALUES (:categorie_name)";
    $rs_new_categorie = $connexion->prepare($sql_new_categorie);

    $rs_new_categorie->bindValue(':categorie_name', $CATEGORIE_NAME, PDO::PARAM_STR);

    if ($rs_new_categorie) {
        $rs_new_categorie->execute();
    } else {
        $erreur = $connexion->errorInfo();
    echo 'Un problème est survenu !';
    }
}
?>
