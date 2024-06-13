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
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <a href="/ajout_form" class="btn btn-sm btn-outline-secondary">Ajouter</a>
                        </div>
                    </div>
                </div>
            

                    <div class="col-md-6">
                        @foreach($formations as $formation)
                        <div class="card mb-4 shadow-sm">
                            <img src="formation1.jpg" class="card-img-top" alt="Formation 1">
                            <div class="card-body">
                            
                                    <p class="card-text"> <strong>Libelle :</strong> {{ $formation->libelle }} </p><br>
                                    <p class="card-text"> <strong>Description:</strong> {{ $formation->description }}</p> <br>
                                    <p class="card-text"> <strong>Lieu :</strong> {{ $formation->lieu}}</p> <br>
                                    <p class="card-text"> <strong>Horaire :</strong> {{ $formation->horaire }} </p> <br>
                                    <p class="card-text"> <strong>Durée:</strong> {{ $formation->duree }} </p> <br>
                                    <p class="card-text"> <strong>Demarrage :</strong> {{ $formation->dateDebut }} </p><br>
                                    <p class="card-text"> <strong>Delai Candidature :</strong> {{ $formation->dateLimite }}</p><br>
                                    <p class="card-text"> <strong>Publié le : </strong>{{ $formation->datePublication}}</p><br>
                                    <td><a href="/modif_form/{{$formation->id}}" class="btn btn-primary">Modifier</a></td>
                                    <td><a href="/supprimer_form/{{$formation->id}}" class="btn btn-danger">Supprimer</a></td>
                                 
                              
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
