<?php
if (isset($_POST['bookmark-delete'])) {
    $CARD_ID = $_POST['bookmark-delete'];
    
    $sql_delete_bookmark = "DELETE FROM bookmark WHERE bookmark_ID = ?";
    $rs_delete_bookmark = $connexion -> prepare($sql_delete_bookmark);

    if ($rs_delete_bookmark) {
        $rs_delete_bookmark->execute([$CARD_ID]);
    } else {
        $erreur = $connexion -> errorInfo();  
    }
}
?>