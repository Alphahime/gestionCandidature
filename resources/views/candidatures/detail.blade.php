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
            background-color: #f8f9fa;
        }

        .sidebar {
            background-color: #fff;
            border-right: 1px solid #e0e0e0;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            height: 100vh;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            width: 250px;
            padding-top: 20px;
        }

        .sidebar .logo img {
            width: 150px;
            margin: 0 auto;
            display: block;
        }

        .sidebar .nav-link {
            color: #333;
            font-size: 1.1rem;
            padding: 10px 20px;
            display: flex;
            align-items: center;
        }

        .sidebar .nav-link i {
            font-size: 1.5rem;
            margin-right: 10px;
        }

        .sidebar .nav-link.active,
        .sidebar .nav-link:hover {
            color: #e51d3e;
        }

        .sidebar .logout {
            position: absolute;
            bottom: 20px;
            width: 100%;
        }

        .content {
            margin-left: 270px;
            padding: 20px;
        }

        .info-bar {
            background-color: #e51d3e;
            color: white;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .info-bar p {
            margin-bottom: 0.5rem;
        }

        .info-bar i {
            margin-right: 10px;
        }

        .cv-container img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        h2 {
            margin-top: 20px;
            color: #e51d3e;
        }

        .biographie,
        .motivation {
            margin-top: 20px;
        }

        .biographie h2,
        .motivation h2 {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block sidebar">
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
                            <a class="nav-link" href="#">
                                <i class="fas fa-file"></i>
                                Formations
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
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
                        <button class="btn btn-danger">
                            <i class="fas fa-sign-out-alt"></i> Déconnexion
                        </button>
                    </div>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 content">
                <div class="info-bar">
                    <p><strong>{{ $candidature->nom }} {{ $candidature->prenom }}</strong></p>
                    <p><i class="fas fa-phone"></i> {{ $candidature->telephone }}</p>
                    <p><i class="fas fa-envelope"></i>{{ $candidature->email }}</p>
                    <p><i class="fas fa-map-marker-alt"></i>{{ $candidature->adresse }}</p>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="biographie">
                            <h2>Biographie</h2>
                            <p>{{ $candidature->biographie }}</p>
                        </div>
                        <div class="motivation">
                            <h2>Motivation</h2>
                            <p>{{ $candidature->motivation }}</p>
                        </div>
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
            </main>
        </div>
    </div>

    <!-- Inclusion de Bootstrap JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
