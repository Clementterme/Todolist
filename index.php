<html lang="en">

<?php include "header.php" ?>

<body>
    <h1>TODOLIST</h1>

    <div class="d-flex justify-content-center">
        <div class="list-group">
            <button type="button" class="list-group-item list-group-item-action d-flex">
                <div class="task"><span class="badge rounded-pill text-bg-danger">Très urgent</span>The current button</div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
            </button>
            <button type="button" class="list-group-item list-group-item-action d-flex"><div class="task"><span class="badge rounded-pill text-bg-danger">Très urgent</span>A second button item</div><div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div></button>
            <button type="button" class="list-group-item list-group-item-action d-flex"><div class="task"><span class="badge rounded-pill text-bg-danger">Très urgent</span>A third button item</div><div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div></button>
            <button type="button" class="list-group-item list-group-item-action d-flex"><div class="task"><span class="badge rounded-pill text-bg-warning">Urgent</span>A fourth button item</div><div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div></button>
            <button type="button" class="list-group-item list-group-item-action d-flex"><div class="task"><span class="badge rounded-pill text-bg-warning">Urgent</span>A fourth button item</div><div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div></button>
            <button type="button" class="list-group-item list-group-item-action d-flex"><div class="task"><span class="badge rounded-pill text-bg-success">Peu urgent</span>A disabled button item</div><div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div></button>
            <button type="button" class="list-group-item list-group-item-action d-flex"><div class="task"><span class="badge rounded-pill text-bg-success">Peu urgent</span>A disabled button item</div><div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div></button>
            <button type="button" class="list-group-item list-group-item-action d-flex"><div class="task"><span class="badge rounded-pill text-bg-success">Peu urgent</span>A disabled button item</div><div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div></button>
        </div>
    </div>
    <h2>NOUVELLE TACHE</h2>
    <form>
        <div class="d-flex justify-content-center">
            <div class="list-group">
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="inputAddress" required>
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Description</label>
                    <input type="text" class="form-control" id="inputAddress2">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Date</label>
                    <input type="date" class="form-control" id="inputAddress" required>
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Priorité</label>
                    <select class="form-select" id="inputGroupSelect01" required>
                        <option selected>Définir la priorité</option>
                        <option value="1">Très urgent</option>
                        <option value="2">Urgent</option>
                        <option value="3">Peu urgent</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Catégorie</label>
                    <select class="form-select" id="inputGroupSelect01" required>
                        <option selected>Choisir la catégorie</option>
                        <option value="1">Personnel</option>
                        <option value="2">Professionnel</option>
                        <option value="3">Familial</option>
                    </select>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
            </div>
        </div>

    </form>
</body>

</html>