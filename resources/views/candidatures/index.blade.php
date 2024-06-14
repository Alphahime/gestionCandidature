<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard de l'administrateur</title>
    <!-- Inclusion de Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <h1>Liste des Candidatures</h1>
        @if ($candidatures->isEmpty())
            <p>Aucune candidature n'a été soumise.</p>
        @else
            <div class="card-columns">
                @foreach ($candidatures as $candidature)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $candidature->nom }} {{ $candidature->prenom }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $candidature->email }}</h6>
                            <p class="card-text">Âge: {{ $candidature->age }}</p>
                            <p class="card-text">Téléphone: {{ $candidature->telephone }}</p>
                            <p class="card-text">Adresse: {{ $candidature->adresse }}</p>
                            <p class="card-text">Motivation: {{ $candidature->motivation }}</p>
                            <p class="card-text">Biographie: {{ $candidature->biographie }}</p>
                            <a href="{{ asset('storage/' . $candidature->cv) }}" class="card-link" target="_blank">Voir CV</a>
                            <p class="card-text"><small class="text-muted">Date de soumission: {{ $candidature->created_at->format('d/m/Y H:i') }}</small></p>

                            <form action="{{ route('candidatures.action', ['id' => $candidature->id, 'action' => 'valider']) }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-success">Valider</button>
                            </form>
                            
                            <form action="{{ route('candidatures.action', ['id' => $candidature->id, 'action' => 'rejeter']) }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-danger">Rejeter</button>
                            </form>
                            
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <!-- Inclusion de Bootstrap JavaScript (facultatif, pour certains composants Bootstrap) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
