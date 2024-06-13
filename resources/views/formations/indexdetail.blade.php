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
        <form action="{{route('connexion')}}">
            <button type="submit">Connexion</button>
          </form>
        </div>

    </header>
    <div class="container1">
        <div><img src="{{ asset('images/student.png') }}" alt=""></div>
        <div class="box1">
            <h2>SAS Hackeuses</h2>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="18" height="auto" viewBox="0 0 25 25" fill="none">
<path d="M19.375 10.9375C16.266 10.9375 13.75 14.0825 13.75 17.9688C13.75 21.855 16.266 25 19.375 25C22.484 25 25 21.855 25 17.9688C25 14.0825 22.484 10.9375 19.375 10.9375ZM21.875 18.2759C21.875 18.5366 21.7043 18.75 21.4957 18.75H19.1297C18.9211 18.75 18.7504 18.5366 18.7504 18.2759V14.5371C18.7504 14.2764 18.9211 14.063 19.1297 14.063H19.6207C19.8293 14.063 20 14.2764 20 14.5371V17.1875H21.4957C21.7043 17.1875 21.875 17.4009 21.875 17.6616V18.2759ZM19.375 9.375C19.5859 9.375 19.7938 9.39111 20 9.41455V7.03125C20 5.78125 19.125 4.6875 18.125 4.6875H15V2.34375C15 1.09375 14.125 0 13.125 0H6.875C5.875 0 5 1.09375 5 2.34375V4.6875H1.875C0.875 4.6875 0 5.78125 0 7.03125V10.9375H15.4344C16.5516 9.95654 17.909 9.375 19.375 9.375ZM12.5 4.6875H7.5V3.125H12.5V4.6875ZM12.7664 15.625H8.125C7.77969 15.625 7.5 15.2754 7.5 14.8438V12.5H0V19.5312C0 20.7812 0.875 21.875 1.875 21.875H13.259C12.7773 20.7012 12.5 19.376 12.5 17.9688C12.5 17.1553 12.5969 16.3711 12.7664 15.625Z" fill="white"/>
</svg>Durée : 5 mois</p>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="17" height="15" viewBox="0 0 25 25" fill="none">
  <path d="M24.3304 7.8125H0.669643C0.299833 7.8125 0 7.55015 0 7.22656V5.46875C0 4.17432 1.19922 3.125 2.67857 3.125H5.35714V0.585938C5.35714 0.262354 5.65698 0 6.02679 0H8.25893C8.62874 0 8.92857 0.262354 8.92857 0.585938V3.125H16.0714V0.585938C16.0714 0.262354 16.3713 0 16.7411 0H18.9732C19.343 0 19.6429 0.262354 19.6429 0.585938V3.125H22.3214C23.8008 3.125 25 4.17432 25 5.46875V7.22656C25 7.55015 24.7002 7.8125 24.3304 7.8125ZM0.669643 9.375H24.3304C24.7002 9.375 25 9.63735 25 9.96094V22.6562C25 23.9507 23.8008 25 22.3214 25H2.67857C1.19922 25 0 23.9507 0 22.6562V9.96094C0 9.63735 0.299833 9.375 0.669643 9.375ZM19.2687 14.0599L17.6968 12.6733C17.4364 12.4436 17.0124 12.442 16.7498 12.67L10.8326 17.8059L8.26674 15.5426C8.00631 15.3129 7.58225 15.3114 7.3197 15.5393L5.73504 16.9148C5.47249 17.1427 5.47076 17.5137 5.73125 17.7434L10.3407 21.8093C10.6011 22.039 11.0251 22.0405 11.2877 21.8126L19.265 14.8885C19.5275 14.6606 19.5292 14.2896 19.2687 14.0599Z" fill="white"/>
</svg>Période de formation :8h/Jour</p>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="17" height="15" viewBox="0 0 25 25" fill="none">
  <path d="M12.5 12.5C15.9531 12.5 18.75 9.70312 18.75 6.25C18.75 2.79688 15.9531 0 12.5 0C9.04688 0 6.25 2.79688 6.25 6.25C6.25 9.70312 9.04688 12.5 12.5 12.5ZM12.5 15.625C8.32812 15.625 0 17.7188 0 21.875V25H25V21.875C25 17.7188 16.6719 15.625 12.5 15.625Z" fill="white"/>
