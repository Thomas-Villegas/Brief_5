<?php
$CAT_ID = $_POST['cat_id'];

$sql_select_bookmark = "SELECT * FROM bookmark INNER JOIN categorie ON categorie.categorie_ID = bookmark.bookmark_ID WHERE bookmark.categorie_ID = ?";
$rs_select_bookmark = $connexion->prepare($sql_select_bookmark);

if ($rs_select_bookmark) {
    $rs_select_bookmark->execute(array($CAT_ID));
};

while ($data = $rs_select_bookmark->fetch(PDO::FETCH_ASSOC)) {
    $card = creationCardBookmark($data['bookmark_name'], $data['bookmark_description'], $data['bookmark_url'], $data['bookmark_ID'], $data['categorie_ID']);
    echo $card;
};
?>