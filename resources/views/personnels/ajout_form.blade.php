<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Dashboard Personnel</title>
    <style>
      body{
            background-image:url("{{ asset('images/backgroundimg.png') }}");
            background-repeat: no-repeat;
            background-size:cover;
        }
        .imgfoot{
            margin-top:3vh;
            margin-left:5vh
        }
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }
        .form-control {
            max-width: 100%;
        }
        h1 {
            font-size: 2rem;
            font-weight: 500;
            text-align: center;
            margin-bottom: 6vh;
            background-color: #CE0033; 
            color: white; 
            padding: 10px; 
            border-radius: 5px;
        }
        .btn{
            background-color:#CE0033;
            border:none;
        }
    </style>
</head>
<body>
<header>
        <img src="{{ asset('images/logosimplon.png') }}" alt="" class="imgfoot" width="auto" height="50">
    </header>

            <div class="container form-container">
                 <h1>Ajouter une formation</h1>
    
                @if(session('success'))
                  <div class="alert alert-success">
                    {{ session('success') }}
                   </div>
                @endif
                <form action='/ajout_traitement' method="POST">
                    @csrf
                    <div class="form-group">
                            <label for="libelle">Libellé</label>
                            <input name="libelle" type="text" class="form-control" id="libelle" placeholder="Donner le nom de la formation">
                        </div>
                        <div class="form-group">
                            <label for="lieu">Lieu</label>
                            <input name="lieu" type="text" class="form-control" id="lieu" placeholder="Lieu de la formation">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" id="description" placeholder="Donnez une description de la formation" rows="3"></textarea>
                        </div>
                        <div class="form-group >
                            <label for="horaire">Horaire</label>
                            <input name="horaire" type="text" class="form-control" id="horaire" placeholder="Horaire de la formation">
                        </div>
                        <div class="form-group">
                            <label for="duree">Durée</label>
                            <input name="duree" type="text" class="form-control" id="duree" placeholder="Durée de la formation">
                        </div>
                        <div class="form-group">
                            <label for="dateLimite">Délai Candidature</label>
                            <input type="date" class="form-control" name="dateLimite" id="dateLimite">
                        </div>
                        <div class="form-group">
                            <label for="datePublication">Publié le</label>
                            <input type="date" class="form-control" name="datePublication" id="datePublication">
                        </div>
                        <div class="form-group">
                            <label for="dateDebut">Démarrage</label>
                            <input type="date" class="form-control" name="dateDebut" id="dateDebut">
                        </div>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                        
                </form>
                <a href="{{route('candidatures.index')}}" style="text-decoration: none"><button class="btn btn-primary">Retour</button></a>    
            </div>
</body>
</html>