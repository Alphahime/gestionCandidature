<!DOCTYPE html>
<html>
<head>
    <title>Votre candidature a été validée</title>
</head>
<body>
    <h1>Félicitations, {{ $candidature->candidat->prenom }}  {{ $candidature->candidat->nom }}!</h1>
        <p>Nous sommes ravis de vous annoncer que votre candidature pour la formation <strong> {{ $candidature->formation->libelle }} </strong> a été validée avec succès.
        Rendez-vous le <strong> {{ $candidature->formation->dateDebut }} </strong> pour le début des cours à <strong>{{ $candidature->formation->lieu }}</strong>.
        </p>
      
</body>
</html>
