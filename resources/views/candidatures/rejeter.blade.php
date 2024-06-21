<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidature Rejetée</title>
</head>
<body>
<<<<<<< HEAD
    <h2>Votre candidature a été rejetée</h2>
    <p>Bonjour,</p>
    {{ $candidature->candidat->prenom }}  {{ $candidature->candidat->nom }} 
    <p>{{ $candidature->candidat->prenom }}  {{ $candidature->candidat->nom }} j'espère que vous vous portez bien!
    </p>
    <p>Nous avons le regret de vous informer que votre candidature pour la formation <strong> {{ $candidature->formation->libelle }} </strong> n'a pas été retenue.</p>
=======
   
    <h1>Bonjour {{ $candidature->candidat->prenom }}  {{ $candidature->candidat->nom }}!</h1>
    <p>Nous regrettons de vous informer que votre candidature pour la formation <strong> {{ $candidature->formation->libelle }} </strong> n'a pas été retenue.</p>
>>>>>>> dac5a0781a9a494f2056672370a448cc24de4b1a
    <p>Merci pour l'intérêt porté à notre offre.
        N'hésitez pas à accéder à notre plateforme pour postuler d'autres formations
    </p>
</body>
</html>
