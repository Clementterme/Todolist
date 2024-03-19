<html lang="en">

<?php 

session_start();

include "header.php"; ?>

<body>
    <h1>TODOLIST</h1>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Liste des tâches -->
    <div class="d-flex justify-content-center">
        <div class="list-group">
            <button type="button" class="list-group-item list-group-item-action d-flex" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                <div class="task"><span class="badge rounded-pill text-bg-danger">Très urgent</span>The current button</div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
            </button>
            <button type="button" class="list-group-item list-group-item-action d-flex" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                <div class="task"><span class="badge rounded-pill text-bg-danger">Très urgent</span>A second button item</div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
            </button>
            <button type="button" class="list-group-item list-group-item-action d-flex" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                <div class="task"><span class="badge rounded-pill text-bg-danger">Très urgent</span>A third button item</div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
            </button>
            <button type="button" class="list-group-item list-group-item-action d-flex" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                <div class="task"><span class="badge rounded-pill text-bg-warning">Urgent</span>A fourth button item</div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
            </button>
            <button type="button" class="list-group-item list-group-item-action d-flex" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                <div class="task"><span class="badge rounded-pill text-bg-warning">Urgent</span>A fourth button item</div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
            </button>
            <button type="button" class="list-group-item list-group-item-action d-flex" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                <div class="task"><span class="badge rounded-pill text-bg-success">Peu urgent</span>A disabled button item</div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
            </button>
            <button type="button" class="list-group-item list-group-item-action d-flex" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                <div class="task"><span class="badge rounded-pill text-bg-success">Peu urgent</span>A disabled button item</div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
            </button>
            <button type="button" class="list-group-item list-group-item-action d-flex" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                <div class="task"><span class="badge rounded-pill text-bg-success">Peu urgent</span>A disabled button item</div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
            </button>
        </div>
    </div>
    <h2>NOUVELLE TACHE</h2>
    <!-- Formulaire pour ajouter une tâche -->
    <form>
        <div class="d-flex justify-content-center">
            <div class="list-group">
                <div class="col-12">
                    <label for="inputTitre" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="inputTitre" required>
                </div>
                <div class="col-12">
                    <label for="inputDescription" class="form-label">Description</label>
                    <input type="text" class="form-control" id="inputDescription">
                </div>
                <div class="col-12">
                    <label for="inputDate" class="form-label">Date</label>
                    <input type="date" class="form-control" id="inputDate" required>
                </div>
                <div class="col-12">
                    <label for="inputPriorite" class="form-label">Priorité</label>
                    <select class="form-select" id="inputPriorite" required>
                        <option value="1">Peu urgent</option>
                        <option value="2">Urgent</option>
                        <option value="3">Très urgent</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="inputCategorie" class="form-label">Catégorie</label>
                    <select class="form-select" id="inputCategorie" required>
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