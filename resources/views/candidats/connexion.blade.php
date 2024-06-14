<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script> -->
</head>
<style>
    body{
        font-family:sans-serif;
        margin:0
    }
    input{
        width:100%
    }
    h1{
        font-size:2rem;
        font-weight:500;
        text-align:center;
        margin-bottom:6vh
    }
    .interface p{
        width: 560px;
        height: 50px;
        font-size: 2rem;
            font-weight: 500;
            color: white;
    }
    .interface {
            padding-left: 4vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url("{{ asset('images/garçon.png') }}");
             width: 550px;
            height: 740px; */
            background-repeat: no-repeat;
            /* padding-right: 15vh;  */
            background-size:cover;
    }
    .container2 img{
        margin-bottom:6vh;
        margin-left:25vh
    }
    .container{
        display:flex;
       gap:25vh
    }
    input{
        margin-bottom:10vh;
        margin-top:1vh;
        border:none;
        border-bottom-style: solid;
        border-bottom-width:thin
    }
    .container2{
        margin-top:5vh
    }
    .container2 P{
        text-align:center
    }
    .connect{
        width: 435px;
      height: 65px;
      border-radius: 20px;
       background: var(--rouge-simplon, #CE0033); 
     color: var(--Blanc, #FFF);
     font-size: 24px;
       font-style: normal;
     font-weight: 300;
    line-height: normal;
      letter-spacing: 0.48px;
      border:none;
    margin-bottom:5vh
    }
    .lien{
        text-decoration:none;
        color:#CE0033
    }
    .interface img{
        padding-top:4vh
    }
</style>
<body>
    <div class="container">
         <div class="interface">
            <img src="{{ asset('images/Rectangle .png') }}" alt="" width="auto" height="80">
            <p>Formez-vous aux enjeux de demain pour préparer l’après</p>
        </div>
        <div class="container2">
        <div class="card-body">
                @if(Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('error') }}
                    </div>
                @endif
            <form action="{{ route('connexion') }}" method="POST">
            @csrf
            <h1>Se connecter</h1>
            <img src="{{ asset('images/logo.png') }}" alt="" width="auto" height="70">
            <div><label for="">Email</label></div>
            <div><input type="email" name="email" class="form-control" id="email" placeholder="adiaoumyf@gmail.com" required></div>
            <div><label for="">Mot de passe</label></div>
            <div><input type="password" name="mot_de_passe" class="form-control" id="mot_de_passe" required></div>
            <button class="connect">Se connecter</button>
            <p>Vous n’avez pas encore de compte ? <a href="/inscription" class="lien">Inscrivez-vous</a>  </p>
            </form>
        </div>
    </div>
<!-- <div class="row justify-content-center mt-5">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Connexion</h1>
            </div>
            <div class="card-body">
                @if(Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('error') }}
                    </div>
                @endif
                <form action="{{ route('connexion') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Adresse Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="adiaoumyf@gmail.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="mot_de_passe" class="form-label">Mot de passe</label>
                        <input type="password" name="mot_de_passe" class="form-control" id="mot_de_passe" required>
                    </div>
                    <div class="mb-3">
                        <div class="d-grid">
                            <button class="btn btn-primary">Se connecter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->
</body>
</html>
