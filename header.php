<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODOLIST</title>
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="icon" href="./images/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./assets/script.js" defer></script>
</head>

<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top" data-bs-theme="dark">
    <div class="container-fluid">
        <div>
            <a class="navbar-brand" href="./index.php"><img class="logo" src="./images/favicon.png"></a>
        </div>
        <div><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button></div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">Todolist</a>
                </li>
                <?php if (isset($_SESSION['connecté'])) {
                    echo ('<li class="nav-item">
                    <a class="nav-link" href="./compte.php">Mon compte</a>
                </li>');
                }
                ?>
            </ul>
            <?php if (isset($_SESSION['connecté'])) {
                echo ('<li class="bonjour">Bonjour ' . $_SESSION["prenom"] . ' !</li>'); ?>
                <a href="./deconnexion.php"><button class="btn btn-outline-success" type="submit">Déconnexion</button></a>
            <?php } else { ?>
                <a href="./connexion.php"><button class="btn btn-outline-success" type="submit">Connexion</button></a>
                <a href="./inscription.php"><button class="btn btn-outline-success" type="submit">Inscription</button></a>
            <?php } ?>
        </div>
    </div>
</nav>