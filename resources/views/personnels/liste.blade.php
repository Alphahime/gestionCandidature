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
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            min-height: 100vh;
            background-color: #f0f0f0;
        }

        nav {
            width: 250px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            height: 100vh;
            position: fixed;
        }

        nav li {
            list-style: none;
            margin-bottom: 20px;
        }

        nav a {
            text-decoration: none;
            font-size: 1.1rem;
            color: black;
            display: flex;
            align-items: center;
            padding: 10px;
            transition: all 0.3s ease;
        }

        nav a box-icon {
            margin-right: 10px;
            font-size: 1.5rem;
        }

        nav a:hover {
            color: white;
            background-color: #CE0033;
        }

        nav button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
            border: none;
            background-color: #CE0033;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s ease;
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
            text-decoration: none;
        }

        .Btn_add img {
            margin-right: 5px;
            height: 20px;
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

        .content-page {
            margin-left: 270px;
            flex: 1;
            padding: 20px;
            width: calc(100% - 270px);
        }

        .background {
            background-color: #CE0033;
            padding: 5vh;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <header>
                <nav>
                    <li><a href="#"><img src="{{ asset('images/logosimplon.png') }}" alt="Logo Simplon" class="imgfoot" width="auto" height="70"></a></li>
                    <li><a href="#" class="lien"><box-icon type='solid' name='home'></box-icon>Tableau de bord</a></li>
                    <li><a href="/ajout_form" class="lien"><box-icon type='solid' name='book-reader'></box-icon>Ajouter</a></li>
                    <li><a href="/candidatures" class="lien"><box-icon name='list-ul'></box-icon>Liste des candidatures</a></li>
                    <li><a href="#" class="lien"><box-icon type='solid' name='bell-ring'></box-icon>Notifications</a></li>
                    <li class="apparence"><a href="#" class="lien"><box-icon name='color'></box-icon>Apparence</a></li>
                    <li><a href="#"><button><i class="fas fa-sign-out-alt"></i>Déconnexion</button></a></li>
                </nav>
            </header>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
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
