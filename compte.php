<?php

session_start();

include "./header.php";
include "./config.php";

?>

<body>
    <h1>MON COMPTE</h1>


    <?php
    
    echo('
    <form method="POST">
        <div class="d-flex justify-content-center">
            <div class="list-group">
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="inputAddress" value="' . $_SESSION["nom"] . '" minlength="3" maxlength="50">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="inputAddress2" value="' . $_SESSION["prenom"] . '" minlength="3" maxlength="50">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="inputAddress" value="' . $_SESSION["mdp"] . '" minlength="#">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="inputAddress" value="' . $_SESSION["email"] . '" minlength="3" maxlength="80">
                </div>
                <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-danger">Supprimer mon compte</button>
                    <button type="submit" class="btn btn-primary" name="supprimer">Modifier</button>
                </div>
            </div>
        </div>
    </form>') ?>

<?php 

// $bdd = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8;", DB_USER, DB_PWD);

// if(isset($_POST["supprimer"])) {

//     $idDelete = $_SESSION["id"];

//     $deleteUser = $bdd->prepare("DELETE FROM user WHERE `user`.`id` = ?");
//     $selectUser->execute(array($idDelete));
// }