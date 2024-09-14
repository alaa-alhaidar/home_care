<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('alaacss.css') }}">
    <script src="{{ asset('mainFile.js') }}"></script>

    <title>home</title>
</head>

<body>

    <div class="container" style="border-radius: 30px;">
        <div class="row">
            <div class="d-flex justify-content-center align-items-center vh-100" style="border-radius: 30px;">
                <div class="bg-white tm-block" style="border-radius: 30px;">
                    <div class="row" style="border-radius: 30px;">
                        <div class="col-12 text-center" style="border-radius: 30px;">
                            <i class="fas fa-3x fa-tachometer-alt tm-site-icon text-center"></i>
                            <p class="navbar-brand" href="../login.html">
                            <h2 style="font-size: 50px; color: rgb(235, 27, 27); font-family: Georgia; font-weight: 500;"
                                class="tm-block-title mt-3">
                                HomeCare,<b
                                    style="font-size: 30px; color: rgb(235, 20, 20); font-family: Georgia; font-weight: 200;">
                                    Ihre intelligente Pflegehelfer.</b><br>
                                <b style="font-size: 30px; color: rgb(48, 43, 192);">powered by chatGPT 3.5 Turbo</b>
                            </h2>
                            </p>
                        </div>
                    </div>

                    <div class="row fs-2 bg-secondary" style="--bs-bg-opacity: .4; border-radius: 30px;">
                        <div class="col-12">
                            <form action="/tologin" method="POST" class="tm-login-form">
                                @csrf
                                <br>
                                <div class="input-group mt-3">
                                    <button
                                        style="border-radius: 15px; color: white; background-color: rgba(90, 84, 147, 0.809); border-block-end-width: thick"
                                        id="code-button" type="submit"
                                        class="btn btn-primary d-inline-block mx-auto fs-2">
                                        Einloggen
                                    </button>
                                </div>
                            </form>
                            <br>
                        </div>


                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>