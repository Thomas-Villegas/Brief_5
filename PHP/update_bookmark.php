<?php
if((isset($_POST['bookmark-name'])) and (isset($_POST['bookmark-description'])) and (isset($_POST['bookmark-url']))) {
    $BOOKMARK_NAME = $_POST['bookmark-name'];
    $BOOKMARK_DESCRIPTION = $_POST['bookmark-description'];
    $BOOKMARK_URL = $_POST['bookmark-url'];
    $BOOKMARK_ID = $_POST['bookmark-id'];

    $sql_new_bookmark = "UPDATE bookmark SET bookmark_name = :bookmark_name, bookmark_description = :bookmark_description, bookmark_url = :bookmark_url WHERE bookmark_ID = :bookmark_ID";
    $rs_new_bookmark = $connexion->prepare($sql_new_bookmark);
    
    if ($rs_new_bookmark) {
    $rs_new_bookmark->execute(['bookmark_name' => $BOOKMARK_NAME,
                                'bookmark_description' => $BOOKMARK_DESCRIPTION,
                                'bookmark_url' => $BOOKMARK_URL,
                                'bookmark_ID' => $BOOKMARK_ID,]);
    } else {
        $erreur = $connexion->errorInfo();
        echo 'Un problème est survenue !';
    };
}
?>