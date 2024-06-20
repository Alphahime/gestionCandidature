<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplon - Liste des Formations</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            display: block;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #f0f0f0;
        }

        .sidebar {
            background-color: #f8f9fa;
            border-right: 1px solid #e0e0e0;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            height: 100vh;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            width: 250px;
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

        .sidebar .logout {
            position: absolute;
            bottom: 20px;
            width: 100%;
        }

        .content {
            margin-left: 270px; /* Adjust to leave space for the sidebar */
            padding: 20px;
        }

        .info-bar {
            background-color: #e51d3e;
            color: white;
            padding: 10px 15px;
            margin-bottom: 20px;
        }

        .info-bar p {
            margin-bottom: 0.5rem;
        }

        .cv-container {
            margin-top: 20px;
        }

        .cv-container img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto; /* Center the image */
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #4A90E2;
        }

        .Btn_add {
            width: fit-content;
            margin-bottom: 20px;
            background-color: #2bc48a;
            padding: 5px 20px;
            color: #fff;
            display: flex;
            align-items: center;
            border-radius: 6px;
            text-decoration: 0;
        }

        .Btn_add img {
            margin-right: 5px;
            height: 20px;
        }

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
            margin-right: 5px;
            color: rgba(48, 17, 188, 1);
        }

        .erreur_message {
            color: red;
            font-size: 12px;
        }

        .form {
            display: flex;
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
            color: #4A90E2;
        }

        label {
            margin-top: 5px;
            text-transform: uppercase;
        }

        input {
            padding: 5px;
            border: 1px solid #999;
            outline: 0;
            margin-top: 2px;
        }

        input:focus {
            border: 1px solid #ffcb61;
        }

        input[type="submit"] {
            margin-top: 25px;
            background-color: rgba(48, 17, 188, 1);
            border: 1px solid #2bc48a;
            cursor: pointer;
            color: #fff;
            text-transform: uppercase;
        }

        .card {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .card-body {
            flex: 1;
        }

        .card-footer {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
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
                                <i class="fas fa-home"></i>
                                Tableau de bord
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/liste">
                                <i class="fas fa-file"></i>
                                Formations
                            </a>
                            <a class="nav-link" href="/ajout_form">
                                <i class="fas fa-add"></i>
                                ajouter
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/candidatures">
                                <i class="fas fa-users"></i>
                                Liste des Candidats
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-bell"></i>
                                Notifications
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-cogs"></i>
                                Apparence
                            </a>
                        </li>
                    </ul>
                    <div class="logout text-center my-4">
                        <form action="/personnel/deconnexion" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                <i class="fas fa-sign-out-alt"></i> Déconnexion
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 content">
                <div class="content-page">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        @foreach($formations as $formation)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <p class="card-text"><strong>Libelle :</strong> {{ $formation->libelle }}</p>
                                    <p class="card-text"><strong>Description:</strong> {{ $formation->description }}</p>
                                    <p class="card-text"><strong>Lieu :</strong> {{ $formation->lieu }}</p>
                                    <p class="card-text"><strong>Horaire :</strong> {{ $formation->horaire }}</p>
                                    <p class="card-text"><strong>Durée:</strong> {{ $formation->duree }}</p>
                                    <p class="card-text"><strong>Demarrage :</strong> {{ $formation->dateDebut }}</p>
                                    <p class="card-text"><strong>Delai Candidature :</strong> {{ $formation->dateLimite }}</p>
                                    <p class="card-text"><strong>Publié le :</strong> {{ $formation->datePublication }}</p>
                                </div>
                                <div class="card-footer">
                                    <a href="/modif_form/{{$formation->id}}" class="text-primary"><i class="fas fa-edit"></i></a>
                                    <a href="/supprimer_form/{{$formation->id}}" class="text-danger"><i class="fas fa-trash"></i></a>
                                </div>
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
