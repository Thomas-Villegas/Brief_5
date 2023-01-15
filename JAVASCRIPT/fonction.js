// Fonction pop-up pour ajouter un dossier
function showFormAdd() {
  var form = document.createElement('form');
  form.method = 'post';
  form.innerHTML = '<div class="container-form">' +
                  '<label for="category-name" class="mb-3">Nom du nouveau dossier :</label>' +
                  '<input type="text" id="category-name" name="category-name" maxlength="20" required">' +
                  '<button type="submit" class="btn btn-success m-3" value="new">Créer</button>' +
                  '<button class="btn" onclick="hideForm()">Annuler</button>' +
                  '</div>';
      
  var popup = document.createElement('div');
  popup.className = 'form-popup';
  popup.appendChild(form);
  document.body.appendChild(popup);
}

// Fonction pop-up pour modifier un dossier
function showFormUpdate(card_id, name) {
  var form = document.createElement('form');
  form.method = 'post';
  form.innerHTML = '<div class="container-form">' +
                  '<label for="category-new-name" class="mb-3">Nouveau nom du dossier :</label>' +
                  '<input type="text" id="category-new-name" name="category-new-name" maxlength="20" value="'+name+'">' +
                  '<input type="hidden" id="category-id" name="category-id" value="'+card_id+'">' +
                  '<button type="submit" class="btn btn-secondary m-3" value="update">Modifier</button>' +
                  '<button class="btn" onclick="hideForm()">Annuler</button>' +
                  '</div>';

  var popup = document.createElement('div');
  popup.className = 'form-popup';
  popup.appendChild(form);
  document.body.appendChild(popup);
}

// Fonction pop-up pour valider la suppression d'une catégorie
function showFormDelete(card_id) {
  var form = document.createElement('form');
  form.method = 'post';
  form.innerHTML = '<div class="container-form">' +
                  '<label for="category-delete" class="mb-3">Êtes-vous sûr de vouloir supprimer ce dossier ?<br>Tout les liens seront supprimer !</label>' +
                  '<input type="hidden" id="category-delete" name="category-delete" value="'+card_id+'">' +
                  '<button type="submit" class="btn btn-danger m-3" value="delete">Supprimer</button>' +
                  '<button class="btn" onclick="hideForm()">Annuler</button>' +
                  '</div>';

  var popup = document.createElement('div');
  popup.className = 'form-popup';
  popup.appendChild(form);
  document.body.appendChild(popup);
}

// Fonction pop-up pour ajouter un bookmark
function showFormAddBookmark() {
  var form = document.createElement('form');
  form.method = 'post';
  form.innerHTML = '<div class="container-form">' +
                  '<label for="bookmark-name" class="m-2">Titre du marque page :</label>' +
                  '<input type="text" id="new-bookmark-name" name="new-bookmark-name" maxlength="20" required">' +
                  '<label for="bookmark-description" class="m-2">Description du marque page :</label>' +
                  '<input type="text" id="new-bookmark-description" name="new-bookmark-description" maxlength="40" required">' +
                  '<label for="bookmark-url" class="m-2">URL du marque page :</label>' +
                  '<input type="url" id="new-bookmark-url" name="new-bookmark-url" required>' +
                  '<button type="submit" class="btn btn-success m-3" value="new">Créer</button>' +
                  '<button type="submit" class="btn" onclick="hideForm()">Annuler</button>' +
                  '</div>';

  var popup = document.createElement('div');
  popup.className = 'form-popup';
  popup.appendChild(form);
  document.body.appendChild(popup);
}

// Fonction pop-up pour valider la suppression d'un bookmark
function showFormDeleteBookmark(bookmark_id) {
  var form = document.createElement('form');
  form.method = 'post';
  form.innerHTML = '<div class="container-form">' +
                  '<label for="bookmark-delete" class="mb-3">Êtes-vous sûr de vouloir supprimer ce marque page ?</label>' +
                  '<input type="hidden" id="bookmark-delete" name="bookmark-delete" value="'+bookmark_id+'">' +
                  '<button type="submit" class="btn btn-danger m-3" value="delete">Supprimer</button>' +
                  '<button type="submit" class="btn" onclick="hideForm()">Annuler</button>' +
                  '</div>';

  var popup = document.createElement('div');
  popup.className = 'form-popup';
  popup.appendChild(form);
  document.body.appendChild(popup);
}

// Fonction pop-up pour modifier un bookmark
function showFormUpdateBookmark(bookmark_id, name, description, url) {
  var form = document.createElement('form');
  form.method = 'post';
  form.innerHTML = '<div class="container-form">' +
                  '<label for="bookmark-name" class="m-2">Titre du marque page :</label>' +
                  '<input type="text" id="bookmark-name" name="bookmark-name" maxlength="20" value="'+name+'">' +
                  '<label for="bookmark-description" class="m-2">Description du marque page :</label>' +
                  '<input type="text" id="bookmark-description" name="bookmark-description" maxlength="55" value="'+description+'">' +
                  '<label for="bookmark-url" class="m-2">URL du marque page :</label>' +
                  '<input type="url" id="bookmark-url" name="bookmark-url" value="'+url+'">' +
                  '<input type="hidden" id="bookmark-id" name="bookmark-id" value="'+bookmark_id+'">' +
                  '<button type="submit" class="btn btn-secondary m-3" value="update">Modifier</button>' +
                  '<button type="submit" class="btn" onclick="hideForm()">Annuler</button>' +
                  '</div>';

  var popup = document.createElement('div');
  popup.className = 'form-popup';
  popup.appendChild(form);
  document.body.appendChild(popup);
}

// Fonction pour cacher une pop-up
function hideForm() {
  var popup = document.querySelector('.form-popup');
  popup.parentNode.removeChild(popup);
}

