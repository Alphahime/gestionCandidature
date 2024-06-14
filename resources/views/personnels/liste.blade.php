<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Dashboard Personnel</title>
    <style>
       body {
            display: flex;
            margin:0
        }
        nav {
            width: 250px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
            height: 100vh;
        }
        li {
            list-style: none;
            margin-bottom: 6vh;
        }
        a {
            text-decoration: none;
            font-size: 1.3rem;
            color: black;
            display: flex;
            align-items: center;
            padding: 10px;
            transition: all 0.3s ease;
        }
        a box-icon {
            margin-right: 10px;
        }
        .lien:hover {
            color: white;
            background-color: #CE0033;
        }
        box-icon:hover  {
            color: white;
        }
        header {
            /* margin-top: 5vh; */
            /* margin-left: 3vh; */
        }
        .apparence {
            margin-bottom: 14vh;
        }
        .apparence:hover {
           color:white;
            background-color: #CE0033;
        }
        button {
            margin-top: 10px;
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
        .content-page {
            flex: 1;
            padding: 20px;
        }
        .background{
            background-color:#CE0033;
            padding:5vh;
            color:white
        }
    </style>
</head>
<body>
 <header>
    <nav>
        <li><a href=""><img src="{{ asset('images/logosimplon.png') }}" alt="" class="imgfoot" width="auto" height="70"></a></li>
        <li><a href="" class="lien"><box-icon type='solid' name='home' ></box-icon>Tableau de bord</a></li>
        <li> <a href="/ajout_form" class="btn btn-sm btn-outline-secondary"><box-icon type='solid' name='book-reader'></box-icon>Ajouter</a></li>
        <li><a href="" class="lien"><box-icon name='list-ul'></box-icon>Liste des candidatures</a></li>
        <li><a href="" class="lien"><box-icon type='solid' name='bell-ring'></box-icon>Notifications</a></li>
        <li class="apparence"><a href=""><box-icon name='color'></box-icon>Apparence</a></li>
        <a href="">
     <button> <i class="fas fa-sign-out-alt"></i>Déconnexion</button>
        </a>
    </nav>
 </header>