<?php
$sql_select_bookmark = "SELECT * FROM bookmark WHERE categorie_ID = :category_ID";
$rs_select_bookmark = $connexion->prepare($sql_select_bookmark);

if ($rs_select_bookmark) {
    $rs_select_bookmark->execute(['category_ID' => $CAT_ID]);
};

while ($data = $rs_select_bookmark->fetch(PDO::FETCH_ASSOC)) {
    $card = creationCardBookmark($data['bookmark_name'], $data['bookmark_description'], $data['bookmark_url'], $data['bookmark_ID'], $data['categorie_ID']);
    echo $card;
};
?>