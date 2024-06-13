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

        .card {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h2>Biographie</h2>
                <p>{{ $candidature->biographie }}</p>
                <h2>Motivation</h2>
                <p>{{ $candidature->motivation }}</p>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $candidature->nom }} {{ $candidature->prenom }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $candidature->email }}</h6>
                        <p class="card-text">{{ $candidature->adresse }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Inclusion de Bootstrap JavaScript (facultatif, pour certains composants Bootstrap) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
