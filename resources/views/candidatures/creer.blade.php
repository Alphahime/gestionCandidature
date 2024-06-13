<!-- resources/views/candidatures/creer.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Postuler</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
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
