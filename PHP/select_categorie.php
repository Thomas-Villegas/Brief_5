<?php
$sql_select_name_cat = "SELECT categorie_name, categorie_ID FROM categorie";
$rs_select_name_cat = $connexion->query($sql_select_name_cat);

while($data = $rs_select_name_cat->fetch(PDO::FETCH_ASSOC)) {
    $card = creationCardCat($data['categorie_name'], 'bookmark.php', $data['categorie_ID']);
    echo $card;
}
?>