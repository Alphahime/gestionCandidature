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
body {
    background-color: #f8f9fa;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.modal-dialog {
    max-width: 700px;
}

.modal-header {
    border-bottom: none;
}

.modal-header .close {
    padding: 1rem;
    margin: -1rem -1rem -1rem auto;
}

.modal-title {
    margin: 0 auto;
}

.modal-body {
    padding: 2rem;
}

.form-group label {
    font-weight: bold;
}

.btn-primary {
    background-color: #007bff;
    border: none;
    padding: 10px 20px;
    font-size: 1.1em;
    border-radius: 5px;
}

.btn-primary:hover {
    background-color: #0056b3;
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

                <div class="row">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modifier une formation</h5>
                                <a type="button" href="/liste" class="close" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </a>
                            </div>
                                 
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li class="alert alert-danger">
                                    {{$error}}
                                </li>
                                    @endforeach
                                </ul>


                                @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif


                            <div class="modal-body">
                                <form action='/modif_form/{id}' method="POST">
                                    @csrf
                                    <div class="form-row">
                                        <input type="hidden" name="id" value="{{$formation->id}}">
                                        <div class="form-group col-md-6">
                                            <label for="libelle">Libellé</label>
                                            <input name="libelle" type="text" class="form-control" id="libelle" value="{{$formation->libelle}}" placeholder="Donner le nom de la formation">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="lieu">Lieu</label>
                                            <input name="lieu" type="text" class="form-control" id="lieu" value="{{$formation->lieu}}" placeholder="Lieu de la formation">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="description">Description</label>
                                            <textarea name="description" class="form-control" id="description"  placeholder="Donnez une description de la formation" rows="3"> {{$formation->description}} </textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="horaire">Horaire</label>
                                            <input name="horaire" type="text" class="form-control" id="horaire" value="{{$formation->horaire}}"  placeholder="Horaire de la formation">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="duree">Durée</label>
                                            <input name="duree" type="text" class="form-control" id="duree" value="{{$formation->duree}}"  placeholder="Durée de la formation">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="type">Delai Candidature</label>
                                            <input type="date" class="form-control"   name="dateLimite" id="type" value="{{$formation->dateLimite}}"  placeholder="Dernier delai de Candidature">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="duree">Publie le</label>
                                            <input type="date" class="form-control"  name="datePublication" value="{{$formation->datePublication}}" id="datePublication" placeholder="Date de Publication">
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="type">Demarrage</label>
                                            <input type="date" class="form-control"  name="dateDebut" id="type" value="{{$formation->dateDebut}}"  placeholder="Demarrage des cours">
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
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