</svg>En présentiel</p>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="22" height="17" viewBox="0 0 42 25" fill="none">
  <path d="M40.5163 5.80742L22.3563 0.228026C21.3667 -0.0760086 20.299 -0.0760086 19.3101 0.228026L1.14941 5.80742C-0.383136 6.27812 -0.383136 8.3048 1.14941 8.7755L4.3154 9.74815C3.62075 10.6069 3.19366 11.6544 3.15135 12.8015C2.5244 13.1609 2.08299 13.8093 2.08299 14.5834C2.08299 15.2852 2.45278 15.8757 2.98533 16.2533L1.32323 23.7324C1.1787 24.3828 1.67349 25 2.3395 25H5.99247C6.65914 25 7.15393 24.3828 7.0094 23.7324L5.3473 16.2533C5.87985 15.8757 6.24963 15.2852 6.24963 14.5834C6.24963 13.8302 5.82841 13.1999 5.23011 12.8341C5.27959 11.8562 5.77959 10.9916 6.57711 10.4435L19.3094 14.3555C19.8993 14.5365 21.0308 14.7624 22.3556 14.3555L40.5163 8.77615C42.0495 8.3048 42.0495 6.27877 40.5163 5.80742ZM22.9676 16.3471C21.1102 16.9174 19.5275 16.6023 18.6975 16.3471L9.25612 13.4467L8.33295 20.8334C8.33295 23.1348 13.9293 25 20.8329 25C27.7365 25 33.3328 23.1348 33.3328 20.8334L32.4096 13.446L22.9676 16.3471Z" fill="white"/>
</svg>Formation gratuite</p>
<p class="btn-p"><div class="btn-candidat">
  
     <div>  <form action="{{route('connexion')}}">
        <button type="submit">Candidater</button>
      </form></div>
     <div><img src="{{ asset('images/fleche.png') }}" alt=""></div></p>
</div>
           
        </div>
    </div>
    <h2 class="admission">Admissions</h2>
    <div class="container2">
        <div class="box2">
            <h3>Réunion d’information</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat 
                ligula id diam tincidunt, id ultricies quam efficitur. Integer mattis 
                vel ex eget ultricies. Proin consectetur volutpat orci sit amet vehicula.
                 Mauris ut mi ut libero eleifend consectetur.</p>
        </div>
        <div class="box2">
        <h3>Test et entretien de motivation</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat 
                ligula id diam tincidunt, id ultricies quam efficitur. Integer mattis 
                vel ex eget ultricies. Proin consectetur volutpat orci sit amet vehicula.
                 Mauris ut mi ut libero eleifend consectetur.</p>
        </div>
        <div class="box2">
        <h3>Entretien final</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat 
                ligula id diam tincidunt, id ultricies quam efficitur. Integer mattis 
                vel ex eget ultricies. Proin consectetur volutpat orci sit amet vehicula.
                 Mauris ut mi ut libero eleifend consectetur.</p>
        </div>
    </div>
    <h2 class="prerequis">Prérequis</h2>
    <div class="container3">
        <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="140" height="140" viewBox="0 0 159 159" fill="none">
  <path d="M11.7261 128.936V122.311H147.274V128.936H11.7261ZM30.5808 115.686C27.5289 115.686 24.9827 114.663 22.9422 112.618C20.9017 110.573 19.8792 108.027 19.8748 104.98V40.2599C19.8748 37.2124 20.8973 34.6662 22.9422 32.6213C24.9871 30.5764 27.5311 29.5561 30.5742 29.5606H128.425C131.473 29.5606 134.017 30.5808 136.057 32.6213C138.098 34.6618 139.12 37.208 139.125 40.2599V104.986C139.125 108.034 138.102 110.578 136.057 112.618C134.013 114.659 131.466 115.681 128.419 115.686H30.5808ZM30.5808 109.061H128.425C129.441 109.061 130.375 108.634 131.228 107.782C132.08 106.93 132.504 105.995 132.5 104.98V40.2599C132.5 39.2441 132.076 38.31 131.228 37.4576C130.375 36.6051 129.439 36.1789 128.419 36.1789H30.5808C29.5606 36.1789 28.6242 36.6051 27.7718 37.4576C26.9238 38.3056 26.4998 39.2397 26.4998 40.2599V104.986C26.4998 106.002 26.9238 106.934 27.7718 107.782C28.6198 108.63 29.5539 109.056 30.5742 109.061" fill="#CE0033"/>
