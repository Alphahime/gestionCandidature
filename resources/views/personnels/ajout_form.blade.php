<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplon - Liste des Formations</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   
</head>
<body>
    <style>
        body {
    font-family: Arial, sans-serif;
}

.sidebar {
    background-color: #f8f9fa;
    border-right: 1px solid #e0e0e0;
}

.sidebar .logo img {
    width: 150px;
}

.sidebar .nav-link {
    color: #333;
}

.sidebar .nav-link.active {
    color: #e51d3e;
    font-weight: bold;
}

.sidebar .nav-link:hover {
    color: #e51d3e;
}

.sidebar .logout button {
    width: 100%;
}

.card img {
    height: 200px;
    object-fit: cover;
}

.card-body p {
    margin: 0;
}

.btn-outline-secondary {
    color: #e51d3e;
    border-color: #e51d3e;
}

.btn-outline-secondary:hover {
    background-color: #e51d3e;
    color: white;
}

</form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
CSS (styles.css)
css
Copier le code
body {
    background-color: #f8f9fa;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.modal-dialog {
    max-width: 700px;
}

.modal-content {
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}

.modal-header {
    border-bottom: none;
    background-color: #ce0033;
    color: #fff;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
}

.modal-header .btn-close {
    background: #fff;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.modal-header .btn-close:hover {
    background: #0056b3;
}

.modal-title {
    margin: 0 auto;
}

.modal-body {
    padding: 2rem;
}

.form-group label {
    font-weight: bold;
    color: #333;
}

.form-control {
    border-radius: 5px;
    box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}

.form-control:focus {
    border-color: #ce0033;
    box-shadow: 0 0 5px rgba(0,123,255,.25);
}

.btn-primary {
    background-color: #007bff;
    border: none;
    padding: 10px 20px;
    font-size: 1.1em;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.text-center {
    margin-top: 1rem;
}

    </style>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <div class="logo text-center my-4">
                        <img src="logo.png" alt="Simplon Senegal" class="img-fluid">
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <span data-feather="home"></span>
                                Tableau de bord
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                                Formations
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="users"></span>
                                Liste des Candidats
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="bell"></span>
                                Notifications
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="settings"></span>
                                Apparence
                            </a>
                        </li>
                    </ul>
                    <div class="logout text-center my-4">
                        <button class="btn btn-danger">Déconnexion</button>
                    </div>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Liste des Formations</h1>
                   
                </div>

                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Ajouter une formation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action='/ajout_traitement' method="POST">
                                @csrf
                                <div class="form-row mb-3">
                                    <div class="form-group col-md-6">
                                        <label for="libelle">Libellé</label>
                                        <input name="libelle" type="text" class="form-control" id="libelle" placeholder="Donner le nom de la formation">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lieu">Lieu</label>
                                        <input name="lieu" type="text" class="form-control" id="lieu" placeholder="Lieu de la formation">
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="form-group col-md-6">
                                        <label for="description">Description</label>
                                        <textarea name="description" class="form-control" id="description" placeholder="Donnez une description de la formation" rows="3"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="horaire">Horaire</label>
                                        <input name="horaire" type="text" class="form-control" id="horaire" placeholder="Horaire de la formation">
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="form-group col-md-6">
                                        <label for="duree">Durée</label>
                                        <input name="duree" type="text" class="form-control" id="duree" placeholder="Durée de la formation">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="dateLimite">Délai Candidature</label>
                                        <input type="date" class="form-control" name="dateLimite" id="dateLimite">
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="form-group col-md-6">
                                        <label for="datePublication">Publié le</label>
                                        <input type="date" class="form-control" name="datePublication" id="datePublication">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="dateDebut">Démarrage</label>
                                        <input type="date" class="form-control" name="dateDebut" id="dateDebut">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
                    
                </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
