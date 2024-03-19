<?php

session_start();

include "header.php";

// echo ($_SESSION["id"] . '</br>');

// echo ($_SESSION["email"] . '</br>');

// echo ($_SESSION["nom"] . '</br>');

// echo ($_SESSION["prenom"] . '</br>');

// echo ($_SESSION["mdp"] . '</br>');

?>

<body>
    <h1>MON COMPTE</h1>


    <?php
    
    echo('
    <form>
        <div class="d-flex justify-content-center">
            <div class="list-group">
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="inputAddress" value="' . $_SESSION["nom"] . '" required>
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="inputAddress2" value="' . $_SESSION["prenom"] . '" required>
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Mot de passe</label>
                    <input type="text" class="form-control" id="inputAddress" value="' . $_SESSION["mdp"] . '" required>
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">E-mail</label>
                    <input type="text" class="form-control" id="inputAddress" value="' . $_SESSION["email"] . '" required>
                </div>
                <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-danger">Supprimer mon compte</button>
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </div>
            </div>
        </div>
    </form>') ?>