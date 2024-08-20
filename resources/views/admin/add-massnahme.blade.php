@foreach ($patinfo as $pat)
@endforeach

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patienteninfo</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <link rel="stylesheet" href="{{ asset('alaacss.css') }}">
    <script src="{{ asset('mainFile.js') }}"></script>


</head>

<body id="reportsPage" class="bg02">


    <div class=" container-fluid" id="home">
        <div class="">

            <p class="navbar-brand" href="../login.html">
            <h2 style="font-size: 50px; color: rgb(235, 27, 27); font-family:arial ; font-weight: 500;"
                class="tm-block-title mt-3">Home Care,<b style="font-size: 30px; color: rgb(235, 20, 20); font-family:arial  
            ; font-weight: 200;"> Ihre digitale Helfer. <b style="font-size: 30px; color: rgb(230,230,250); font-family: arial 
            ; font-weight: 200;">Sie sind angemeldet als Administrator:
                        <b style="color: red ; font-size: 40px;">{{$pat->f_code}}</b></b> </b></h2>
            </p>


            <div class="container-fluid bg-secondary" id="">
                <div class="col" style="display: inline-block;">
                    <button class="btn btn-primary" style="background-color: red; border-block-end-width: thick; 
                   writing-mode: horizontal-tb;" onclick="window.location.href='/home'" ; id=" login-button"
                        type="submit" class="btn btn-primary">
                        <span class="material-symbols-outlined align-middle fs-2" style="color:white">
                            logout
                        </span><b>Ausloggen</b>
                    </button>

                </div>
                <div class="col " style="display: inline-block;">
                    <button style="background-color: lightgrey; border-block-end-width: thick; 
                                            writing-mode: horizontal-tb;" onclick="window.location.href='/patinfo'" ;
                        id=" login-button" type="submit" class="btn btn-primary">
                        <span class="material-symbols-outlined align-middle fs-2">
                            import_contacts
                        </span><b>Patienteninfo</b>
                    </button>
                    <br>
                </div>
                <div class="col" style="display: inline-block;">
                    <button style="background-color: lightgrey; border-block-end-width: thick; 
                                            writing-mode: horizontal-tb;" onclick="back()" ; id=" login-button"
                        type="submit" class="btn btn-primary">
                        <span class="material-symbols-outlined align-middle fs-2">
                            arrow_back
                        </span>

                    </button>
                    <br>
                </div>
                <div class="col" style="display: inline-block;">
                    <button style="background-color: lightgrey; border-block-end-width: thick; 
                                            writing-mode: horizontal-tb;" onclick="forward()" ; id=" login-button"
                        type="submit" class="btn btn-primary">
                        <span class="material-symbols-outlined align-middle fs-2">
                            arrow_forward
                        </span>
                    </button>
                    <br>

                </div>
                <div class=" col align-middle text-center text-wrap" style="display: inline-block;color:white;">
                    <span class="material-symbols-outlined align-middle text-center text-wra fs-1"
                        style=" padding-left:1250px ;display: inline-block">
                        calendar_month
                    </span>
                    <p class="align-middle text-center text-wrap fs-1 "
                        style=" padding-left:10px ;display: inline-block" id="date"></p>

                    <b>
                        <span class="material-symbols-outlined align-middle text-center text-wra fs-1">
                            schedule

                        </span>
                        <p class="align-middle text-center text-wrap fs-1 "
                            style="padding-left:10px ;display: inline-block" id="time"></p>
                    </b>


                </div>

            </div>


        </div>
        <br>
        <!-- row -->
        <div class="bs-border-color col">
            <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
                <div class="bg-white tm-block">
                    <div class="container-fluid bg-white" id="navbarSupportedContent">
                        <h1 style="font-size: 50px; color: rgb(235, 27, 27); font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-weight: 500;"
                            class="tm-block-title mt-3">
                        </h1>

                    </div>
                    <div class="col-lg-12" style="background-color:darkgrey">

                        <p class="text-center"
                            style="display: flex;justify-content: center; font-size: 40px; color:darkred; font-family: 'Times New Roman', Times, serif;padding-top: 10px;">
                            Massnahme hinzufügen</p>

                    </div>

                    <div style="background-color:gainsboro;">
                        <div class="col-lg-10">
                            <div class="col-lg-10">
                                <form id="form" action="{{ route('insert-massnahme',['f_code' => $pat->f_code]) }}"
                                    method="post">
                                    @csrf

                                    <br>
                                    <div class="input-group mb-3">
                                        <label style="padding-left: 20px;" for="name"
                                            class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">
                                            Text
                                        </label>

                                        <input type="text" class="form-control" aria-label="Sizing example input"
                                            name="to_do" aria-describedby="inputGroup-sizing-sm" placeholder="Text"
                                            required>
                                    </div>


                                    <div class="d-grid gap-2">
                                        <button
                                            style="margin-left: 30px; margin-bottom: 20px; background-color: dodgerblue;"
                                            type="submit" class="btn btn-primary " id=" login-button"
                                            type="submit">Hinzufügen</button>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
        <footer class="bg-white fs-3 text-center py-3">
        <b style="color:red;">Health Software developed by Alaa Al Haidar</b>
    </footer>
</body>

</html>