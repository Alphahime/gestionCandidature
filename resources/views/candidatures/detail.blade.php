<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Détails de la Candidature</title>
    <!-- Inclusion de Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Inclusion de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
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
            margin-left: 270px; /* Ajuster pour laisser de la place à la sidebar */
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
            margin: 0 auto; /* Centrer l'image */
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

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="info-bar">
                    <p><strong>{{ $candidature->nom }} {{ $candidature->prenom }}</strong></p>
                    <p>{{ $candidature->telephone }}</p>
                    <p>{{ $candidature->email }}</p>
                    <p>{{ $candidature->adresse }}</p>
                </div>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-8">
                            <h2>Biographie</h2>
                            <p>{{ $candidature->biographie }}</p>
                            <h2>Motivation</h2>
                            <p>{{ $candidature->motivation }}</p>
                        </div>
                        <div class="col-md-4">
                            <div class="cv-container">
                                <h5>CV de {{ $candidature->nom }} {{ $candidature->prenom }}</h5>
                                <a href="{{ asset('storage/' . $candidature->cv) }}" target="_blank">
                                    <img src="{{ asset('storage/' . $candidature->cv) }}" alt="CV de {{ $candidature->nom }} {{ $candidature->prenom }}">

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Inclusion de Bootstrap JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