</svg>
<h4> Compréhension de Base de l'Informatique</h4>
<p>
Utilisation de l'Ordinateur: Être à l'aise avec l'utilisation d'un ordinateur, y compris la gestion des fichiers, 
l'installation de logiciels, et la navigation sur Internet.
Systèmes d'Exploitation: Familiarité avec les systèmes d'exploitation courants comme Windows.</p>
        </div>
        <div class="box4">
        <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 127 127" fill="none">
  <path d="M120.431 53.7308H70.069V43.9615H72.2586C73.6964 43.9615 75.12 43.6457 76.4483 43.032C77.7766 42.4183 78.9836 41.5188 80.0002 40.3849C81.0169 39.2509 81.8233 37.9047 82.3735 36.4232C82.9237 34.9416 83.2069 33.3536 83.2069 31.75V12.2115C83.2069 10.6079 82.9237 9.01996 82.3735 7.53839C81.8233 6.05681 81.0169 4.71062 80.0002 3.57668C78.9836 2.44273 77.7766 1.54324 76.4483 0.929548C75.12 0.315861 73.6964 0 72.2586 0H54.7414C51.8377 0 49.053 1.28657 46.9998 3.57668C44.9466 5.86678 43.7931 8.97284 43.7931 12.2115V31.75C43.7931 33.3536 44.0763 34.9416 44.6265 36.4232C45.1767 37.9047 45.9831 39.2509 46.9998 40.3849C49.053 42.675 51.8377 43.9615 54.7414 43.9615H56.931V53.7308H6.56896C4.82677 53.7308 3.15593 54.5027 1.92401 55.8768C0.692086 57.2508 0 59.1145 0 61.0577C0 63.0009 0.692086 64.8645 1.92401 66.2386C3.15593 67.6127 4.82677 68.3846 6.56896 68.3846H21.8966V83.0385H19.7069C16.8032 83.0385 14.0185 84.325 11.9653 86.6151C9.9121 88.9053 8.75862 92.0113 8.75862 95.25V114.788C8.75862 118.027 9.9121 121.133 11.9653 123.423C14.0185 125.713 16.8032 127 19.7069 127H37.2241C40.1278 127 42.9125 125.713 44.9657 123.423C47.0189 121.133 48.1724 118.027 48.1724 114.788V95.25C48.1724 92.0113 47.0189 88.9053 44.9657 86.6151C42.9125 84.325 40.1278 83.0385 37.2241 83.0385H35.0345V68.3846H91.9655V83.0385H89.7759C86.8722 83.0385 84.0875 84.325 82.0343 86.6151C79.9811 88.9053 78.8276 92.0113 78.8276 95.25V114.788C78.8276 118.027 79.9811 121.133 82.0343 123.423C84.0875 125.713 86.8722 127 89.7759 127H107.293C110.197 127 112.981 125.713 115.035 123.423C117.088 121.133 118.241 118.027 118.241 114.788V95.25C118.241 92.0113 117.088 88.9053 115.035 86.6151C112.981 84.325 110.197 83.0385 107.293 83.0385H105.103V68.3846H120.431C122.173 68.3846 123.844 67.6127 125.076 66.2386C126.308 64.8645 127 63.0009 127 61.0577C127 59.1145 126.308 57.2508 125.076 55.8768C123.844 54.5027 122.173 53.7308 120.431 53.7308ZM56.931 14.6538H70.069V29.3077H56.931V14.6538ZM35.0345 112.346H21.8966V97.6923H35.0345V112.346ZM105.103 112.346H91.9655V97.6923H105.103V112.346Z" fill="#CE0033"/>
</svg>
      <h4>Compétences en Réseaux</h4>
      <p>Notions de Base sur les Réseaux: Comprendre les concepts de base des réseaux, comme les adresses IP, les ports, les protocoles (TCP/IP), et comment les appareils communiquent entre eux.
      Réseaux Locaux: Apprendre à configurer et dépanner un réseau local (LAN).</p>
       
        </div>
    </div>
    <h2 class="competence">Compètences visées</h2>
    <div class="container4">
        <div>
            <p><svg width="25" height="25" viewBox="0 0 43 44" fill="none" xmlns="http://www.w3.org/2000/svg">
