<!DOCTYPE html>
<html>
<head>
    <title>Postuler</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

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
        <h1>Postuler pour une formation</h1>
    
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    
        <form action="{{ route('candidatures.creer') }}" method="POST" enctype="multipart/form-data">
            @csrf
    
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>

            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="age">Âge</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>
    
            <div class="form-group">
                <label for="telephone">Téléphone</label>
                <input type="tel" class="form-control" id="telephone" name="telephone" required>
            </div>

            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse" required>
            </div>
         
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="biographie">Biographie</label>
                <textarea class="form-control" id="biographie" name="biographie" required></textarea>
            </div>

            <div class="form-group">
                <label for="motivation">Motivation</label>
                <textarea class="form-control" id="motivation" name="motivation" required></textarea>
            </div>

            <div class="form-group">
                <label for="cv">CV (PDF, DOC, DOCX)</label>
                <input type="file" class="form-control-file" id="cv" name="cv" required>
            </div>
    
            <button type="submit" class="btn btn-primary">Postuler</button>
        </form>
    </div>
</body>
</html>
