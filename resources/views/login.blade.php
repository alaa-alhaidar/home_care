<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="{{ asset('alaacss.css') }}">
  <script src="{{ asset('mainFile.js') }}"></script>

  <title>login</title>
</head>
<body>
    @csrf
    <div class="container">
        <div class="row ">
            <div style="background-color:transparent" class="d-flex justify-content-center align-items-center vh-100">
                <div class="bg-white tm-block" style="border-radius: 15px;">
                    <div class="row col-xl-12 text-center">
                       
                            <i class="fas fa-3x fa-tachometer-alt tm-site-icon text-center"></i>
                            <p class="navbar-brand" href="../login.html">
                                <h2 style="font-size: 50px; color: rgb(235, 27, 27); font-family: Georgia; font-weight: 500;"
                                    class="tm-block-title mt-3">HomeCare,<b style="font-size: 30px; color: rgb(235, 20, 20); font-family: Georgia; font-weight: 200;"> Ihre intelligente Pflegehelfer.</b><br>
                                    <b style="font-size: 30px; color: rgb(48, 43, 192);">powered by chatGPT 3.5 Turbo</b></h2>
                            </p>
                      
                    </div>

                    <div class="row fs-2 bg-secondary" style="--bs-bg-opacity: .4; border-radius: 15px;">
                        <div class="col-12">
                            <form action="/login" method="POST" class="tm-login-form">
                                @csrf
                                <div style="border-radius: 15px; width: 550px;" class="input-group">
                                    <label for="username" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">
                                        <p style="font-size: larger; color: black;">Nutzername</p>
                                    </label>
                                    <input style=" border-radius: 15px; height: 20px; width: 400px;" name="name" type="text"
                                        class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7 fs-2"
                                        placeholder="Nutzername eingeben" id="name" value="" required>
                                </div>
                                <div style="border-radius: 15px; width: 550px;" class="input-group mt-3">
                                    <label for="password" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">
                                        <p style="font-size: larger; color: black;">Passwort</p>
                                    </label>
                                    <input style="border-radius: 15px; height: 20px; width: 400px;" name="password" type="password"
                                        class="form-control validate fs-2" placeholder="Passwort eingeben" id="password"
                                        value="" required>
                                </div>
                                <div class="input-group mt-3">
                                    <button  style="color: white; background-color: rgba(90, 84, 147, 0.809);  border-radius: 15px;"
                                        id="login-button" type="submit" class="btn btn-primary d-inline-block mx-auto font-color fs-2">Einloggen
                                    </button>
                                </div>
                            </form>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