<ellipse cx="21.0001" cy="21.3987" rx="21.0001" ry="21.3987" transform="matrix(1 0.000274455 0.000269344 1 0.924805 0.719727)" fill="#FFC107"/>
</svg>
Connaissances des Protocoles Réseau
</p>
<p><svg width="25" height="25" viewBox="0 0 43 44" fill="none" xmlns="http://www.w3.org/2000/svg">
<ellipse cx="21.0001" cy="21.3987" rx="21.0001" ry="21.3987" transform="matrix(1 0.000274455 0.000269344 1 0.924805 0.719727)" fill="#FFC107"/>
</svg>
Connaissances des Protocoles Réseau
</p>
<p><svg width="25" height="25" viewBox="0 0 43 44" fill="none" xmlns="http://www.w3.org/2000/svg">
<ellipse cx="21.0001" cy="21.3987" rx="21.0001" ry="21.3987" transform="matrix(1 0.000274455 0.000269344 1 0.924805 0.719727)" fill="#FFC107"/>
</svg>
Connaissances des Protocoles Réseau
</p>
        </div>
        <div>
            <p><svg width="25" height="25" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.928223 0.939453L0.930973 11.1508L10.9521 11.1535L10.9493 0.942203L0.928223 0.939453ZM15.9599 0.943579L15.9626 11.1549L25.9837 11.1576L25.981 0.946329L15.9599 0.943579ZM30.9915 0.947704L30.9943 11.159L41.0154 11.1618L41.0126 0.950454L30.9915 0.947704ZM0.932348 16.2564L0.935099 26.4677L10.9562 26.4705L10.9534 16.2592L0.932348 16.2564ZM15.964 16.2606L15.9668 26.4719L25.9879 26.4746L25.9851 16.2633L15.964 16.2606ZM30.9957 16.2647L30.9984 26.476L41.0195 26.4787L41.0168 16.2674L30.9957 16.2647ZM0.936474 31.5734L0.939224 41.7847L10.9603 41.7875L10.9576 31.5762L0.936474 31.5734ZM15.9681 31.5775L15.9709 41.7889L25.992 41.7916L25.9892 31.5803L15.9681 31.5775ZM30.9998 31.5817L31.0025 41.793L41.0236 41.7957L41.0209 31.5844L30.9998 31.5817Z" fill="#FFC107"/>
</svg>
Configuration des Réseaux
</p>
<p><svg width="25" height="25" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.928223 0.939453L0.930973 11.1508L10.9521 11.1535L10.9493 0.942203L0.928223 0.939453ZM15.9599 0.943579L15.9626 11.1549L25.9837 11.1576L25.981 0.946329L15.9599 0.943579ZM30.9915 0.947704L30.9943 11.159L41.0154 11.1618L41.0126 0.950454L30.9915 0.947704ZM0.932348 16.2564L0.935099 26.4677L10.9562 26.4705L10.9534 16.2592L0.932348 16.2564ZM15.964 16.2606L15.9668 26.4719L25.9879 26.4746L25.9851 16.2633L15.964 16.2606ZM30.9957 16.2647L30.9984 26.476L41.0195 26.4787L41.0168 16.2674L30.9957 16.2647ZM0.936474 31.5734L0.939224 41.7847L10.9603 41.7875L10.9576 31.5762L0.936474 31.5734ZM15.9681 31.5775L15.9709 41.7889L25.992 41.7916L25.9892 31.5803L15.9681 31.5775ZM30.9998 31.5817L31.0025 41.793L41.0236 41.7957L41.0209 31.5844L30.9998 31.5817Z" fill="#FFC107"/>
</svg>
Configuration des Réseaux
</p>
<p><svg width="25" height="25" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.928223 0.939453L0.930973 11.1508L10.9521 11.1535L10.9493 0.942203L0.928223 0.939453ZM15.9599 0.943579L15.9626 11.1549L25.9837 11.1576L25.981 0.946329L15.9599 0.943579ZM30.9915 0.947704L30.9943 11.159L41.0154 11.1618L41.0126 0.950454L30.9915 0.947704ZM0.932348 16.2564L0.935099 26.4677L10.9562 26.4705L10.9534 16.2592L0.932348 16.2564ZM15.964 16.2606L15.9668 26.4719L25.9879 26.4746L25.9851 16.2633L15.964 16.2606ZM30.9957 16.2647L30.9984 26.476L41.0195 26.4787L41.0168 16.2674L30.9957 16.2647ZM0.936474 31.5734L0.939224 41.7847L10.9603 41.7875L10.9576 31.5762L0.936474 31.5734ZM15.9681 31.5775L15.9709 41.7889L25.992 41.7916L25.9892 31.5803L15.9681 31.5775ZM30.9998 31.5817L31.0025 41.793L41.0236 41.7957L41.0209 31.5844L30.9998 31.5817Z" fill="#FFC107"/>
</svg>
Configuration des Réseaux
</p>
        </div>
        <div>
            <p><svg width="25" height="25" viewBox="0 0 43 31" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M42.0457 8.33328L34.0555 0.423399L21.1252 13.986L7.80825 0.802829L0.0500665 8.94036L21.3572 30.0334L42.0457 8.33328Z" fill="#FFC107"/>
