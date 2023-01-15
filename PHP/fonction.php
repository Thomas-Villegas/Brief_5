<?php
function creationCardCat($title, $link, $cat_id) {
    $card = '<div class="col-12 col-sm-6 col-md-4 col-lg-3 p-3">';
    $card .= '<div class="card border-card" style="width: 100%; border-bottom-left-radius: 0; border-bottom-right-radius: 0;">';
    $card .= '<form method="get" class="lien-card" action="'.$link.'">';
    $card .= '<input type="hidden" name="cat_id" value="'.$cat_id.'">';
    $card .= '<input type="hidden" name="cat_name" value="'.$title.'">';
    $card .= '<button type="submit" class="btn p-0" style="width: 100%">';
    $card .= '<div class="card-body">';
    $card .= '<h5 class="card-title">'.$title.'</h5>';
    $card .= '<div class="container-card">';
    $card .= '</div>';
    $card .= '</div>';
    $card .= '</button>';
    $card .= '</form>';
    $card .= '</div>';
    $card .= '<button type="button" class="btn btn-danger" style="border-top-left-radius: 0; border-top-right-radius: 0; border-bottom-right-radius: 0; width: 50%" onclick="showFormDelete('.$cat_id.')">Supprimer</button>';
    $card .= '<button type="button" class="btn btn-secondary" style="border-top-left-radius: 0; border-top-right-radius: 0; border-bottom-left-radius: 0; width: 50%;" onclick="showFormUpdate('.$cat_id.',\''.$title.'\')">Modifier</button>';
    $card .= '</div>';

    return $card;
}

function creationCardBookmark($title, $description, $url, $bookmark_id, $categorie_id) {
    $card = '<div class="col-12 col-sm-6 col-md-4 col-lg-3 p-3">';
    $card .= '<div class="card border-card" style="width: 100%; border-bottom-left-radius: 0; border-bottom-right-radius: 0;">';
    $card .= '<a href="' . $url . '" class="btn p-0" TARGET=_BLANK>';
    $card .= '<div class="card-body">';
    $card .= '<h5 class="card-title">' . $title . '</h5>';
    $card .= '<p class="card-text">' . $description . '</p>';
    $card .= '<div class="container-card">';
    $card .= '</div>';
    $card .= '</div>';
    $card .= '</a>';
    $card .= '</div>';
    $card .= '<button type="button" class="btn btn-danger" style="border-top-left-radius: 0; border-top-right-radius: 0; border-bottom-right-radius: 0; width: 50%" onclick="showFormDeleteBookmark('.$bookmark_id.')">Supprimer</button>';
    $card .= '<button type="button" class="btn btn-secondary" style="border-top-left-radius: 0; border-top-right-radius: 0; border-bottom-left-radius: 0; width: 50%;" onclick="showFormUpdateBookmark('.$bookmark_id.',\''.$title.'\',\''.$description.'\',\''.$url.'\')">Modifier</button>';
    $card .= '</div>';

    return $card;
}
?>

