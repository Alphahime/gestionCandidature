<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page d'acceuil</title>
    <style>
        /* Styles pour la page d'accueil */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #CE0033;
            color: #fff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-image {
            width: 100px;
            height: 50px;
            background-color: #fff; /* Ajoutez votre image de logo ici */
        }

        ul {
            list-style-type: none;
            display: flex;
        }

        ul a {
            color: #fff;
            text-decoration: none;
            margin-right: 20px;
            font-size: 24px;
            font-weight: 600;
        }

        button {
            background-color: #fff;
            color: #333;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .container {
            width: 100%;
            height: 400px;
            display: flex;
            justify-content: space-around;
        }

        .section-baniere {
            background-color: #f0f0f0;
            width: 100%;
            height: 500px; 
            background-image: url('');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            text-align: center;
            align-items: center;
            display: inline-block;
            padding-top: 10rem;
        }

        .section-quisommesnous {
            background-color: #fff;
            padding: 50px 20px;
            text-align: center;
        }

        .section-nos-formations {
            background-color: #f0f0f0;
            padding: 50px 20px;
            text-align: center;
        }

        .all-card-contain {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
        }

        .box-card {
            position: relative;
            background-color: #fff;
            padding: 20px;
            width: 30%;
            height: 400px;
            margin-bottom: 2rem;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .box-card .card-label {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #CE0033;
            color: #fff;
            width: 250px;
            height: 50px;
            font-weight: bold;
            border-top-right-radius: 2rem;
            justify-content: center;
            display: flex;
            align-items: center; 
        }

        .horizontal-bar {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background-color: #CE0033;
        }

        .section-temoignage {
            background-color: #fff;
            width: 100%;
            padding: 50px 20px;
            display: flex;
            text-align: center;
            justify-content: space-evenly;
            align-items: center;
        }

        .section-temoignage .box-temoignage {
            border: 1px solid rgba(181, 180, 180, 0.544);
            width: 40%;
            height: 80%;
            padding: 20px;
            position: relative;
            text-align: left;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .section-temoignage .box-temoignage .temoignage-text {
            font-style: italic;
            font-size: 18px;
            margin-bottom: 20px;
        }

        .section-temoignage .box-temoignage .temoignage-text::before,
        .section-temoignage .box-temoignage .temoignage-text::after {
            content: '“';
            font-size: 30px;
            color: #CE0033;
        }

        .section-temoignage .box-temoignage .temoignage-text::after {
            content: '”';
        }

        .section-temoignage .box-temoignage .temoignage-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #ccc; /* Ajoutez votre image ici */
            margin: 0 auto;
        }

        .section-temoignage .box-temoignage .temoignage-name {
            text-align: center;
            font-weight: bold;
            color: #333;
            margin-top: 10px;
        }

        .section-nos-partenaires {
            background-color: #f0f0f0;
            width: 100%;
            height: 300px;
            display: flex;
            justify-content: center;
            text-align: center;
        }

        .box-image-circle {
            width: 400px;
            height: 400px;
            margin: 20px;
            background-image: url('https://www.cegid.com/fr/wp-content/uploads/sites/7/2023/01/Header_863497498_900x400_0120-ApprocheCollaborativePME.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            border-radius: 100%;
        }

        .box-image {
            width: 100px;
            height: 100px;
            background-color: #ccc; /* Ajoutez votre image de partenaire ici */
            margin: 20px;
        }

        .box-card button {
            background-color: #fff;
            color: #CE0033;
            border: 2px solid #CE0033;
            width: calc(100% - 40px);
            margin: 5px 20px;
            padding: 10px 0;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .box-card button:hover {
            background-color: #CE0033;
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo-image"></div>
        <ul>
            <a href="">Acceuil</a>
            <a href="">Nos Formations</a>
            <a href="">Professionnel</a>
            <a href="">Contact</a>
        </ul>
        <button>Connexion</button>
    </header>

    <div class="section-baniere" style="background-image: url('https://www.cegid.com/fr/wp-content/uploads/sites/7/2023/01/Header_863497498_900x400_0120-ApprocheCollaborativePME.jpg'); background-color: rgba(240, 240, 240, 0.5);">
        <h1>Bienvenue sur votre  <br>
            plateforme simplon Sénégal</h1>
        <p>Simplon Sénégal vous propose diverses formations de qualité et riches en <br>
            pratique et en soft skills, découvrez votre formation.</p>
    </div>
    
    <div class="section-quisommesnous">
        <h1>Qui somme Nous</h1>
        <div class="container">
            <div class="box-image-circle"></div>
            <div class="box-texte">
                <p>Lorem ipsum" is a placeholder text commonly used in graphic <br>
                    design and publishing. It's a snippet of nonsensical Latin <br>
                    that lets designers focus on layout and visual elements without <br>
                    worrying about actual content.
                    Lorem ipsum" is a placeholder text commonly used in graphic <br>
                    design and publishing. It's a snippet of nonsensical Latin <br>
                    that lets designers focus on layout and visual elements without <br>
                    worrying about actual content.</p>
            </div>
        </div>
    </div>

    <div class="section-nos-formations">
        <h1>Nos Formations</h1>
        <div class="all-card-contain">
            <div class="box-card">
                <div class="card-label">Developpement web</div>
                <button>Découvrez la formation</button>
                <button>Postuler</button>
                <div class="horizontal-bar"></div>
            </div>
            <div class="box-card">
                <div class="card-label">Référent Digitale</div>
                <button>Découvrez la formation</button>
                <button>Postuler</button>
                <div class="horizontal-bar"></div>
            </div>
            <div class="box-card">
                <div class="card-label">Référent Digitale</div>
                <button>Découvrez la formation</button>
                <button>Postuler</button>
                <div class="horizontal-bar"></div>
            </div>
        </div>  
    </div>

    <h1 style="text-align:center">Nos Témoignages</h1>
    <div class="section-temoignage">
        <div class="box-temoignage">
            <div class="temoignage-text">
                "J'ai eu une expérience incroyable avec Simplon Sénégal. Les formateurs sont très compétents et les formations sont très pratiques."
            </div>
            <div class="temoignage-image" style="background-image: url('path/to/image.jpg');"></div>
            <div class="temoignage-name">Alpha Ndiaye</div>
        </div>
        <div class="box-temoignage">
            <div class="temoignage-text">
                "Simplon Sénégal m'a permis d'acquérir des compétences essentielles pour réussir dans le domaine de la technologie."
            </div>
            <div class="temoignage-image" style="background-image: url('path/to/image.jpg');"></div>
            <div class="temoignage-name">Alpha Ndiaye</div>
        </div>
    </div>

    <h1 style="text-align: center">Nos Partenaires</h1>
    <div class="section-nos-partenaires">
        <div class="box-image"></div>
        <div class="box-image"></div>
        <div class="box-image"></div>
        <div class="box-image"></div>
        <div class="box-image"></div>
        <div class="box-image"></div>
    </div>

    <footer></footer>
</body>
</html>
