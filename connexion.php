<?php 

session_start();

include "header.php";

$bdd = new PDO("mysql:host=localhost;dbname=todolist;charset=utf8;", "root", "");

if(isset($_POST["envoi"])) {
    if(!empty($_POST["email"]) && !empty($_POST["mdp"])) {
        $email = htmlspecialchars($_POST['email']);
        $mdp = htmlspecialchars($_POST['mdp']);

        $selectUser = $bdd->prepare("SELECT * FROM users WHERE email = ? AND mdp = ?");
        $selectUser->execute(array($email, $mdp));

        if($selectUser->rowCount() > 0) {
            $_SESSION["email"] = $email;
            $_SESSION["mdp"] = $mdp;
            $_SESSION["id"] = $selectUser->fetch()["id"];

            $_SESSION['connecté'] = true.

            header("location: index.php");
        } else {
            echo "Email ou mot de passe incorrect";
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}




?>

<body>
    <h1>CONNEXION</h1>
    <form method="POST">
        <div class="d-flex justify-content-center">
            <div class="list-group">
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">E-mail</label>
                    <input type="text" class="form-control" id="inputAddress2" name="email">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="inputAddress" name="mdp">
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary" name="envoi">Connexion</button>
                </div>
            </div>
        </div>
    </form>