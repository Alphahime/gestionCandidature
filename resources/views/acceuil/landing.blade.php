<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page d'acceuil</title>
    <style>
        /* Styles pour la page d'accueil */
    * {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing:border-box;
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

        .container {
            width: 100%;
            height: 400px;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .section-baniere {
            position: relative;
            background-color: #f0f0f0;
            width: 100%;
            height: 500px; 
            background-image: url('https://www.cegid.com/fr/wp-content/uploads/sites/7/2023/01/Header_863497498_900x400_0120-ApprocheCollaborativePME.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            text-align: center;
            align-items: center;
            display: inline-block;
            padding-top: 10rem;
            color: white; /* Ensure text is white */
        }

        .section-baniere::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
            z-index: 1; /* Place overlay above background but below text */
        }

        .section-baniere h1,
        .section-baniere p {
            position: relative;
            z-index: 2; /* Place text above overlay */
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
            height: 450px; /* Adjusted height for new content */
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

        .date-info {
            margin-top: -2rem;
            font-size: 30px;
            line-height: 1.5;

        }

        .date-info .red {
            color: #CE0033;
        }

        .date-info .black {
            color: #000;
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


        footer{
    display:flex;
    justify-content:space-around;
    margin-top:45px
}
.btn-candidat{
    display:flex;
    border:solid;
    width: 129px;
  border-radius: 25px;
   background: var(--Blanc, #FFF);
   padding-top:5px;
   padding-left:5px;
   margin-left:350px
}

.btn-candidat button{
    font-size:17px;
    font-weight:bold;
    padding-bottom:5px;
    padding-top:5px
}
.btn-candidat img{
    padding-top:5px
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
.explorer-container {
    display: flex;
    justify-content: center;
    margin: 50px 0; /* Ajuster la marge pour un espacement approprié */
}

.explorer-button {
    display: flex;
    align-items: center;
    background-color: #CE0033;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 25px;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
}

.icon-fleche {
    margin-right: 10px;
    width: 20px; /* Ajuster la taille de l'icône selon vos besoins */
    height: auto;
}


    </style>
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
           <form action="{{route('connexion')}}">
               <button type="submit">Connexion</button>
             </form>
           </div>
   
       </header>

    <div class="section-baniere" style="background-image: url('https://www.cegid.com/fr/wp-content/uploads/sites/7/2023/01/Header_863497498_900x400_0120-ApprocheCollaborativePME.jpg'); background-color: rgba(240, 240, 240, 0.5);">
        <h1 style="font-size: 45px">Bienvenue sur votre  <br>
            plateforme simplon Sénégal</h1>
        <p style="font-size:22px">Simplon Sénégal vous propose diverses formations de qualité et riches en <br>
            pratique et en soft skills, découvrez votre formation.</p>
    </div>
    
    <div class="section-quisommesnous">
        <h1>Qui sommes-nous</h1>
        <div class="container">
            <div class="box-image-circle"></div>
            <div class="box-texte">
                <p style="font-size: 22px;text-align:left">Lorem ipsum" is a placeholder text commonly used in graphic <br>
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
    <div class="explorer-container">
        <button class="explorer-button">
            <img src="{{ asset('images/fleche.png') }}" alt="Flèche" class="icon-fleche"> Explorer
        </button>
    </div>
    
    <div class="section-nos-formations">
        <h1>Nos Formations</h1>
        <div class="all-card-contain">
            <div class="box-card">
                <div class="card-label">Developpement web</div>
                <div class="date-info">
                    Date limite: <span class="red">20</span>/11 <span class="black">2024</span><br>
                    Début: Juillet 202<br>
                    Durée: 09 mois
                </div>
                <button>Découvrez la formation</button>
                <button>Postuler</button>
                <div class="horizontal-bar"></div>
            </div>
            <div class="box-card">
                <div class="card-label">Référent Digitale</div>
                <div class="date-info">
                    Date limite: <span class="red">20</span>/11 <span class="black">2024</span><br>
                    Début: Juillet 202<br>
                    Durée: 09 mois
                </div>
                <button>Découvrez la formation</button>
                <button>Postuler</button>
                <div class="horizontal-bar"></div>
            </div>
            <div class="box-card">
                <div class="card-label">Référent Digitale</div>
                <div class="date-info">
                    Date limite: <span class="red">20</span>/11 <span class="black">2024</span><br>
                    Début: Juillet 202<br>
                    Durée: 09 mois
                </div>
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
        <div class="box-image" style="background-image: url('https://www.simplon.com/path/to/logo-simplon-senegal.jpg');"></div>
        <div class="box-image"></div>
        <div class="box-image"></div>
        <div class="box-image"></div>
        <div class="box-image"></div>
    </div>


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
</html>



