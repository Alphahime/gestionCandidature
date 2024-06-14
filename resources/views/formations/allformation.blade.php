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
            <li>Acceuil</li>
            <li>Nos formations</li>
            <li>Professionnels </li>
            <li>Contact</li>
        </nav>
        <div  class="btn-avatar" >
        <div> <img src="{{ asset('images/Avatar.png') }}" alt="" class="avatar"></div>  
        <button>Connexion</button>
        </div>

    </header>

    <footer>
        <div >
            <img src="{{ asset('images/logosimplon.png') }}" alt="" class="imgfoot">
            <p>Suivez-nous</p>
            <p>@SimplonSenegal</p>
            <div class="container_icon">
                <div class="icon"><box-icon name='twitter' type='logo' color='white' ></box-icon></div>
                <div class="icon"><box-icon name='instagram-alt' type='logo'  color='white' ></box-icon></div>
                <div class="icon"><box-icon name='youtube' type='logo'  color='white' ></box-icon></div>
                <div class="icon"><box-icon name='linkedin-square' type='logo'  color='white' ></box-icon></div>
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
            <p class="lien">Nos cordonnées</p>
            <p>Adresse:Cité Keur Gorgui villa AD65 </p>
            <p>Téléphone fixe : +221 33 824 05 15</p>
            <p>Mobile : +221 77 499 71 69</p>
            <p>Email : simplon.senegal@simplon.co</p>
        </div>
        <div class="newsletter">
            <p class="lien">Newsletter</p>
            <p class="paragraphe">Souscrivez à notre newsletter en renseignant votre adresse mail.</p>
            <button>Veuillez entrer votre adresse email</button>
        </div>
    </footer>
</body>
<style>
    body{
        font-family:sans-serif
    }
    header{
        display:flex;
        justify-content:space-around;
        margin-top:10px
    }
    nav{
        display: flex;
padding: 10px 0px;
justify-content: center;
align-items: center;
gap: 60px;

    }
    li{
        list-style:none;
        color: #CE0033;
        font-size: 16px;
       font-weight: 700;
      line-height: normal;
      font-family:sans-serif
    }
    .logo{
        width:auto ;
        height:60px
    }
    .avatar{
        width:auto ;
        height:30px;
    }
    .btn-avatar{

         display: inline-flex;
       padding: 10px 24px 10px 10px;
       justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 100px;
       background: #CE0033; 
    }
    .btn-avatar button{
        border:none;
        background: #CE0033;
        color: var(--Colors-Neutral-White, var(--Blanc, #FFF));
        font-size: 16px;
      font-style: normal;
     font-weight: 700;
    }
    
    .lien{
        font-size:1.3rem;
        font-weight:bold;
        color:#CE0033
    }
    .imgfoot{
        width:auto;
        height:75px
    }
    .paragraphe{
        width: 240px;
    }
    .newsletter button{
        background-color:white;
        font-size:15px;
        border:solid;
        box-shadow:10px;
       border:none;
       box-shadow:10px 5px 10px 2px gray;
       border-color:white;
        padding-top:25px;
        padding-bottom:20px;
        border-bottom:solid #CE0033 ;
        border-bottom-width:5px
    }
    footer{
        display:flex;
        justify-content:space-around;
        margin-top:45px
    }
</style>
</html>