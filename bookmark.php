<?php
$CAT_NAME = $_GET['cat_name'];
$CAT_ID = $_GET['cat_id'];

require ('PHP/connexion.php');
require ('PHP/fonction.php');
require ('HTML/head.html');
require ('HTML/header_bookmark.html');
require ('PHP/name_cat_for_bookmark.php');
require ('PHP/update_bookmark.php');
require ('PHP/new_bookmark.php');
require ('PHP/delete_bookmark.php');
require ('PHP/select_bookmark.php');
require ('HTML/main_bookmark.html');
require ('HTML/footer.html');
?>