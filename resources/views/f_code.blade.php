<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('alaacss.css') }}">
    <script src="{{ asset('mainFile.js') }}"></script>

  <title>loggen</title>
</head>


<body class="">
    @csrf
    <div class="container">
        <div class="row">
            <div style="background-color:transparent" class="d-flex justify-content-center align-items-center vh-100">
                <div class="bg-white tm-block ">
                    <div class="row ">
                        <div class="col-12 text-center">
                            <i class="fas fa-3x fa-tachometer-alt tm-site-icon text-center"></i>
                            <p class="navbar-brand" href="../login.html">
                             
                            <h2 style="font-size: 50px; color: rgb(235, 27, 27); font-family:Georgia, 'Times New Roman', Times, serif; font-weight: 500;"
                            class="tm-block-title mt-3">Home Care,<b style="font-size: 30px; color: rgb(235, 20, 20); font-family:Georgia, 'Times New Roman',
                             Times, serif; font-weight: 200;"> Für Ihre Gesundheit da.</b><br>
                             <b style="font-size: 30px;color: rgb(48, 43, 192);";>powerd by chatGPT 3.5 Turbo</b></h2>
                            </p>
                        </div>
                    </div>

                    <div class="row fs-2 bg-secondary">
                        <div class="col-12">
                            <form action="/kontoSetup" method="POST" class="tm-login-form">
                                @csrf
                                <div style="width: 550px;" class="input-group">
                                    <label for="username" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">
                                        <p style="font-size: larger;color: white;">Freischalter code</p>
                                    </label>
                                 
                                    <input style="height: 20px; width: 400px;" name="loginname" type="text"
                                        class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7 fs-2"
                                        placeholder="Freischalter code eingeben" id="email" value="" required>
                                </div>
                                <div style="width: 550px;" class="input-group mt-3">
                                    <label for="password" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">
                                        <p style="font-size: larger;color: white;">Nutzername</p>
                                    </label>
                                    <input style="height: 20px;width: 400px;" name="loginpassword" type="text"
                                        class="form-control validate fs-2" placeholder="Nutzername eingeben" id="password"
                                        value="" required>
                                </div>
                                <div style="width: 550px;" class="input-group mt-3">
                                    <label for="password" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">
                                        <p style="font-size: larger;color: white;">Passwort</p>
                                    </label>
                                    <input style="height: 20px;width: 400px;" name="loginpassword" type="password"
                                        class="form-control validate fs-2" placeholder="Passwort eingeben" id="password"
                                        value="" required>
                                </div>
                                <div style="width: 550px;" class="input-group mt-3">
                                    <label for="password" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">
                                        <p style="font-size: larger;color: white;">Geburtsdatum</p>
                                    </label>
                                    <input style="height: 20px;width: 400px;" name="loginpassword" type="date"
                                        class="form-control validate fs-2" placeholder="Geburtsdatum eingeben" id="password"
                                        value="" required>
                                </div>
                                <div style="width: 550px;" class="input-group mt-3">
                                    <label for="password" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">
                                        <p style="font-size: larger;color: white;">Pflegegrad</p>
                                    </label>
                                    <input style="height: 20px;width: 400px;" name="Pflegegrad" type="text"
                                        class="form-control validate fs-2" placeholder="Pflegegrad eingeben" id="Pflegegrad"
                                        value="" required>
                                </div>
                                <div style="width: 550px;" class="input-group mt-3">
                                    <label for="password" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">
                                        <p style="font-size: larger;color: white;">Geschlecht</p>
                                    </label>
                                    <input style="height: 20px;width: 400px;" name="Geschlecht" type="text"
                                        class="form-control validate fs-2" placeholder="Geschlecht eingeben" id="Geschlecht"
                                        value="" required>
                                </div>
                                <div class="input-group mt-3 ">

                                    <button style="color: rgb(13, 13, 13); background-color: darkgrey; border-block-end-width: thick; 
                                    writing-mode: horizontal-tb;" 
                                        id=" login-button" type="submit"
                                        class="btn btn-primary d-inline-block mx-auto font-color fs-2">Konto erstellen
                                    </button>
                                    
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>

</body>
</html>
