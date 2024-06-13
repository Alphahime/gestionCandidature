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

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;

}


h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #4A90E2;
}
.Btn_add {
    width: fit-content;
    margin-bottom:20px;
    background-color: #2bc48a;
    padding: 5px 20px;
    color: #fff;
    display: flex;
    align-items: center;
    text-align: 0;
    border-radius: 6px;
    text-decoration: 0;
}
.Btn_add img {
    margin-right: 5px;
    height: 20px;
}
/*tableau*/
table {
    margin: auto;
    border-collapse: separate;
    background-color: #fff;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    margin-top: 30px;
}
th, td {
    padding: 15px;
    text-align: center;
    font-size: 14px;
}

th {
    background-color: #4A90E2;
    color: #fff;
    font-size: 16px;
    font-weight: 500;
   
}

td {
    background-color: #fff;
    font-weight: 400;
}

tr:nth-child(even) {
    background-color: #f6f8f8;
}

tr:nth-child(even) td {
    border-bottom: 1px solid #e0e0e0;
    border-top:  1px solid #e0e0e0;
}
img {
    height: 25px;
   
}
/*Form CSS*/

.form form {
    display: flex;
    width: 100%;
    flex-direction: column;
    margin: auto;
}
.back_btn {
    color: rgba(48, 17, 188, 1);
    text-decoration: 0;
    display: flex;
    align-items: center;
}
.back_btn img {
    height: 16px;
    margin-right:5px ;
    color: rgba(48, 17, 188, 1);
}

.erreur_message {
    color: red;
    font-size: 12px;
}

body {
    display: block;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    position: relative;
    background-color: #f0f0f0;
}


.form {
    display:flex;
    flex-direction: column;
   background-color: #fff;
    padding: 25px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    width: 35%;
    margin: auto;
    margin-top: 50px;
}




h2 {
    margin: 10px 0;
    font-weight: 500;
    text-transform: uppercase;
    color:#4A90E2 ;
}

label {
    margin-top: 5px;
    text-transform: uppercase;
}
input{
    padding: 5px;
    border: 1px solid #999;
    outline: 0;
    margin-top: 2px;
}
input:focus{
    border: 1px solid #ffcb61;
}
input[type="submit"]{
    margin-top: 25px;
    background-color: rgba(48, 17, 188, 1);
    border: 1px solid #2bc48a;
    cursor: pointer;
    color: #fff;
    text-transform: uppercase;
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

                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            

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
