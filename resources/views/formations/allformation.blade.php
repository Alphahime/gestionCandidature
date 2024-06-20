<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>Détails de la formation</title>
</head>
<body>
    <header>
        <li><img src="{{ asset('images/logo.png') }}" alt="" class="logo"></li>
        <nav>
            <a href="{{route('landing')}}" style="text-decoration: none"><li>Accueil</li></a>
            <a href="{{route('nos_formations')}}" style="text-decoration: none"><li>Nos formations</li></a>
            <li>Contact</li>
        </nav>
        <div class="btn-avatar">
            <div><img src="{{ asset('images/Avatar.png') }}" alt="" class="avatar"></div>  
            <button>Connexion</button>
        </div>
    </header>
    <div class="section-nos-formations">
        <h1>Nos Formations</h1>
        <div class="all-card-contain">
            <div class="box-card">
            <img src="{{ asset('images/africanwoman.jpg') }}" alt="">
                <div class="card-label">Développement web</div>
                <a href="{{route('details_formation')}}"><button class="btn-formation   ">Découvrez la formation</button></a>
                <div class="horizontal-bar"></div>
            </div>
            <div class="box-card">
                <div class="card-label">Référent Digitale</div>
                <a href="{{route('details_formation')}}"><button class="btn-formation   ">Découvrez la formation</button></a>
                <div class="horizontal-bar"></div>
            </div>
            <div class="box-card">
                <img src="{{ asset('images/africanwoman.jpg') }}" alt="">
                <div class="card-label">Référent Digitale</div>
                <a href="{{route('details_formation')}}"><button class="btn-formation   ">Découvrez la formation</button></a>
                <div class="horizontal-bar"></div>
            </div>
        </div>  
    </div>
    <footer>
        <div>
            <img src="{{ asset('images/logosimplon.png') }}" alt="" class="imgfoot">
            <p>Suivez-nous</p>
            <p>@SimplonSenegal</p>
            <div class="container_icon">
                <div class="icon"><box-icon name='twitter' type='logo' color='white'></box-icon></div>
                <div class="icon"><box-icon name='instagram-alt' type='logo' color='white'></box-icon></div>
                <div class="icon"><box-icon name='youtube' type='logo' color='white'></box-icon></div>
                <div class="icon"><box-icon name='linkedin-square' type='logo' color='white'></box-icon></div>
            </div>
        </div>
        <div>
            <p class="lien">Liens utiles</p>
            <p>Acceuil</p>
            <p>Nos formations</p>
            <p>Professionnels</p>
            <p>Contact</p>
        </div>
        <div>
            <p class="lien">Nos coordonnées</p>
            <p>Adresse: Cité Keur Gorgui villa AD65</p>
            <p>Téléphone fixe : +221 33 824 05 15</p>
            <p>Mobile : +221 77 499 71 69</p>
            <p>Email : simplon.senegal@simplon.co</p>
        </div>
        <div class="newsletter">
            <p class="lien">Newsletter</p>
            <p class="paragraphe">Souscrivez à notre newsletter en renseignant votre adresse mail.</p>
            <input type="email" placeholder="Veuillez entrer votre adresse email" class="newsletter-input">
            <button class="btn-newsletter">S'abonner</button>
        </div>
    </footer>
</body>
<style>
    body {
        font-family: sans-serif;
    }
    h1{
        margin-bottom:10vh
    }
    header {
        display: flex;
        justify-content: space-around;
        margin-top: 10px;
    }
    nav {
        display: flex;
        padding: 10px 0;
        justify-content: center;
        align-items: center;
        gap: 60px;
    }
    li {
        list-style: none;
        color: #CE0033;
        font-size: 16px;
        font-weight: 700;
        line-height: normal;
        font-family: sans-serif;
    }
    .logo {
        width: auto;
        height: 60px;
    }
    .avatar {
        width: auto;
        height: 30px;
    }
    .btn-avatar {
        display: inline-flex;
        padding: 10px 24px 10px 10px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 100px;
        background: #CE0033;
    }
    .btn-avatar button {
        border: none;
        background: #CE0033;
        color: #FFF;
        font-size: 16px;
        font-weight: 700;
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
    .btn-formation, .btn-postuler {
        margin: 10px 0;
        padding: 10px 20px;
        font-size: 1rem;
        font-weight: bold;
        color: #fff;
        background-color: #CE0033;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        width: 100%;
    }
    .btn-formation:hover, .btn-postuler:hover {
        background-color: #a80026;
    }
    .lien {
        font-size: 1.3rem;
        font-weight: bold;
        color: #CE0033;
    }
    .imgfoot {
        width: auto;
        height: 75px;
    }
    .paragraphe {
        width: 240px;
    }
    .newsletter-input {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .btn-newsletter {
        background-color: #CE0033;
        color: #fff;
        padding: 10px 20px;
        font-size: 1rem;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .btn-newsletter:hover {
        background-color: #a80026;
    }
    footer {
        display: flex;
        justify-content: space-around;
        margin-top: 45px;
    }
</style>
</html>
