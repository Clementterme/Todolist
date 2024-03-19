<?php 

session_start();

include "header.php";

$bdd = new PDO("mysql:host=localhost;dbname=todolist;charset=utf8;", "root", "");

if (isset($_POST["envoi"])) {
    if (!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["mdp"]) && !empty($_POST["mdp2"]) && !empty($_POST["email"])) {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $mdp = htmlspecialchars($_POST['mdp']);
        $mdp2 = htmlspecialchars($_POST['mdp2']);
        $email = htmlspecialchars($_POST['email']);

        $insertUser = $bdd->prepare("INSERT INTO users(nom, prenom, mdp, email) VALUES(?, ?, ?, ?)");
        $insertUser->execute(array($nom, $prenom, $mdp, $email));


        // Récupérer l'utilisateur
        $selectUser = $bdd->prepare("SELECT * FROM users WHERE nom = ? AND prenom = ? AND mdp = ? AND email = ?");
        $selectUser->execute(array($nom, $prenom, $mdp, $email));
        if ($selectUser->rowCount() > 0) {
            $_SESSION["nom"] = $nom;
            $_SESSION["prenom"] = $prenom;
            $_SESSION["mdp"] = $mdp;
            $_SESSION["email"] = $email;

            $_SESSION["id"] = $selectUser->fetch()["id"];
        }

        header("location: index.php");
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}



?>

<body>
    <h1>INSCRIPTION</h1>
    <form method="POST">
        <div class="d-flex justify-content-center">
            <div class="list-group">
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="inputAddress" name="nom">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="inputAddress2" name="prenom">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="inputAddress" name="mdp">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Confirmation du mot de passe</label>
                    <input type="password" class="form-control" id="inputAddress2" name="mdp2">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">E-mail</label>
                    <input type="text" class="form-control" id="inputAddress" name="email">
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary" name="envoi">S'inscrire</button>
                </div>
            </div>
        </div>
    </form>