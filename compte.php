<?php 

session_start();

include "header.php"; 

echo($_SESSION["id"]);

echo($_SESSION["email"]);

?>

<body>
    <h1>MON COMPTE</h1>
    
    <form>
        <div class="d-flex justify-content-center">
            <div class="list-group">
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="inputAddress" required>
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="inputAddress2" required>
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Mot de passe</label>
                    <input type="text" class="form-control" id="inputAddress" required>
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">E-mail</label>
                    <input type="text" class="form-control" id="inputAddress" required>
                </div>
                <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-danger">Supprimer mon compte</button>
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </div>
            </div>
        </div>
    </form>