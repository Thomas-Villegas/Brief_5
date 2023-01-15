<?php
if((isset($_POST['new-bookmark-name'])) and (isset($_POST['new-bookmark-description'])) and (isset($_POST['new-bookmark-url']))) {
    $BOOKMARK_NAME = $_POST['new-bookmark-name'];
    $BOOKMARK_DESCRIPTION = $_POST['new-bookmark-description'];
    $BOOKMARK_URL = $_POST['new-bookmark-url'];
    $CAT_ID = $_GET['cat_id'];

    $sql_new_bookmark = "INSERT INTO bookmark (categorie_ID, bookmark_name, bookmark_description, bookmark_url) VALUES (:categorie_ID, :bookmark_name, :bookmark_description, :bookmark_url)";
    $rs_new_bookmark = $connexion->prepare($sql_new_bookmark);
    
    if ($rs_new_bookmark) {
    $rs_new_bookmark->execute(['categorie_ID' => $CAT_ID,
                                    'bookmark_name' => $BOOKMARK_NAME,
                                    'bookmark_description' => $BOOKMARK_DESCRIPTION,
                                    'bookmark_url' => $BOOKMARK_URL]);
    } else {
        $erreur = $connexion->errorInfo();
        echo 'Un problème est survenue !';
    };
}
?>