</svg>
Tests de Pénétration
</p>
<p><svg width="25" height="25" viewBox="0 0 43 31" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M42.0457 8.33328L34.0555 0.423399L21.1252 13.986L7.80825 0.802829L0.0500665 8.94036L21.3572 30.0334L42.0457 8.33328Z" fill="#FFC107"/>
</svg>
Tests de Pénétration
</p>
<p><svg width="25" height="25" viewBox="0 0 43 31" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M42.0457 8.33328L34.0555 0.423399L21.1252 13.986L7.80825 0.802829L0.0500665 8.94036L21.3572 30.0334L42.0457 8.33328Z" fill="#FFC107"/>
</svg>
Tests de Pénétration
</p>
</div>
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
    .infos_hack{
        /* border:solid;
        border-radius: 20px;
      background-color:  #CE0033; */
    }
    .box1{
        border-style:solid;
        background-color:#CE0033;
        color:white;
        width: 510px;
      height: 300px;
     flex-shrink: 0;
     border-radius: 20px;
     margin-top:98px;
     padding-left:30px;
     font-weight:bold;
    }
    .container4 p{
        font-size:1.5rem;
    }
    .box1 svg{
        margin-right:10px
    }
    .container1{
        display:flex;
        gap:230px;
    }
    .container1 button{
        border:none; 
        background-color:white;
        font-size:15px
    }
    
    .container h2{
        font-size:2rem
    }
    .container2{
         display:flex;
         justify-content:space-around
    }
    .box2 p{
        width: 351px;
    }
    .admission{
        text-align:center;
        margin-top:150px;
        margin-bottom:50px
    }
    .box2{
        border-radius: 30px;
        background: var(--rouge-simplon, #CE0033);
        width: 406px;
      height: 199px;
       flex-shrink: 0;
     color: var(--Blanc, #FFF);
       font-size: 14px;
    }
    .box2 p{
        font-weight: 500;
        line-height: 20px;
        margin-left:20px
    }
    .box2 h3{
        text-align:center
    }
    .prerequis{
        text-align:center;
        margin-top:140px;
        margin-bottom:40px
    }
    .container3{
        display:flex;
        justify-content:space-around;
    }
    .container3 h4{
       
        color: #000;
font-family: Inter;
font-size: 24px;
font-style: normal;
font-weight: 700;
line-height: 30px; /* 125% */

    }
    .container3 svg{
        margin-left:150px
    }
    .container3 p{
        color: #000;
font-family: Inter;
font-size: 16px;
font-style: normal;
font-weight: 500;
line-height: 30px;
width: 591px;
    }
    .box4{
        margin-top:48px
    }
    .competence{
        text-align:center;
        margin-top:140px;
        margin-bottom:40px
    }
    .container4{
        display:flex;
        justify-content:space-around;
        width: 1436.006px;
/* height: 424.917px; */
flex-shrink: 0;
background: var(--rouge-simplon, #CE0033);
color:white;
padding-top:28px;
padding-bottom:28px
    }
    .container4 p{
        margin-bottom:55px
    }
    .container_icon{
        display:flex;
        gap:18px
    }
    .icon{
        padding:4px;
        background-color:#CE0033;
        border-radius:35px
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
</style>
</html>