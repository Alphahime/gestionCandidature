<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Candidatures pour la formation {{ $formation->libelle }}</title>
    <!-- Inclusion de Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Inclusion de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            padding: 20px;
        }

        .card {
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #e51d3e;
            color: white;
        }

        .card-body {
            padding: 15px;
        }

        .btn-back {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="mt-4">Candidatures pour la formation "{{ $formation->libelle }}"</h1>

        <a href="#" class="btn btn-secondary btn-back">
            <i class="fas fa-arrow-left"></i> Retour à la liste des formations
        </a>


        @if ($candidatures->isEmpty())
        <p>Aucune candidature n'a été soumise pour cette formation.</p>
        @else
        @foreach ($candidatures as $candidature)
        <div class="card">
            <div class="card-header">
                {{ $candidature->candidat->nom }} {{ $candidature->candidat->prenom }}  {{ $candidature->candidat->age }} ans
            </div>
            <div class="card-body">
                <p><strong>Email:</strong> {{ $candidature->candidat->email }}</p>
                <p><strong>Adresse:</strong> {{ $candidature->candidat->adresse }}</p>
                <p><strong>Téléphone:</strong> {{ $candidature->candidat->telephone }}</p>
                <p><strong>Biographie:</strong> {{ $candidature->biographie }}</p>
                <p><strong>Motivation:</strong> {{ $candidature->motivation }}</p>

                <a href="{{ asset('storage/' . $candidature->cv) }}" target="_blank">
                       <img src="{{ asset('storage/' . $candidature->cv) }}" alt="CV de {{ $candidature->candidat->nom }} {{ $candidature->candidat->prenom }}">
                   </a>
                <p><strong>Date de soumission:</strong> {{ $candidature->created_at->format('d/m/Y H:i') }}</p>
                <!-- Ajoutez d'autres détails si nécessaire -->
            </div>
        </div>
        @endforeach
        @endif
    </div>

    <!-- Inclusion de Bootstrap JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
