<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
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
        margin-bottom:2vh
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
            background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url("{{ asset('images/fille.png') }}");
            background-repeat: no-repeat;
            /* padding-right: 15vh;  */
            background-size:cover;
    }
    .container2 img{
        margin-bottom:1vh;
        margin-left:25vh
    }
    .container{
        display:flex;
       gap:25vh
    }
    input{
        margin-bottom:4vh;
        margin-top:1vh;
        border:none;
        border-bottom-style: solid;
        border-bottom-width:thin
    }
    .container2{
        margin-top:2vh
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
    margin-bottom:5vh;
    margin-top:5vh
    }
    .lien{
        text-decoration:none;
        color:#CE0033
    }
    .interface img{
        padding-top:4vh
    }
    </style>
</head>
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
                <form action="{{ route('inscription') }}" method="POST">
                @csrf
            <h1>Créer un compte</h1>
            <img src="{{ asset('images/logo.png') }}" alt="" width="auto" height="70">
            <div> <label for="nom" class="form-label">Nom</label></div>
            <div><input type="text" name="nom" class="form-control" id="nom" placeholder="Fall" required></div>
            <div><label for="prenom" class="form-label">Prenom</label></div>
            <div><input type="text" name="prenom" class="form-control" id="prenom" placeholder="Adia Oumy" required></div>
            <div> <label for="age" class="form-label">Age</label></div>
            <div> <input type="text" name="age" class="form-control" id="age" placeholder="Adia Oumy Fall" required></div>
            <div> <label for="telephone" class="form-label">Telephone</label></div>
            <div> <input type="text" name="telephone" class="form-control" id="telephone" placeholder="+221 77 777 77 77" required></div>
            <div><label for="">Email</label></div>
            <div><input type="email" name="email" class="form-control" id="email" placeholder="adiaoumyf@gmail.com" required></div>
            <div><label for="adresse" class="form-label">Adresse</label></div>
            <div><input type="text" name="adresse" class="form-control" id="adresse" placeholder="+221 77 777 77 77" required></div>
            <div><label for="cv" class="form-label">Curricum Vitae</label></div>
            <div> <input type="file" name="cv" class="form-control" id="cv" placeholder="Adia Oumy Fall" required></div>
            <div><label for="">Mot de passe</label></div>
            <div><input type="password" name="mot_de_passe" class="form-control" id="mot_de_passe" required></div>
            <button class="connect">Se Connecter</button>
            <p>Deja un compte ? <a href="{{route('connexion')}}" class="lien">Connectez-vous</a>  </p>
            </form>
        </div>
    </div>
</body>
</html>



    <!-- <div class="row justify-content-center mt-5">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">Formulaire d'Inscription du Candidat</h1>
                    </div>
                    <div class="card-body">
                        @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <form action="{{ route('inscription') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom</label>
                                <input type="text" name="nom" class="form-control" id="nom" placeholder="Fall" required>
                            </div>
                            <div class="mb-3">
                                <label for="prenom" class="form-label">Prenom</label>
                                <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Adia Oumy" required>
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="text" name="age" class="form-control" id="age" placeholder="Adia Oumy Fall" required>
                            </div>
                            <div class="mb-3">
                                <label for="telephone" class="form-label">Telephone</label>
                                <input type="text" name="telephone" class="form-control" id="telephone" placeholder="+221 77 777 77 77" required>
                            </div>
                            <div class="mb-3">
                                <label for="adresse" class="form-label">Adresse</label>
                                <input type="text" name="adresse" class="form-control" id="adresse" placeholder="+221 77 777 77 77" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="adiaoumyf@gmail.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="mot_de_passe" class="form-label">Mot de Passe</label>
                                <input type="password" name="mot_de_passe" class="form-control" id="mot_de_passe" required>
                            </div>
                            <div class="mb-3">
                                <label for="cv" class="form-label">Curricum Vitae</label>
                                <input type="file" name="cv" class="form-control" id="cv" placeholder="Adia Oumy Fall" required>
                            </div>
                            {{-- <div class="mb-3">
                                <label for="biographie" class="form-label">Biographie</label>
                                <textarea name="biographie" id="biographie" cols="30" rows="10"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="motivation" class="form-label">Motivation</label>
                                <textarea name="motivation" id="motivation" cols="30" rows="10"></textarea>
                            </div> --}}
                           
                            <div class="mb-3">
                                <div class="d-grid">
                                    <button class="btn btn-primary">S'inscrire</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->
    </body>
</html>

