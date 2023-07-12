<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('alaacss.css') }}">
    <script src="{{ asset('mainFile.js') }}"></script>

  <title>home</title>
</head>


<body class="">
   
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-center align-items-center vh-100">
                <div class="bg-white tm-block ">
                    <div class="row ">
                        <div class="col-12 text-center">
                            <i class="fas fa-3x fa-tachometer-alt tm-site-icon text-center"></i>
                            <p class="navbar-brand" href="../login.html">
                             
                            <h2 style="font-size: 50px; color: rgb(235, 27, 27); font-family:Georgia; font-weight: 500;"
                            class="tm-block-title mt-3">HomeCare,<b style="font-size: 30px; color: rgb(235, 20, 20); font-family:Georgia
                             ; font-weight: 200;"> Ihre intelligente Pflegehelfer.</b><br>
                             <b style="font-size: 30px;color: rgb(48, 43, 192);";>powerd by chatGPT 3.5 Turbo</b></h2>
                            </p>
                        </div>
                    </div>

                    <div class="row fs-2 bg-secondary" style="--bs-bg-opacity: .4;">
                        <div class="col-12">
                            <form action="/tologin" method="POST" class="tm-login-form">
                                @csrf
                            <br>
                               
                                <div class="input-group mt-3 ">

                                    <button style="color: white; background-color: rgba(90, 84, 147, 0.809); border-block-end-width: thick" 
                                        id=" code-button" type="submit"
                                        class="btn btn-primary d-inline-block mx-auto f fs-2">Einloggen
                                    </button>
                                    
                                </div>

                            </form>
                        </div>
                        <b class="text-center">oder</b>
                        <div class="col-12">
                            <form action="/code" method="POST" class="tm-login-form">
                                @csrf
                               
                                
                                <div class="input-group mt-3 ">

                                    <button style="color: white; background-color: rgba(90, 84, 147, 0.809); border-block-end-width: thick; 
                                    writing-mode: horizontal-tb;" 
                                        id=" login-button" type="submit"
                                        class="btn btn-primary d-inline-block mx-auto font-color fs-2">Freischalter Code eingeben 
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
